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
<!-- checkout page start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <h6 id="order-error" class="error-text"></h6>
                <div class="col">
                    <div class="checkout-area">
                        <div class="billing-area">
                            <form>
                                <h2>Billing details</h2>
                                <div class="billing-form">
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <label>First name</label>
                                            <input id="first-name" class="input-box" type="text" name="f-name" placeholder="First name">
                                            <span id="first-name-error" class="error-text"></span>
                                        </li>
                                        <li class="billing-li">
                                            <label>Last name</label>
                                            <input id="last-name" class="input-box" type="text" name="l-name" placeholder="Last name">
                                            <span id="last-name-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Street address</label>
                                            <input id="street" class="input-box" type="text" name="address" placeholder="Street address">
                                            <span id="street-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>City</label>
                                            <input id="city" class="input-box" type="text" name="city" placeholder="">
                                            <span id="city-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>State</label>
                                            <select id="state"  class="form-select input-box" aria-label="Default select example">
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
                                            <span id="state-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <label>Postcode / ZIP</label>
                                            <input id="post-code" class="input-box" type="text" name="--" placeholder="">
                                            <span id="post-code-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <label>Email address</label>
                                            <input id="email" class="input-box" type="text" name="mail" placeholder="Email address">
                                            <span id="email-error" class="error-text"></span>
                                        </li>
                                        <li class="billing-li">
                                            <label>Phone</label>
                                            <input id="phone" class="input-box" type="text" name="phone" placeholder="Phone">
                                            <span id="phone-error" class="error-text"></span>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <div class="billing-details">
                                <form>
                                    <h2>Shipping details</h2>
                                    <ul class="shipping-form">
                                        <!-- <li class="check-box">
                                            <input type="checkbox" name="--">
                                            <label>Ship to a different address?</label>
                                        </li> -->
                                        <li class="comment-area">
                                            <label>Order notes(Optional)</label>
                                            <textarea id="notes" name="comments" rows="4" cols="80"></textarea>
                                        </li>
                                    </ul>

                                </form>
                            </div>
                        </div>
                        <div class="order-area">
                            <div class="check-pro">
                                <h2>In your cart ({{count($products)}})</h2>
                                <ul class="check-ul">
                                  @foreach ($products as $pro)
                                    <li>
                                        <div class="check-pro-img">
                                            <a class="product-detail" id="img_{{$pro->product_id}}" href="#"><img src="{{url('image').'/'.$pro->image}}" class="img-fluid" alt="image"></a>
                                        </div>
                                        <div class="check-content">
                                            <a class="product-detail" id="title_{{$pro->product_id}}" href="#">{{$pro->title}}</a>
                                            <span class="check-code-blod">Product code: <span>{{$pro->product_code}}</span></span>
                                            <span class="check-price">${{$pro->total}}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <h2>Your order</h2>
                            <ul class="order-history">
                                <li class="order-details">
                                    <span>Product:</span>
                                    <span>Total</span>
                                </li>
                                @foreach ($products as $pro)
                                <li class="order-details">
                                    <span>{{$pro->title}}:</span>
                                    <span>${{$pro->total}}</span>
                                </li>
                                @endforeach
                                <li class="order-details">
                                    <span>Subtotal:</span>
                                    <span>${{$total}}</span>
                                </li>
                                <li class="order-details">
                                    <span>Shipping Charge:</span>
                                    <span>Free shipping</span>
                                </li>
                                <li class="order-details">
                                    <span>Total:</span>
                                    <span>${{$total}}</span>
                                </li>
                            </ul>
                            <!-- <form>
                                <ul class="order-form">
                                    <li>
                                        <input type="checkbox" name="--">
                                        <label>Credit/Debit Card</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="--">
                                        <label>Paypal</label>
                                    </li>
                                    <li class="pay-icon">
                                        <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                                    </li>
                                </ul>
                            </form> -->
                            <div class="checkout-btn">
                                <button id="order-button" class="btn-style1">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout page end -->
@endsection
