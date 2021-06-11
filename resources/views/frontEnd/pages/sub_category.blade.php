@extends('frontEnd.layout.master')
@section('title','Product Category')

@section('content')
      <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ url('frontEnd/images/parallax-6.jpg')}}">
          <div class="breadcrumbs-custom-body parallax-content context-dark darken-overlay">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Category List</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="#home">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li>Category List</li>
              <li class="active">Sub Category List</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Pricing List-->
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
			.primary h3{color: #fff}
			.secondary h3{color: #fff; margin-left: 35px}
			.fancy-card .content .primary{
			  text-transform: uppercase;
			  width: 100%;
			  color: #fff;
			  transition: all 250ms ease-out 200ms;
			  opacity: 1;
			  transform: translate3d(0px, 0px, 1px);
			}
			.fancy-card .content .secondary{
			  position: absolute;
			  opacity: 0;
			  left: 0px;
			  transform: translate3d(0px, 0px, 1px);
			  transition: all 200ms linear 0ms;
			  padding-left: 35px;
			  padding-right: 35px;
			}

			.fancy-card .button{
			  border: solid 1px #fff;
			  padding: 8px 12px;
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
			.fancy-card .v-border:before,
			.fancy-card .v-border:after,
			.fancy-card .v-border:before,
			.fancy-card .v-border:after{
			  width: 90%;
			  left: 5%;
			}
			.fancy-card .h-border:before,
			.fancy-card .h-border:after,
			.fancy-card .h-border:before,
			.fancy-card .h-border:after{
			  height: 90%;
			  top: 5%;
			}
			/*hovering over card, shadow effect*/
			.fancy-card:active,
			.fancy-card:hover{
			  box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.3);
			}
			/*hovering over card, adjust primary element*/
			.fancy-card .content .primary,
			.fancy-card .content .primary{
			  /*opacity: 0;*/
			  /*transform: translate3d(0px, 20px, 1px);*/
			  transition: all 200ms linear 0ms;
			  overflow: hidden;
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
      <section class="section section-xxl bg-default text-center">
        <div class="container">
          <div class="title-group">
            <h3 class="font-weight-regular">Sub Category Product List</h3>
            <!-- <p class="text-width-large">Tempor orci eu lobortis elementum. Et malesuada fames ac turpis egestas maecenas. Tempor orci dapibus ultrices in iaculis. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui.</p> -->
          </div>
          <div class="row row-xl row-30 justify-content-center">
          	@if(isset($subcat))
              @foreach($subcat as $row)
	            <div class="col-sm-6 col-lg-3">
	            	<a href="product-list/{{ $row->category_id }}/{{ $row->name }}/{{ $row->id }}">
	              <article class="fancy-card" style="background-image: url({{url('upload/SubCategory/'.$row->image)}});">
	                
	                  <div class="bg-overlay"></div>
	                  <div class="v-border"></div>
	                  <div class="h-border"></div>
	                  <div class="content">
	                    <div class="primary">
	                      <h3>{{ $row->name }}</h3>
	                    </div>
	                  </div>
	                
	              </article>
	              </a>
	            </div>
              @endforeach
            @endif
            {{-- <div class="col-sm-6 col-lg-3">
              <article class="fancy-card"  style='background-image: url("{{url('frontEnd/images/sub_category/t-shirt.jpg')}}")'>
                <a href="{{ url('product-sub-cat') }}">
                  <div class="bg-overlay"></div>
                  <div class="v-border"></div>
                  <div class="h-border"></div>

                  <div class="content">
                    <div class="primary">
                      <h3>T-SHIRT</h3>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <article class="fancy-card" style='background-image: url("{{url('frontEnd/images/sub_category/pant.jpg')}}")'>
                <a href="{{ url('product-sub-cat') }}">
                  <div class="bg-overlay"></div>
                  <div class="v-border"></div>
                  <div class="h-border"></div>

                  <div class="content">
                    <div class="primary">
                      <h3>DENIM PANT</h3>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <article class="fancy-card" style='background-image: url("{{url('frontEnd/images/sub_category/shirt.jpg')}}")'>
                <a href="{{ url('product-sub-cat') }}">
                  <div class="bg-overlay"></div>
                  <div class="v-border"></div>
                  <div class="h-border"></div>

                  <div class="content">
                    <div class="primary">
                      <h3>SHIRT</h3>
                    </div>
                  </div>
                </a>
              </article>
            </div> --}}
          </div>
        </div>
      </section>

@endsection