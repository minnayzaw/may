@extends('frontend.layout.master')

@section('banner')
    <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
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
    <section class="section-tb-padding blog-page">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <div class="blog-style-1-list">
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-1.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Green onion knife and salad plased</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 1 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-2.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">All time fresh every time healthy</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 5 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-3.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Vegist special liquide fresh vagi</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 7 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-4.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Organic mix masala fresh & soft</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 9 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 3 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-5.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Fresh organics brand and picnic</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 10 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 2 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-6.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 11 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 0 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-start">
                              <div class="blog-post">
                                  <div class="blog-image">
                                      <a href="blog-style-1-details.html">
                                          <img src="image/blog-image/blog-7.jpg" alt="blog-image" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-title">
                                          <h6><a href="blog-style-1-details.html">Vegist special liquide fresh vegetable</a></h6>
                                      </div>
                                      <div class="date-comm-adit">
                                          <span class="blog-date"><i class="ti-calendar"></i> 15 Jan 2021</span>
                                          <a href="javascript:void(0)"><i class="ti-comment-alt"></i> 1 Comment</a>
                                          <span class="blog-admin"><i class="ti-user"></i> By <span class="blog-editor">Andrew louise</span></span>
                                      </div>
                                      <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                      <a href="blog-style-1-details.html" class="read-link">
                                          <span>Read more</span>
                                          <i class="ti-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="all-page">
                          <span class="page-title">Showing 1 - 5 of 6 result</span>
                          <div class="page-number style-1">
                              <a href="javascript:void(0)" class="active">1</a>
                              <a href="javascript:void(0)">2</a>
                              <a href="javascript:void(0)">3</a>
                              <a href="javascript:void(0)">4</a>
                              <a href="javascript:void(0)">5</a>
                              <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
@endsection
