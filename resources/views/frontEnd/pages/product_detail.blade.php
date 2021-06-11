@extends('frontEnd.layout.master')
@section('title',$detail[0]['name'])

@section('content')
      <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ url('frontEnd/images/parallax-6.jpg')}}">
          <div class="breadcrumbs-custom-body parallax-content context-dark darken-overlay">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Product Detail</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('index') }}">Home</a></li>
              <li><a href="#">Product</a></li>
              <li class="active">{{ $detail[0]['name'] }}</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Single Product-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-6">
              <div class="slick-vertical slick-product">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                  <?php
                     $fet=json_decode($detail[0]->image);
                     $fetCount=count($fet); 
                   ?>
                   @foreach($fet as $tt)
                     {{-- <li><span>{{$tt}}</span></li> --}}
                     <div class="item">
                    <div class="slick-product-figure"><img src="{{url('upload/product/'.$tt)}}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                   @endforeach
                  
                  {{-- <div class="item">
                    <div class="slick-product-figure"><img src="{{ url('frontEnd/images/sub_category/jacket.jpg')}}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{ url('frontEnd/images/sub_category/t-shirt.jpg')}}" alt="" width="530" height="480"/>
                    </div>
                  </div> --}}
                </div>
                <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                  <?php
                     $fet=json_decode($detail[0]->image);
                     $fetCount=count($fet); 
                   ?>
                   @foreach($fet as $tt)
                     {{-- <li><span>{{$tt}}</span></li> --}}
                     <div class="item">
                      <div class="slick-product-figure"><img src="{{url('upload/product/'.$tt)}}" alt="" width="530" height="480"/>
                      </div>
                    </div>
                   @endforeach
                  {{-- <div class="item">
                    <div class="slick-product-figure"><img src="{{ url('frontEnd/images/sub_category/pant.jpg')}}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{ url('frontEnd/images/sub_category/jacket.jpg')}}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{ url('frontEnd/images/sub_category/t-shirt.jpg')}}" alt="" width="530" height="480"/>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="single-product">
                <h3 class="text-transform-none font-weight-medium">{{ $detail[0]['name'] }}</h3>
                <div class="group-md group-middle">
                  <div class="single-product-price">$ {{ $detail[0]['price'] }}</div>
                  <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                  
                  
                </div>
                <p>
                 
                  <a class="button button-sm button-secondary button-zakaria" href="{{ url('contact-us') }}/{{ str_replace('/','-',$detail[0]['name']) }}/{{ $detail[0]['id'] }}">Request for quotation</a></p>  
                  
                  
                <p>{{ $detail[0]['short_detail'] }}</p>
                <hr class="hr-gray-100">
                <ul class="list list-description">
                  <?php
                     $fet=json_decode($detail[0]->specification);
                     $fetCount=count($fet); 
                   ?>
                   @foreach($fet as $tt)
                     <li><span>{{$tt}}</span></li>
                   @endforeach

                  {{-- <li><span>Weight:</span><span>5 OZ</span></li>
                  <li><span>Dimensions:</span><span>0.6 x 0.9 in</span></li> --}}
                </ul>
                <!-- <div class="group-xs group-middle">
                  <div class="product-stepper">
                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                  </div>
                  <div><a class="button button-lg button-primary button-zakaria" href="cart-page.html">Add to cart</a></div>
                </div>
                <hr class="hr-gray-100">
                <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                  <div>
                    <ul class="list-inline list-social list-inline-sm">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
              <ul class="nav nav-tabs nav-tabs-1">
                {{-- <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Reviews</a></li> --}}
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-2" data-toggle="tab">Additional information</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Delivery and payment</a></li>
              </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content tab-content-1">
              {{-- <div class="tab-pane fade show active" id="tabs-1-1">
                <div class="box-comment">
                  <div class="unit flex-column flex-sm-row unit-spacing-md">
                    <div class="unit-left"><a class="box-comment-figure" href="#"><img src="{{ url('frontEnd/images/user-1-119x119.jpg')}}" alt="" width="119" height="119"/></a></div>
                    <div class="unit-body">
                      <div class="group-sm group-justify">
                        <div>
                          <div class="group-xs group-middle">
                            <h5 class="box-comment-author"><a href="#">JaGreat casual jacket</a></h5>
                            <div class="box-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                          </div>
                        </div>
                        <div class="box-comment-time">
                          <time datetime="2019-11-30">Nov 30, 2019</time>
                        </div>
                      </div>
                      <p class="box-comment-text">I have to echo the first review. I also wasn't looking for a blazer but was impressed after trying it on. While it is wool, it is knit and definitely more appropriate worn with khakis or jeans. It doesn't look right with dress pants. I wear a 38R in Fitzgerald fit, but the store only had a 39R in this Milano jacket and it fits perfectly.</p>
                    </div>
                  </div>
                </div>
                <h4 class="text-transform-none font-weight-medium">Leave a Review</h4>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row row-20 row-md-30">
                    <div class="col-lg-8">
                      <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"/>
                            <label class="form-label" for="contact-first-name-2">First Name</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"/>
                            <label class="form-label" for="contact-last-name-2">Last Name</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                            <label class="form-label" for="contact-email-2">E-mail</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-wrap">
                            <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                            <label class="form-label" for="contact-phone-2">Phone</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Message</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <button class="button button-lg button-secondary button-zakaria" type="submit">Submit</button>
                </form>
              </div> --}}
              <div class="tab-pane fade show active" id="tabs-1-2">
                <div class="single-product-info">
                  <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                    <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span></div>
                    <div class="unit-body">
                      <?php
                         $fet=json_decode($detail[0]->additional_info);
                         $fetCount=count($fet); 
                       ?>
                       <ul>
                       @foreach($fet as $tt)
                         <li><span>{{$tt}}</span></li>
                       @endforeach
                     </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-1-3">
                <div class="single-product-info">
                  <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                    <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                    <div class="unit-body">
                      <p>{{ $payment[0]['detail'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Related Products-->
      @if(count($relpro)>0)
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h4 class="font-weight-sbold">Related Products</h4>
          <div class="row row-lg row-30 row-lg-50 justify-content-center">
            @foreach($relpro as $row)
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <a href="{{ $row->sub_category_id }}">
              <article class="product">
                <div class="product-body">
                  <?php
                           $fet=json_decode($row->image);
                           $fetCount=count($fet); 
                         ?>
                  <div class="product-figure"><img src="{{url('upload/product/'.$fet[0])}}" alt="" width="220" height="160"/>
                  </div>
                  <h5 class="product-title"><a href="{{ $row->sub_category_id }}">{{ $row->name }}</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price"><span>$</span> {{ $row->price }}</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="{{ $row->sub_category_id }}"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fa fa-phone" href="{{ url('contact-us') }}"></a></div>
                </div>
              </article>
            </a>
            </div>
            @endforeach
            {{-- <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/product-2-191x132.png')}}" alt="" width="191" height="132"/>
                  </div>
                  <h5 class="product-title"><a href="single-product.html">Potatoes</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price">$13.00</div>
                  </div>
                </div><span class="product-badge product-badge-new">New</span>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/product-3-238x158.png')}}" alt="" width="238" height="158"/>
                  </div>
                  <h5 class="product-title"><a href="single-product.html">Carrots</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price">$17.00</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/product-9-185x155.png')}}" alt="" width="185" height="155"/>
                  </div>
                  <h5 class="product-title"><a href="single-product.html">Galia melons</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price">$18.00</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                </div>
              </article>
            </div> --}}
          </div>
        </div>
      </section>
      @endif
@endsection