@extends('frontEnd.layout.master')
@section('title','Product Sub Category')

@section('content')
      <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ url('frontEnd/images/parallax-6.jpg')}}">
          <div class="breadcrumbs-custom-body parallax-content context-dark darken-overlay">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Product List</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('index') }}">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Sub Category</a></li>
              <li class="active">Product List</li>
            </ul>
          </div>
        </div>
      </section>
      <style type="text/css">
      	.pricing-classic-header img{max-height: 200px}
      </style>
      <style type="text/css">
			/*//*/
			*,*:before,*:after{
			  box-sizing: border-box;
			}
			.cf:before,
			.cf:after{
			  display: table;
			  content: " ";
			}
			.cf:after{
			  clear: both
			}
			.fancy-card{
			  background: #eee;
			  width: 100%;
			  display: block;
			  float: left;
			  position: relative;
			  box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
			  transition: all 250ms ease-in;
			  min-height: 300px;
			  background-size: cover;
			  background-position: center center;
			  margin-bottom: 30px;
			}
			.fancy-card .bg-overlay{
		    background: rgba(0,0,0,0.25);
		    position: absolute;
		    top: 0px;
		    left: 0px;
		    width: 100%;
		    height: 100%;
		    transition: all 200ms linear;
		}
		.fancy-card .content{
		  padding: 30px 40px;
		  color: #fff;
		  text-align: center;
		  position: absolute;
		  top: 0px;
		  left: 0px;
		  width: 100%;
		  height: 100%;
		  display: flex;
		  flex-wrap: nowrap;
		  align-items: center;
		  flex-direction: row;
		}
		.fancy-card .content .primary{
		  text-transform: uppercase;
		  width: 100%;
		  transition: all 250ms ease-out 200ms;
		  opacity: 1;
		  transform: translate3d(0px, 0px, 1px);
		}
		.fancy-card .content .secondary{
		  position: absolute;
		  opacity: 0;
		  left: 0px;
		  transform: translate3d(0px, 30px, 1px);
		  transition: all 200ms linear 0ms;
		  padding-left: 35px;
		  padding-right: 35px;
		}

		.fancy-card .button{
		  border: solid 1px #fff;
		  padding: 5px 22px;
		  display: inline-block;
		  border-radius: 2px;
		  margin: 12px auto;
		}


		/*horizontal border elements (top & bottom)*/
		.fancy-card .v-border{
		  position: absolute;
		  top: 0%;
		  left: 0%;
		  width: 100%;
		  height: 100%;
		}
		.fancy-card .v-border:before,
		.fancy-card .v-border:after{
		  width: 0%;
		  height: 1px;
		  left: 50%;
		  transition: all 250ms ease-out;
		  background: #fff;
		}
		.fancy-card .v-border:before{
		  content: '';
		  top: 10%;
		  position: absolute;
		}
		.fancy-card .v-border:after{
		  content: '';
		  bottom: 10%;
		  position: absolute;
		}

		/*horizontal elements (left & right)*/
		.fancy-card .h-border{
		  position: absolute;
		  top: 0%;
		  left: 0%;
		  width: 100%;
		  height: 100%;
		}
		.fancy-card .h-border:before,
		.fancy-card .h-border:after{
		  height: 0%;
		  top: 50%;
		  width: 1px;
		  transition: all 250ms ease-out;
		  background: #fff;
		}
		.fancy-card .h-border:before{
		  content: '';
		  left: 10%;
		  height: 0%;
		  position: absolute;
		}
		.fancy-card .h-border:after{
		  content: '';
		  right: 10%;
		  position: absolute;
		}


		/*hover states for interactivity*/
		.fancy-card:active .v-border:before,
		.fancy-card:active .v-border:after,
		.fancy-card:hover .v-border:before,
		.fancy-card:hover .v-border:after{
		  width: 90%;
		  left: 5%;
		}
		.fancy-card:active .h-border:before,
		.fancy-card:active .h-border:after,
		.fancy-card:hover .h-border:before,
		.fancy-card:hover .h-border:after{
		  height: 90%;
		  top: 5%;
		}

		/*hovering over card, shadow effect*/
		.fancy-card:active,
		.fancy-card:hover{
		  box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.3);
		}
		/*hovering over card, adjust primary element*/
		.fancy-card:active .content .primary,
		.fancy-card:hover .content .primary{
		  opacity: 0;
		  transform: translate3d(0px, 20px, 1px);
		  transition: all 200ms linear 0ms;
		}
		/*hoverijng over card, adjust secondary element*/
		.fancy-card:active .content .secondary,
		.fancy-card:hover .content .secondary{
		  opacity: 1;
		  transform: translate3d(0px, 0px, 1px);
		  transition: all 200ms linear 200ms;
		}

		/*hovering over card, adjust background overlay*/
		.fancy-card:active .bg-overlay,
		.fancy-card:hover .bg-overlay{
		  background: rgba(0,0,0,0.45);
		}
			

      </style>
      <style type="text/css">
      	.product-price span{font-size: 20px;font-family:auto;}
      </style>
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h4 class="font-weight-sbold">Featured Products</h4>
          <div class="row row-lg row-30 row-lg-50 justify-content-center">
          	@if(($detail->count() > 0))
          		@foreach($detail as $row)
		            <div class="col-sm-6 col-md-5 col-lg-3">
		              <!-- Product-->
		              <a href="product-detail/{{ str_replace('/','-',$row->name) }}/{{ $row->id }}/{{ $row->sub_category_id }}">
		              <article class="product">
		                <div class="product-body">

                            	<?php
			                     $fet=json_decode($row->image);
			                     $fetCount=count($fet); 
			                   ?>
			                  
			                  
		                  <div class="product-figure"><img src="{{url('upload/product/'.$fet[0])}}" alt="" width="220" height="160"/>
		                  </div>
		                  
		                  <h5 class="product-title"><a href="product-detail/{{ str_replace('/','-',$row->name) }}/{{ $row->id }}/{{ $row->sub_category_id }}">{{ $row->name }}</a></h5>
		                  <div class="product-price-wrap">
		                    <!-- <div class="product-price product-price-old">$30.00</div> -->
		                    <div class="product-price"><span>$</span> {{ $row->price }}</div>
		                  </div>
		                </div>
		                <div class="product-button-wrap">
		                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="product-detail/{{ str_replace('/','-',$row->name) }}/{{ $row->id }}/{{ $row->sub_category_id }}"></a></div>
		                  <div class="product-button"><a class="button button-primary button-zakaria fa fa-phone" href="{{ url('contact-us') }}"></a></div>
		                </div>
		              </article>
		          </a>
		            </div>
            	@endforeach
            @else
                           <div class="col-sm-6 col-md-5 col-lg-3">
                              <article class="product">
		                		<div class="product-body">
		                			<h5 class="product-title">
		                                 <code>
		                                    <b>No Product Found!!</b>
		                                 </code>
		                             </h5>
                              	</div>
                          	</article>
                           </div>
            @endif
            {{-- <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/sub_category/shirt.jpg')}}" alt="" width="191" height="132"/>
                  </div>
                  <h5 class="product-title"><a href="{{ url('product-detail') }}">Shirt</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price"><span>৳</span> 190.00</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="{{ url('product-detail') }}"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fa fa-phone" href="contact-us.php"></a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/sub_category/t-shirt.jpg')}}" alt="" width="238" height="158"/>
                  </div>
                  <h5 class="product-title"><a href="{{ url('product-detail') }}">T-shirt</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price"><span>৳</span> 190.00</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="{{ url('product-detail') }}"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fa fa-phone" href="contact-us.php"></a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Product-->
              <article class="product">
                <div class="product-body">
                  <div class="product-figure"><img src="{{ url('frontEnd/images/sub_category/pant.jpg')}}" alt="" width="185" height="155"/>
                  </div>
                  <h5 class="product-title"><a href="{{ url('product-detail') }}">Pant</a></h5>
                  <div class="product-price-wrap">
                    <div class="product-price"><span>৳</span> 190.00</div>
                  </div>
                </div>
                <div class="product-button-wrap">
                  <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="{{ url('product-detail') }}"></a></div>
                  <div class="product-button"><a class="button button-primary button-zakaria fa fa-phone" href="contact-us.php"></a></div>
                </div>
              </article>
            </div> --}}
          </div>
        </div>
      </section>
@endsection