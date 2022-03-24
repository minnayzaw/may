$(document).ready(function(){
  calculateTotal();
  //check for localstorage
  if(localStorage.get == null){
    localStorage.removeItem("products");
  }else{
    updateCartData('old');
  }
  //to add the account of cart on clicking "add to cart"
 $("#add-to-cart").click(function() {
    updateCartData('add');
 })
 //calculate total
 $(".minus-btn, .plus-btn").click(function() {
    calculateTotal($(this).attr('id').split('_')[1]);
 })

});
//update the cart data
function updateCartData(type) {
    if(type == 'old'){
      let old_data = JSON.parse(localStorage.getItem("products"));
      updateCartDiv(old_data);
    }else{
      let product_data, all_data = [];
      if(type == 'add'){
        product_data = {
          'id':parseInt($('#product-id').val()),
          'title':$('#product-title').text(),
          'img':$('#product-image').attr('src'),
          'quantity':parseInt($('#product-quantity').val()),
          'price':parseInt($('#product-price').val())
        };
      }
      if(typeof localStorage.getItem("products") !== 'undefined' && localStorage.getItem("products")) {
        let old_data = JSON.parse(localStorage.getItem("products"));
        if(old_data[0]){
          all_data = old_data.map(obj =>
                 parseInt(obj.id) === parseInt($('#product-id').val()) ? { ...obj, quantity: parseInt(obj.quantity)+parseInt($('#product-quantity').val()) } : obj
          );
        }else{
          all_data.push(product_data);
        }

      }else{
        all_data.push(product_data);
      }
      if(all_data){
        updateCartDiv(all_data);
      }else{
        updateCartDiv(null);
      }
      localStorage.removeItem("products");
      localStorage.setItem('products',JSON.stringify(all_data));
    }


  }
//update the cart div
  function updateCartDiv(my_data) {
    $("#product-cart").html('');
    let new_div = '', new_item = '', title = '', img = '', quantity = 0, price = 0, each_total = 0, total = 0, product_count = 0;
    if(my_data){
      for(let i=0; i<parseInt(my_data.length); i++){
        if(my_data[i]){
          product_count ++;
          id = my_data[i]['id'];
          title = my_data[i]['title'];
          img = my_data[i]['img'];
          quantity = my_data[i]['quantity'];
          price = my_data[i]['price'];
          each_total = (quantity*price);
          total = total + each_total;
            new_div = '<li class="cart-item"><div class="cart-img"><a href="{{url(\'products\')}}"><img src="'+img+'" alt="cart-image" class="img-fluid"></a></div><div class="cart-title"><h6><a href="products.html">'+title+'</a></h6><div class="cart-pro-info"><div class="cart-qty-price"><span class="quantity">'+quantity+' x&nbsp;</span><span class="price-box">$ '+price+' USD</span></div><div class="delete-item-cart"><a href="#" onclick="deleteProduct('+id+')"><i class="icon-trash icons"></i></a></div></div></div></li>';
            $("#product-cart").append(new_div);
            new_item = '<div class="cart-all-pro" id="'+id+'"><div class="cart-pro cart-div"><div class="cart-pro-image cart-box"><a href="{{url(\'productDetail/1\')}}"><img src="'+img+'" class="img-fluid" alt="image"></a></div><div class="pro-details cart-title-box"><h4><a href="{{url(\'productDetail/1\')}}">'+title+'</a></h4><span class="cart-pro-price">$'+price+' USD</span></div><div class="qty-item cart-box"><div class="center"><div class="plus-minus"><span><a href="javascript:void(0)" class="minus-btn text-black">-</a><input type="text" name="name" value="'+quantity+'"><a href="javascript:void(0)" class="plus-btn text-black">+</a></span></div><a onclick="deleteProduct('+id+')" href="#" class="pro-remove">Remove</a></div></div><div class="all-pro-price cart-box"><span>$'+each_total+' USD</span></div></div></div>';
            $(new_item).insertAfter("#cart-detail");
        }
      }
    }
    $("#product-total").text(total);
    // $("#item-total, #item-sub-total").text('$'+(total > 0 ? total : 100)+' USD');
    $('#cart-total, #cart-inner-total').text(product_count);
    // $('#cart-item-number').text((product_count > 1 ? product_count : 1)+' '+ (product_count > 1 ? 'items' : 'item'));
  }
//delete the product in cart
function deleteProduct(id) {
  let myDiv = document.getElementById(id);
  myDiv.remove();
  let old_data = JSON.parse(localStorage.getItem("products"));
  let new_data = old_data.filter(function (obj) {
    return obj.id !== id ;
  });
  localStorage.removeItem("products");
  new_data && localStorage.setItem('products',JSON.stringify(new_data));
  updateCartData('');
}

//calculate Total
function calculateTotal(){
  let products_count = $('.product-div').length;
  let price = 0, quantity = 0, total = 0, all_total = 0;
  for(let i = 1; i <= products_count; i++){
    price = parseInt($('#product_price_'+i).val());
    quantity = parseInt($('#product_quantity_'+i).val());
    total = quantity*price;
    all_total = parseInt(all_total) + parseInt(total);
    $("#product_total_"+i).text('$'+total+' USD');
  }
  $("#product_total_price").text(all_total);
  $("#item-sub-total, #item-total").text('$'+all_total+' USD');
}
