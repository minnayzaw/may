@extends('frontend.layout.master')

@section('banner')
  <section class="about-breadcrumb">
          <div class="about-back section-tb-padding" style="background-image: url({{url('image/about-image.jpg')}})">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="about-l">
                              <ul class="about-link">
                                  <li class="go-home"><a href="/">Home</a></li>
                                  <li class="about-p"><span>{{$title}}</span></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
@endsection

@section('content')
    <!-- cart start -->
     <section class="cart-page section-tb-padding">
         <div class="container">
             <div class="row">
                 <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                     <div class="cart-area">
                         <div class="cart-details">
                             <div class="cart-item" id="cart-detail">
                                 <span class="cart-head">My cart:</span>
                                 <span class="c-items" id="cart-item-number">{{count($products)}} items</span>
                             </div>
                             <input type="hidden" name="product_total_price" id="product_total_price" value="{{$total}}" />
                              @foreach ($products as $pro)
                             <div class="cart-all-pro product-div" id="{{$pro->product_id}}">
                                 <div class="cart-pro">
                                     <div class="cart-pro-image">
                                         <a class="product-detail" id="img_{{$pro->product_id}}" href="#"><img src="{{url('image').'/'.$pro->image}}" class="img-fluid" alt="image"></a>
                                     </div>
                                     <div class="pro-details">
                                         <h4><a class="product-detail"id="title_{{$pro->product_id}}"  href="#">{{$pro->title}}</a></h4>
                                         <span class="cart-pro-price">${{$pro->price}} USD</span>
                                         <input type="hidden" name="product_price_{{$pro->product_id}}" id="product_price_{{$pro->product_id}}" value="{{$pro->price}}" />
                                     </div>
                                 </div>
                                 <div class="qty-item">
                                     <div class="center">
                                         <div class="plus-minus">
                                             <span>
                                                 <a id="minus_{{$pro->product_id}}" href="javascript:void(0)" class="minus-btn text-black decrease-count">-</a>
                                                 <input name="product_quantity_{{$pro->product_id}}" id="product_quantity_{{$pro->product_id}}" type="text" name="name" value="{{$pro->quantity}}">
                                                 <a id="plus_{{$pro->product_id}}" href="javascript:void(0)" class="plus-btn text-black increase-count">+</a>
                                             </span>
                                         </div>
                                         <a id="delete_{{$pro->product_id}}" href="#" class="pro-remove remove-count">Remove</a>
                                     </div>
                                 </div>
                                 <div class="all-pro-price">
                                     <span id="product_total_1">${{$pro->price*$pro->quantity}} USD</span>
                                 </div>
                             </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                     <div class="cart-total">
                         <div class="cart-price">
                             <span>Subtotal</span>
                             <span class="total" id="item-sub-total">${{$total}} USD</span>
                         </div>
                         <!-- <div class="cart-info">
                             <h4>Shipping info</h4>
                             <form>
                                 <label>State</label>
                                 <select class="form-select" aria-label="Default select example">
                                   <option value="">---Select State---</option>
                                   <option value="AL">Alabama</option>
                                   <option value="AK">Alaska</option>
                                   <option value="AZ">Arizona</option>
                                   <option value="AR">Arkansas</option>
                                   <option value="CA">California</option>
                                   <option value="CO">Colorado</option>
                                   <option value="CT">Connecticut</option>
                                   <option value="DE">Delaware</option>
                                   <option value="DC">District Of Columbia</option>
                                   <option value="FL">Florida</option>
                                   <option value="GA">Georgia</option>
                                   <option value="HI">Hawaii</option>
                                   <option value="ID">Idaho</option>
                                   <option value="IL">Illinois</option>
                                   <option value="IN">Indiana</option>
                                   <option value="IA">Iowa</option>
                                   <option value="KS">Kansas</option>
                                   <option value="KY">Kentucky</option>
                                   <option value="LA">Louisiana</option>
                                   <option value="ME">Maine</option>
                                   <option value="MD">Maryland</option>
                                   <option value="MA">Massachusetts</option>
                                   <option value="MI">Michigan</option>
                                   <option value="MN">Minnesota</option>
                                   <option value="MS">Mississippi</option>
                                   <option value="MO">Missouri</option>
                                   <option value="MT">Montana</option>
                                   <option value="NE">Nebraska</option>
                                   <option value="NV">Nevada</option>
                                   <option value="NH">New Hampshire</option>
                                   <option value="NJ">New Jersey</option>
                                   <option value="NM">New Mexico</option>
                                   <option value="NY">New York</option>
                                   <option value="NC">North Carolina</option>
                                   <option value="ND">North Dakota</option>
                                   <option value="OH">Ohio</option>
                                   <option value="OK">Oklahoma</option>
                                   <option value="OR">Oregon</option>
                                   <option value="PA">Pennsylvania</option>
                                   <option value="RI">Rhode Island</option>
                                   <option value="SC">South Carolina</option>
                                   <option value="SD">South Dakota</option>
                                   <option value="TN">Tennessee</option>
                                   <option value="TX">Texas</option>
                                   <option value="UT">Utah</option>
                                   <option value="VT">Vermont</option>
                                   <option value="VA">Virginia</option>
                                   <option value="WA">Washington</option>
                                   <option value="WV">West Virginia</option>
                                   <option value="WI">Wisconsin</option>
                                   <option value="WY">Wyoming</option>
                                 </select>
                                 <label>Zip/postal code</label>
                                 <input type="text" name="code" placeholder="Zip/postal code">
                             </form>
                         </div> -->
                         <div class="shop-total">
                             <span>Total</span>
                             <span class="total-amount" id="item-total">${{$total}} USD</span>
                         </div>
                         <a href="{{url('checkout')}}/{{Request::segment(2)}}" class="check-link">Checkout</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- cart end -->
@endsection
