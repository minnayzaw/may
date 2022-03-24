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
<!-- Order complete start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <div class="order-price">
                            <ul class="total-order">
                                <li>
                                    <span class="order-no">Order no. {{$order['no']}}</span>
                                    <span class="order-date">{{$order['date']}}</span>
                                </li>
                                <li>
                                    <span class="total-price">Order total</span>
                                    <span class="amount">${{$order['total']}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="order-details">
                            <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                            <h4>Thank you for order</h4>
                            <span class="order-s">Your order will ship within few hours</span>
                            <!-- <a href="tracking.html" class="tracking-link btn btn-style1">Tracking details</a> -->
                        </div>
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <h5>Delivery address</h5>
                                    <span class="order-span">{{$order['street']}}</span>
                                    <span class="order-span">{{$order['city']}},</span>
                                    <span class="order-span">{{$order['state']}} {{$order['zip']}},</span>
                                    <span class="order-span">{{$order['country']}}.</span>
                                    <span class="order-span">Mobile No :{{$order['mobile']}}</span>
                                </li>
                                <li class="pay">
                                    <h5>Payment summary</h5>
                                    <!-- <p class="transition">Transaction No : 66282856617</p> -->
                                    <span class="order-span p-label">
                                        <span class="n-price">Price</span>
                                        <span class="o-price">${{$order['total']}}</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Shipping charge</span>
                                        <span class="o-price">Free</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Order Total</span>
                                        <span class="o-price">${{$order['total']}}</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order complete end -->
@endsection
