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
    <!-- product info start -->
     <section class="section-tb-padding pro-page">
         <div class="container">
             <div class="row">
                 <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                     <div class="row">
                         <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                             <div class="tab-content">
                                 <div class="tab-pane fade show active" id="{{$product->id}}">
                                     <a href="javascript:void(0)" class="long-img">
                                         <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('image/'.$product->image)}})">
                                             <img id="product-image" src="{{url('image/'.$product->image)}}" class="img-fluid" alt="image">
                                         </figure>
                                     </a>
                                 </div>
                             </div>
                             <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                 <li class="nav-item items">
                                     <a class="nav-link" data-bs-toggle="tab" href="#{{$product->id}}"><img src="{{url('image/'.$product->image)}}" class="img-fluid" alt="image"></a>
                                 </li>
                             </ul>
                         </div>
                         <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                             <h4 id="product-title">{{$product->title}}</h4>
                             <input type="hidden" id="product-id" value="{{$product->id}}" name="product-id" />
                             <!-- <div class="rating">
                                 <i class="fa fa-star d-star"></i>
                                 <i class="fa fa-star d-star"></i>
                                 <i class="fa fa-star d-star"></i>
                                 <i class="fa fa-star d-star"></i>
                                 <i class="fa fa-star-o"></i>
                             </div> -->
                             <div class="pro-availabale">
                                 <span class="available">Availability:</span>
                                 <span class="pro-instock">{{$product->stock_status}}</span>
                             </div>
                             <div class="pro-price">
                                 <input type="hidden" id="product-price" value="{{$product->price}}" name="product-price" />
                                 <span class="new-price">${{$product->price}} USD</span>
                                 <!-- <span class="old-price"><del>$200.00 CAD</del></span>
                                 <div class="Pro-lable">
                                     <span class="p-discount">-8%</span>
                                 </div> -->
                             </div>
                             <span class="pro-details">Hurry up! only <span class="pro-number">{{$product->stock_quantity}}</span> products left in stock!</span>
                             <p>{{$product->description}}</p>
                             <!-- <div class="pro-items">
                                 <span class="pro-size">Size:</span>
                                 <ul class="pro-wight">
                                     <li><a href="javascript:void(0)" class="active">5KG</a></li>
                                 </ul>
                             </div> -->
                             <div class="pro-qty">
                                 <span class="qty">Quantity:</span>
                                 <div class="plus-minus">
                                     <span>
                                         <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                         <input id="product-quantity" type="text" name="name" value="1">
                                         <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                     </span>
                                 </div>
                             </div>
                             <div class="pro-btn">
                                 <!-- <a href="favourite.html" class="btn btn-style1"><i class="fa fa-heart"></i></a> -->
                                 <a href="#" class="btn btn-style1" id="add-to-cart"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                                 <a href="{{url('checkout/1')}}" class="btn btn-style1" id="checkout">Buy now</a>
                             </div>
                             <!-- <div class="share">
                                 <span class="share-lable">Share:</span>
                                 <ul class="share-icn">
                                     <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                     <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                 </ul>
                             </div> -->
                             <div class="pay-img">
                                 <a href="checkout-cart.html">
                                     <img src="{{url('image/pay-image.jpg')}}" class="img-fluid" alt="pay-image">
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                     <div class="product-service">
                         <div class="icon-title">
                             <span><i class="ti-truck"></i></span>
                             <h4>Delivery info</h4>
                         </div>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                     </div>
                     <div class="product-service">
                         <div class="icon-title">
                             <span><i class="ti-reload"></i></span>
                             <h4>30 days returns</h4>
                         </div>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                     </div>
                     <!-- <div class="product-service">
                         <div class="icon-title">
                             <span><i class="ti-id-badge"></i></span>
                             <h4>10 year warranty</h4>
                         </div>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                     </div> -->
                 </div>
             </div>
         </div>
     </section>
     <!-- product info end -->
     <!-- product page tab start -->
     <!-- <section class="section-b-padding pro-page-content">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <div class="pro-page-tab">
                         <div class="tab-content">
                             <div class="tab-pane fade show active" id="tab-1">
                                 <div class="tab-1content">
                                     <h4>Description</h4>
                                     <ul class="tab-description">
                                         <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                         <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                         <li>type here your detail one by one li more add</li>
                                         <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                         <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                         <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="tab-pane fade show" id="tab-2">
                                 <h4 class="reviews-title">Customer reviews</h4>
                                 <div class="customer-reviews t-desk-2">
                                     <span class="p-rating">
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                     </span>
                                     <p class="review-desck">Based on 2 reviews</p>
                                     <a href="#add-review" data-bs-toggle="collapse">Write a review</a>
                                 </div>
                                 <div class="review-form collapse" id="add-review">
                                     <h4>Write a review</h4>
                                     <form>
                                         <label>Name</label>
                                         <input type="text" name="name" placeholder="Enter your name">
                                         <label>Email</label>
                                         <input type="text" name="mail" placeholder="Enter your Email">
                                         <label>Rating</label>
                                         <span>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                         </span>
                                         <label>Review title</label>
                                         <input type="text" name="mail" placeholder="Review title">
                                         <label>Add comments</label>
                                         <textarea name="comment" placeholder="Write your comments"></textarea>
                                     </form>
                                 </div>
                                 <div class="customer-reviews">
                                     <span class="p-rating">
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star-o"></i>
                                     </span>
                                     <h4 class="review-head">he also good and high product see like look</h4>
                                     <span class="reviews-editor">kelin patel <span class="review-name">on</span> fab 5, 2021</span>
                                     <p class="r-description">he also good and high product see like look</p>
                                 </div>
                                 <div class="customer-reviews">
                                     <span class="p-rating">
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star e-star"></i>
                                         <i class="fa fa-star-o"></i>
                                         <i class="fa fa-star-o"></i>
                                     </span>
                                     <h4 class="review-head">he also good and fresh fruit organic product see like look</h4>
                                     <span class="reviews-editor">Melvin louis <span class="review-name">on</span> fab 5, 2021</span>
                                     <p class="r-description">he also good and fresh fruit organic product see like look</p>
                                 </div>
                             </div>
                             <div class="tab-pane fade show" id="tab-3">
                                 <div class="embed-responsive embed-responsive-16by9">
                                     <iframe height="630" src="https://www.youtube.com/embed/0etCKCAsImI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </div>
                             </div>
                             <div class="tab-pane fade show" id="tab-5">
                                 <div class="more-description table-responsive">
                                     <table class="table table-bordered table-elastic table-condensed" style="font-size: 9px;">
                                         <thead>
                                             <tr class="top">
                                                 <th rowspan="2" scope="col">Vegetables<br> Serving Size<br> (gram weight/<br> ounce weight)</th>
                                                 <th rowspan="2" scope="col">Calories</th>
                                                 <th rowspan="2" scope="col">Calories<br> from Fat</th>
                                                 <th colspan="2" scope="col">Total Fat</th>
                                                 <th colspan="2" scope="col">Sodium</th>
                                                 <th colspan="2" scope="col">Potassium</th>
                                                 <th colspan="2" scope="col">Total<br> Carbo-hydrate</th>
                                                 <th colspan="2" scope="col">Dietary<br> Fiber</th>
                                                 <th scope="col">Sugars</th>
                                                 <th scope="col">Protein</th>
                                                 <th scope="col">Vitamin A</th>
                                                 <th scope="col">Vitamin C</th>
                                                 <th scope="col">Calcium</th>
                                                 <th scope="col">Iron</th>
                                             </tr>
                                             <tr class="text-center" style="font-size: 90%;">
                                                 <th scope="col">(g)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(mg)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(mg)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(g)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(g)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(g)</th>
                                                 <th scope="col">(g)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(%DV)</th>
                                                 <th scope="col">(%DV)</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Asparagus<br> 5 spears<br> (93 g/3.3 oz)</th>
                                                 <td>20</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>230</td>
                                                 <td>7</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>10</td>
                                                 <td>15</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Bell Pepper<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                 <td>25</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>40</td>
                                                 <td>2</td>
                                                 <td>220</td>
                                                 <td>6</td>
                                                 <td>6</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>190</td>
                                                 <td>2</td>
                                                 <td>4</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Broccoli<br> 1 medium stalk<br> (148 g/5.3 oz)</th>
                                                 <td>45</td>
                                                 <td>0</td>
                                                 <td>0.5</td>
                                                 <td>1</td>
                                                 <td>80</td>
                                                 <td>3</td>
                                                 <td>460</td>
                                                 <td>13</td>
                                                 <td>8</td>
                                                 <td>3</td>
                                                 <td>3</td>
                                                 <td>12</td>
                                                 <td>2</td>
                                                 <td>4</td>
                                                 <td>6</td>
                                                 <td>220</td>
                                                 <td>6</td>
                                                 <td>6</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Carrot<br> 1 carrot, 7" long,<br> 1 1/4" diameter<br> (78 g/2.8 oz)</th>
                                                 <td>30</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>60</td>
                                                 <td>3</td>
                                                 <td>250</td>
                                                 <td>7</td>
                                                 <td>7</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>5</td>
                                                 <td>1</td>
                                                 <td>110</td>
                                                 <td>10</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Cauliflower<br> 1/6 medium head<br> (99 g/3.5 oz)</th>
                                                 <td>25</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>30</td>
                                                 <td>1</td>
                                                 <td>270</td>
                                                 <td>8</td>
                                                 <td>5</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>0</td>
                                                 <td>100</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Celery<br> 2 medium stalks<br> (110 g/3.9 oz)</th>
                                                 <td>15</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>115</td>
                                                 <td>5</td>
                                                 <td>260</td>
                                                 <td>7</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>2</td>
                                                 <td>0</td>
                                                 <td>10</td>
                                                 <td>15</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Cucumber<br> 1/3 medium<br> (99 g/3.5 oz)</th>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>140</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>10</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Green (Snap) Beans<br> 3/4 cup cut<br> (83 g/3.0 oz)</th>
                                                 <td>20</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>200</td>
                                                 <td>6</td>
                                                 <td>5</td>
                                                 <td>2</td>
                                                 <td>3</td>
                                                 <td>12</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>10</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Green&nbsp;Cabbage<br> 1/12 medium head<br> (84 g/3.0 oz)</th>
                                                 <td>25</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>20</td>
                                                 <td>1</td>
                                                 <td>190</td>
                                                 <td>5</td>
                                                 <td>5</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>3</td>
                                                 <td>1</td>
                                                 <td>0</td>
                                                 <td>70</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Green Onion<br> 1/4 cup chopped<br> (25 g/0.9 oz)</th>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>70</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>0</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Iceberg Lettuce<br> 1/6 medium head<br> (89 g/3.2 oz)</th>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>125</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>6</td>
                                                 <td>6</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Leaf Lettuce<br> 1 1/2 cups shredded<br> (85 g/3.0 oz)</th>
                                                 <td>15</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>35</td>
                                                 <td>1</td>
                                                 <td>170</td>
                                                 <td>5</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>130</td>
                                                 <td>6</td>
                                                 <td>2</td>
                                                 <td>4</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Mushrooms<br> 5 medium<br> (84 g/3.0 oz)</th>
                                                 <td>20</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>15</td>
                                                 <td>0</td>
                                                 <td>300</td>
                                                 <td>9</td>
                                                 <td>3</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>0</td>
                                                 <td>3</td>
                                                 <td>0</td>
                                                 <td>2</td>
                                                 <td>0</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Onion<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                 <td>45</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>5</td>
                                                 <td>0</td>
                                                 <td>190</td>
                                                 <td>5</td>
                                                 <td>11</td>
                                                 <td>4</td>
                                                 <td>3</td>
                                                 <td>12</td>
                                                 <td>9</td>
                                                 <td>1</td>
                                                 <td>0</td>
                                                 <td>20</td>
                                                 <td>4</td>
                                                 <td>4</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Potato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                 <td>110</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>620</td>
                                                 <td>18</td>
                                                 <td>26</td>
                                                 <td>9</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>1</td>
                                                 <td>3</td>
                                                 <td>0</td>
                                                 <td>45</td>
                                                 <td>2</td>
                                                 <td>6</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Radishes<br> 7 radishes<br> (85 g/3.0 oz)</th>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>55</td>
                                                 <td>2</td>
                                                 <td>190</td>
                                                 <td>5</td>
                                                 <td>3</td>
                                                 <td>1</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>30</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Summer Squash<br> 1/2 medium<br> (98 g/3.5 oz)</th>
                                                 <td>20</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>260</td>
                                                 <td>7</td>
                                                 <td>4</td>
                                                 <td>1</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>6</td>
                                                 <td>30</td>
                                                 <td>2</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Sweet Corn<br> kernels from 1<br> medium ear<br> (90 g/3.2 oz)</th>
                                                 <td>90</td>
                                                 <td>20</td>
                                                 <td>2.5</td>
                                                 <td>4</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>250</td>
                                                 <td>7</td>
                                                 <td>18</td>
                                                 <td>6</td>
                                                 <td>2</td>
                                                 <td>8</td>
                                                 <td>5</td>
                                                 <td>4</td>
                                                 <td>2</td>
                                                 <td>10</td>
                                                 <td>0</td>
                                                 <td>2</td>
                                             </tr>
                                             <tr class="alert alert-warning">
                                                 <th scope="row">Sweet Potato<br> 1 medium, 5" long,<br> 2" diameter<br> (130 g/4.6 oz)</th>
                                                 <td>100</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>70</td>
                                                 <td>3</td>
                                                 <td>440</td>
                                                 <td>13</td>
                                                 <td>23</td>
                                                 <td>8</td>
                                                 <td>4</td>
                                                 <td>16</td>
                                                 <td>7</td>
                                                 <td>2</td>
                                                 <td>120</td>
                                                 <td>30</td>
                                                 <td>4</td>
                                                 <td>4</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Tomato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                                 <td>25</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>0</td>
                                                 <td>20</td>
                                                 <td>1</td>
                                                 <td>340</td>
                                                 <td>10</td>
                                                 <td>5</td>
                                                 <td>2</td>
                                                 <td>1</td>
                                                 <td>4</td>
                                                 <td>3</td>
                                                 <td>1</td>
                                                 <td>20</td>
                                                 <td>40</td>
                                                 <td>2</td>
                                                 <td>4</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section> -->
     <!-- product page tab end -->
     <!-- releted product start -->
     <section class="section-b-padding pro-releted">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <div class="section-title">
                         <h2>Related Products</h2>
                     </div>
                     <div class="releted-products owl-carousel owl-theme">
                        @foreach ($related_products as $rp)
                         <div class="items">
                             <div class="tred-pro">
                                 <div class="tr-pro-img">
                                     <a href="{{url('productDetail').'/'.$rp->id}}">
                                         <img class="img-fluid" src="{{url('image/'.$rp->image)}}" alt="pro-img1">
                                         <img class="img-fluid additional-image" src="{{url('image/'.$rp->image)}}" alt="additional image">
                                     </a>
                                 </div>
                                 <!-- <div class="Pro-lable">
                                     <span class="p-text">New</span>
                                 </div> -->
                                 <!-- <div class="pro-icn">
                                     <a href="favourite.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                     <a href="my-cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                     <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                 </div> -->
                             </div>
                             <div class="caption">
                                 <h3><a href="{{url('productDetail').'/'.$rp->id}}">{{$rp->title}}</a></h3>
                                 <!-- <div class="rating">
                                     <i class="fa fa-star c-star"></i>
                                     <i class="fa fa-star c-star"></i>
                                     <i class="fa fa-star c-star"></i>
                                     <i class="fa fa-star-o"></i>
                                     <i class="fa fa-star-o"></i>
                                 </div> -->
                                 <div class="pro-price">
                                     <span class="new-price">${{$rp->price}} USD</span>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- releted product end -->
@endsection
