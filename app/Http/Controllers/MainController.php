<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use App\Models\TempCart;
use App\Models\Cart;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;
use Session;


class MainController extends BaseController{

    public function __construct(){
      //get all categories
      $categories = Category::all();
       // Make it available to all views by sharing it
       view()->share('categories', $categories);
       //get the 10 of latest products
       $products = Product::limit(10)->get();
       // Make it available to all views by sharing it
       view()->share('products', $products);

    }


    public function index(Request $r){
      $count = $this->getCartCount(csrf_token());
      return View::make('frontend/home')->with('title', 'Home')->with('count',$count);
    }

    public function about(Request $r){
      $count = $this->getCartCount(csrf_token());
      return View::make('frontend/about')->with('title', 'About Us')->with('count',$count);
    }

    public function products(Request $r, $id){
      $count = $this->getCartCount(csrf_token());
      if($id  > 0){
        $products = Product::where('category_id',$id)->get();
        return View::make('frontend/products')->with('products', $products)->with('title', 'Our Products')->with('count',$count);
      }else{
        return redirect('/');
      }

    }

    public function news(Request $r){
      $count = $this->getCartCount(csrf_token());
      return View::make('frontend/news')->with('title', 'Our News')->with('count',$count);
    }

    public function Contact(Request $r){
      $count = $this->getCartCount(csrf_token());
      return View::make('frontend/contact')->with('title', 'Contact Us')->with('count',$count);
    }

    public function productDetail(Request $r, $id, $customer_temp_id=null){
      $count = $this->getCartCount(csrf_token());
      $product_quantity = 1;
      //get product detail with id
      $product = Product::where('id',$id)->get();
      $stock = Stock::with(['product'])->first();
      $stock_status = 'In stock';
      $stock_quantity = $stock->quantity;
      if($stock->stock_out == 1){
        $stock_status = 'Out of stock';
        $stock_quantity = 0;
      }
      $product_detail = (object) array(
        'id' => $id,
        'title' => $product[0]->title,
        'description' => $product[0]->description,
        'price' => $product[0]->price,
        'image' => $product[0]->image,
        'product_code' => $product[0]->product_code,
        'stock_quantity' => $stock_quantity,
        'stock_status' => $stock_status
      );
      if($id > 0 && $customer_temp_id != ''){
        $product_count = TempCart::where('product_id',$id)->where('customer_id',$customer_temp_id)->get();
        if(count($product_count) > 0){
          $product_quantity = $product_count[0]->quantity;
        }
      }
      //get related products
      $related_products = Product::where('category_id',$product[0]->category_id)->where('id','!=',$id)->get();
      return View::make('frontend/products/detail')->with('title', 'Product Detail')->with('product', $product_detail)->with('related_products', $related_products)->with('quantity', $product_quantity)->with('count',$count);
    }

    private function getCustomerProducts($customer_id = null){
      return DB::select("select products.id as product_id, products.product_code, products.title, products.price, products.image, temp_carts.id, temp_carts.quantity, temp_carts.total, temp_carts.customer_id from products JOIN temp_carts on temp_carts.product_id = products.id where temp_carts.customer_id = '$customer_id'");
    }

    public function cart(Request $r, $id){
      $count = $this->getCartCount(csrf_token());
      $products = $this->getCustomerProducts(csrf_token());
      if(count($products) == 0){
        return redirect('/');
        exit;
      }
      $total = array_sum(array_column($products, 'total'));
      return View::make('frontend/customers/cart')->with('title', 'My Cart')->with('products', $products)->with('total', $total)->with('count',$count);
    }

    public function checkout(Request $r, $id){
      $count = $this->getCartCount(csrf_token());
      $products = $this->getCustomerProducts($id);
      $total = array_sum(array_column($products, 'total'));
      $total = sprintf('%0.2f', $total);
      return View::make('frontend/customers/checkout')->with('title', 'Your Checkout')->with('products', $products)->with('total', $total)->with('count',$count);
    }

    public function order(Request $r, $id){
      return View::make('frontend/products/order')->with('title', 'Order Info');
    }

    private function getCartCount($customer_id = null){
      return TempCart::where("customer_id", $customer_id)->count();
    }

    private function getNewCustomerId($id){
      $old_customer_count = TempCart::where("customer_id", $id)->count();
      return $old_customer_count;
    }

    public function addCart(Request $r){
      if($r->isMethod('post')){
        $customer_id = '';
        $old_count = 0;
        $cart_data = $r->all();
        if(!empty($cart_data['customer_id'])){
            $old_count = TempCart::where("customer_id", $cart_data['customer_id'])->where("product_id", $cart_data['product_id'])->count();
        }
        //if customer id is existing
        if($old_count < 1){
          //create a new cart with customer id
          $cart = new TempCart;
          $cart->product_id = $cart_data['product_id'];
          $cart->quantity = $cart_data['quantity'];
          $cart->total = $cart_data['total'];
          $cart->customer_id = $cart_data['customer_id'];
          $insert_status = $cart->save();

        }else{
          //update an old cart with customer id
          $update_status = TempCart::where("customer_id", $cart_data['customer_id'])
                                  ->where("product_id", $cart_data['product_id'])
                                  ->update(["quantity" => $cart_data['quantity'],"total" => $cart_data['total']]);
        }
        $customer_id = $cart_data['customer_id'];
        return array(
                  'customer_id' => $customer_id,
                  'count' => $this->getCartCount($customer_id)
                );
      }
    }

    public function deleteCart(Request $r){
      if($r->isMethod('post')){
        $cart_data = $r->all();
        $delete_status = TempCart::where("customer_id", $cart_data['customer_id'])
                                ->where("product_id", $cart_data['product_id'])
                                ->delete();
        return $this->getCartCount($cart_data['customer_id']);
      }
    }

    public function addOrder(Request $r){
      if($r->isMethod('post')){
        try{
          //get all info from pay load
          $order_data = $r->all();
          $customer_temp_id = $order_data['customer_id'];
          $first_name = $order_data['first_name'];
          $last_name = $order_data['last_name'];
          $email = $order_data['email'];
          $mobile = $order_data['mobile'];
          $address_street = $order_data['address_street'];
          $address_city = $order_data['address_city'];
          $address_state = $order_data['address_state'];
          $address_zip = $order_data['address_zip'];
          $notes = $order_data['notes'];
          //save the customer's address
          $addressObj = new Address();
          $addressObj->address_street = $address_street;
          $addressObj->address_city = $address_city;
          $addressObj->address_state = $address_state;
          $addressObj->address_zip = $address_zip;
          $addressObj->save();
          $address_id = $addressObj->id;
          //save the customer's info
          $customerObj = new Customer();
          $customerObj->address_id = $address_id;
          $customerObj->first_name = $first_name;
          $customerObj->last_name = $last_name;
          $customerObj->email = $email;
          $customerObj->mobile = $mobile;
          $customerObj->notes = $notes;
          $customerObj->save();
          $customer_id = $customerObj->id;

          if(intval($customer_temp_id) > 0 && intval($customer_id) > 0){
            $order_products = $this->getCustomerProducts($customer_temp_id);
            foreach($order_products as $products){
              //copy from temporary cart to real cart
              $cartObj = new Cart();
              $cartObj->customer_id = $customer_id;
              $cartObj->product_id = $products->id;
              $cartObj->stock_id = null;
              $cartObj->quantity = $products->quantity;
              $cartObj->total = $products->total;
              $cartObj->save();
              $cart_id = $cartObj->id;
              //save order lists
              $orderObj = new Order();
              $orderObj->customer_id = $customer_id;
              $orderObj->cart_id = $cart_id;
              $orderObj->payment_id = null;
              $orderObj->status = 1;
              $orderObj->save();
              $order_id = $orderObj->id;
              //delete the products list from the temporary cart after moving to the real cart and save the order list
              TempCart::where("id", $products->cart_id)->delete();
            }
            if(intval($customer_id) > 0){
                return $customer_id;
            }else{
              return false;
            }
          }else{
            return false;
          }
      }catch (\Exception $e) {
        return false;
      }
      }else{
        return false;
      }
    }

    public function orderComplete(Request $r, $id){
      $customer_data = Cart::where('customer_id',$id)->get('created_at');
      if(!empty($customer_data)){
        $customer_address_info = DB::select('select customers.id as id, customers.mobile as mobile, customers.address_id, address.address_street, address.address_city, address.address_state, address.address_zip, address.address_country from customers LEFT JOIN address on customers.address_id = address.id where customers.id = '.$id);
        $order_no = 'HM'.$id;
        $order_date = date('d F Y h:i A', strtotime($customer_data[0]->created_at));
        $order_total = Cart::where('customer_id',$id)->sum('total');
        $order = array(
          'no' => 'HM'.$id,
          'date' => $order_date,
          'total' => number_format((float)$order_total, 2, '.', ''),
          'street' =>$customer_address_info[0]->address_street,
          'city' =>$customer_address_info[0]->address_city,
          'state' =>$customer_address_info[0]->address_state,
          'zip' =>$customer_address_info[0]->address_zip,
          'country' =>$customer_address_info[0]->address_country,
          'mobile' =>$customer_address_info[0]->mobile
        );
        return View::make('frontend/customers/order_complete')->with('customer_id', $id)->with('title', 'Order Complete')->with('order', $order);
      }else{
        return false;
      }
    }

    public function updateCart(Request $r){
      if($r->isMethod('post')){
        $cart_data = $r->all();
        //update an old cart with customer id
        $update_status = TempCart::where("customer_id", $cart_data['customer_id'])
                                ->where("product_id", $cart_data['product_id'])
                                ->update(["quantity" => $cart_data['quantity'],"total" => $cart_data['total']]);
        return $update_status;
      }
    }

}
