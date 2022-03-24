$(document).ready(function(){
  if(parseInt($("#cart_detail").text()) == 0){
     $('.shopping-cart').attr("disabled","disabled");
  }else{
    $('.shopping-cart').attr("disabled","");
  }
  //localStorage.removeItem("product_count");
  if(localStorage.getItem("customer_id") == null){
    localStorage.removeItem("customer_id");
    localStorage.removeItem("product_count");
    $('#cart_total').text(0);
    $('#cart_inner_total').text(0);
  }else{
    $('#cart_total').text(localStorage.getItem("product_count"));
    $('#cart_inner_total').text(localStorage.getItem("product_count"));
  }

  //define main url
  var main_url = 'http://localhost:8000/';

  //to add the account of cart on clicking "add to cart"
 $("#add-to-cart").click(function() {
   checkCartCount();
   var total = $('#product_price').val() * $('#product_quantity').val();
   $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       type: 'POST',
       url: main_url+'addCart',
       data: {
           'customer_id':$('meta[name="csrf-token"]').attr('content'),
           'product_id':$('#product_id').val(),
           'quantity':$('#product_quantity').val(),
           'total':total
       },
       success: function(data){
          location.reload();
       }
  });
 })

 //clik on cart detail
 $("#cart_detail").click(function(){
   checkCartCount();
   if(parseInt($("#cart_detail").text()) == 0){
       $(location).prop('href', '#');
   }else{
     $(location).prop('href', main_url+'cart/'+$('meta[name="csrf-token"]').attr('content'));
   }
 })

 //remove the item from the cart
 $(".remove-count").click(function(){
   checkCartCount();
   var product_id = $(this).attr('id').split('_')[1];
   $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       type: 'POST',
       url: main_url+'deleteCart',
       data: {
           'customer_id':$('meta[name="csrf-token"]').attr('content'),
           'product_id':product_id
       },
       success: function(data){
          $(location).prop('href', main_url+'cart/'+$('meta[name="csrf-token"]').attr('content'));
          $('#cart_total').text(data);
          $('#cart_inner_total').text(data);
          localStorage.setItem('product_count',data);
          if(parseInt($("#cart_detail").text()) == 0){
              $(location).prop('href', main_url);
          }
       }
     });
 })

 //disabled the order button in Default
 $('#order-button').on("click", function (e) {
      var first_name = $('#first-name').val();
      var last_name = $('#last-name').val();
      var street = $('#street').val();
      var city = $('#city').val();
      var state = $('#state').val();
      var post_code = $('#post-code').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var notes = $('#notes').val();
      if(first_name == '' || last_name == '' || street == '' || city == '' || state == '' || post_code == '' || email == '' || phone == ''){
        if(first_name == ''){
          $("#first-name").addClass("error-box");
          $('#first-name-error').text('Enter first name.');
        }else{
          $("#first-name").removeClass("error-box");
          $('#first-name-error').text('');
        }
        if(last_name == ''){
          $("#last-name").addClass("error-box");
          $('#last-name-error').text('Enter last name.');
        }else{
          $("#last-name").removeClass("error-box");
          $('#last-name-error').text('');
        }
        if(street == ''){
          $("#street").addClass("error-box");
          $('#street-error').text('Enter street.');
        }else{
          $("#street").removeClass("error-box");
          $('#street-error').text('');
        }
        if(city == ''){
          $("#city").addClass("error-box");
          $('#city-error').text('Enter city.');
        }else{
          $("#city").removeClass("error-box");
          $('#city-error').text('');
        }
        if(state == ''){
          $("#state").addClass("error-box");
          $('#state-error').text('Select state.');
        }else{
          $("#state").removeClass("error-box");
          $('#state-error').text('');
        }
        if(post_code == ''){
          $("#post-code").addClass("error-box");
          $('#post-code-error').text('Enter post code.');
        }else{
          $("#post-code").removeClass("error-box");
          $('#post-code-error').text('');
        }
        if(email == ''){
          $("#email").addClass("error-box");
          $('#email-error').text('Enter email.');
        }else{
          $("#email").removeClass("error-box");
          $('#email-error').text('');
        }
        if(phone == ''){
          $("#phone").addClass("error-box");
          $('#phone-error').text('Enter phone.');
        }else{
          $("#phone").removeClass("error-box");
          $('#phone-error').text('');
        }
        e.preventDefault();
      }else{
        //add the customer order
        $.ajax({
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: main_url+'addOrder',
            data: {
                'customer_id':$('meta[name="csrf-token"]').attr('content'),
                'first_name':first_name,
                'last_name':last_name,
                'address_street':street,
                'address_city':city,
                'address_state':state,
                'address_zip':post_code,
                'email':email,
                'mobile':phone,
                'notes':notes
            },
            success: function(data){
              if(parseInt(data) > 0){
                  clearCustomerTemp();
                  $(location).prop('href', main_url+'orderComplete/'+data);
              }else{
                $('#order-error').text('Something went wrong. Please try again.');
                return false;
              }
            }
       });
      }
   });

   $('.input-box').on('keyup keypress blur change', function(e) {
    var id = $(this).attr('id');
    var value = $(this).val();
    //check if the value is blank
    if(id == 'first-name' || id == 'last-name' || id == 'street' || id == 'city' || id == 'state'){
      if(value == ''){
        var error_text = 'Enter ', new_value = id;
        if(id == 'state'){
          error_text = 'Select ';
          new_value = id.split('-').join(' ');
        }
        $('#'+id).addClass("error-box");
        $('#'+id+'-error').text(error_text+new_value);
      }else{
        $('#'+id).removeClass("error-box");
        $('#'+id+'-error').text('');
      }
    }else{
      //check zip code
      if(id == 'post-code'){
        if(isNaN(value) == true || value == ''){
          $('#'+id).addClass("error-box");
          $('#'+id+'-error').text('Invalid postcode/zip.');
        }else{
          $('#'+id).removeClass("error-box");
          $('#'+id+'-error').text('');
        }
      }
      //check email
      if(id == 'email'){
        if(!validateEmail(value) || value == ''){
          $('#'+id).addClass("error-box");
          $('#'+id+'-error').text('Invalid email.');
        }else{
          $('#'+id).removeClass("error-box");
          $('#'+id+'-error').text('');
        }
      }
      //check zip
      if(id == 'phone'){
        if(isNaN(value) == true || value == ''){
          $('#'+id).addClass("error-box");
          $('#'+id+'-error').text('Invalid phone.');
        }else{
          $('#'+id).removeClass("error-box");
          $('#'+id+'-error').text('');
        }
      }
    }

  });

  //click checkout button on the product detail
  $("#checkout").click(function(){
    $(location).prop('href', main_url+'checkout/'+$('meta[name="csrf-token"]').attr('content'));
  })

  //click plus and minus button
  $(".plus-btn, .minus-btn").click(function(){
    var customer_id = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).attr('id').split('_')[1];
    var product_price_id = '#product_price_'+id;
    var product_quantity_id = '#product_quantity_'+id;
    var product_price = $(product_price_id).val();
    var quantity = $(product_quantity_id).val();
    var total = (quantity*product_price);
    if(parseInt(quantity) > 0){
      $.ajax({
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type: 'POST',
          url: main_url+'updateCart',
          data: {
              'customer_id':customer_id,
              'product_id':id,
              'quantity':quantity,
              'total':total
          },
          success: function(data){
            $(location).prop('href', main_url+'cart/'+customer_id);
          }
     });
    }
  })

  //click checkout button on the product detail
  $(".product-detail").click(function(){
    var id = $(this).attr('id').split('_')[1];
    $(location).prop('href', main_url+'productDetail/'+id+'/'+$('meta[name="csrf-token"]').attr('content'));
  })


});

function checkCartCount(){
  if(parseInt($("#cart_detail").text()) == 0){
     $('.shopping-cart').attr("disabled","disabled");
  }else{
    $('.shopping-cart').attr("disabled","");
  }
}

function validateEmail($email) {
 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 return emailReg.test( $email );
}

function clearCustomerTemp(){
  localStorage.removeItem("customer_id");
  localStorage.removeItem("product_count");
  $('#cart_total').text(0);
  $('#cart_inner_total').text(0);
}
