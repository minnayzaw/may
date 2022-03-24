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
  <section class="section-tb-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                      <div class="grid-list-area">
                          <!-- <div class="grid-list-select">
                              <ul class="grid-list-selector">
                                  <li>
                                      <label>Sort by</label>
                                      <select>
                                          <option>Best selling</option>
                                          <option>Price, low to high</option>
                                          <option>Price, high to low</option>
                                      </select>
                                  </li>
                              </ul>
                          </div> -->
                          <div class="grid-pro">
                              <ul class="grid-product">
                                @foreach ($products as $pro)
                                  <li class="grid-items">
                                      <div class="tred-pro">
                                          <div class="tr-pro-img">
                                              <a class="product-detail" id="img_{{$pro->id}}" href="#">
                                                  <img class="img-fluid" src="{{url('image/'.$pro->image)}}" alt="pro-img1">
                                                  <img class="img-fluid additional-image" src="{{url('image/'.$pro->image)}}" alt="additional image">
                                              </a>
                                          </div>
                                          <div class="pro-icn">
                                              <a href="#" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                              <a href="#" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                              <a class="product-detail" id="icon_{{$pro->id}}" href="#"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                          </div>
                                      </div>
                                      <div class="caption">
                                          <h3><a class="product-detail" id="title_{{$pro->id}}" href="#">{{$pro->title}}</a></h3>
                                          <div class="rating">
                                              <i class="fa fa-star c-star"></i>
                                              <i class="fa fa-star c-star"></i>
                                              <i class="fa fa-star c-star"></i>
                                              <i class="fa fa-star-o"></i>
                                              <i class="fa fa-star-o"></i>
                                          </div>
                                          <div class="pro-price">
                                              <span class="new-price">${{$pro->price}} USD</span>
                                          </div>
                                      </div>
                                  </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                      <!-- <div class="list-all-page">
                          <span class="page-title">Showing 1 - 17 of 17 result</span>
                          <div class="page-number">
                              <a href="#" class="active">1</a>
                              <a href="#">2</a>
                              <a href="#">3</a>
                              <a href="#">4</a>
                              <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                          </div>
                      </div> -->
                  </div>
              </div>
          </div>
      </section>
@endsection
