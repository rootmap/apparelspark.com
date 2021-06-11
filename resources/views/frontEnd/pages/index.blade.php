@extends('frontEnd.layout.master')
@section('title','Home')

@section('content')

@include("frontEnd.include.slider")
<style type="text/css">
 .border-white {
  border-color: #fff!important;
}

.border {
  border: 1px solid #dee2e6!important;
}

.bg-light {
  background-color: #f8f9fa!important;
}

.ribbon {
 font-size: 16px !important;
 /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

 width: 50%;

 position: relative;
 background: #ba89b6;
 color: #fff;
 text-align: center;
 padding: 1em 2em; /* Adjust to suit */
 margin: 2em auto 3em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
}
.ribbon:before, .ribbon:after {
 content: "";
 position: absolute;
 display: block;
 bottom: -1em;
 border: 1.5em solid #986794;
 z-index: -1;
}
.ribbon:before {
 left: -2em;
 border-right-width: 1.5em;
 border-left-color: transparent;
}
.ribbon:after {
 right: -2em;
 border-left-width: 1.5em;
 border-right-color: transparent;
}
.ribbon .ribbon-content:before, .ribbon .ribbon-content:after {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #804f7c transparent transparent transparent;
 bottom: -1em;
}
.ribbon .ribbon-content:before {
 left: 0;
 border-width: 1em 0 0 1em;
}
.ribbon .ribbon-content:after {
 right: 0;
 border-width: 1em 1em 0 0;
}

h2 {
  font: 22px sans-serif;
  margin-top: 30px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  z-index: 1;
}

h2:before {
  border-top: 2px solid #dfdfdf;
  content:"";
  margin: 0 auto; /* this centers the line to the full width specified */
  position: absolute; /* positioning must be absolute here, and relative positioning must be applied to the parent */
  top: 15px; left: 0; right: 0; bottom: 0;
  width: 95%;
  z-index: -1;
}

h2 span { 
  /* to hide the lines from behind the text, you have to set the background color the same as the container */ 
  background: #fff; 
  padding: 0 15px; 
}

h2.double:before { 
  /* this is just to undo the :before styling from above */
  border-top: none; 
}

h2.double:after {
  border-bottom: 1px solid blue;
  -webkit-box-shadow: 0 1px 0 0 red;
  -moz-box-shadow: 0 1px 0 0 red;
  box-shadow: 0 1px 0 0 red;
  content: "";
  margin: 0 auto; /* this centers the line to the full width specified */
  position: absolute;
  top: 45%; left: 0; right: 0;
  width: 95%;
  z-index: -1;
}
</style>     

<section  class="section">
  <div class="container">
    <h1 class="ribbon">
     <strong class="ribbon-content">Welcome to Clothing Park LTD</strong>
   </h1>
   <div class="row">
    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
      <h2><span>About Us</span></h2>
      
      <p align="justify" style="padding: 15px; text-indent: 50px;">Clothing Park Limited is primarily dealing in textile and apparel industry as manufacture and sourcing agency in Bangladesh. The Company deals with European, American, Canadian, South African, UK & Australian textile customers and the company is capable to handle all kind of circular knit, flat knit and woven/denim textiles. Rich Cotton Limited selects famed manufacturing facilities and puts utmost sincerity on product quality and having wide range of correlated textile material sourcing facilities and hunt new textile fashion trend. The Company keeps highly skilled and well trained textile educated merchants. In order to quote product cost Clothing Park Limited emphasize to maximize productivity, minimize process lose, managing multi-sourcing and work efficiency. Clothing Park Limited having well trained, highly professional CSR team to control safety issues and relevant social compliance monitoring system in production facilities.</p>

      

      <hr class="half-rule">
      <a class="btn btn-outline-primary" href="{{url('aboutus')}}">Visit our company profile</a>
    </div>

    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->

      <h2><span>Our Achivement</span></h2>
      
      <div class="row">
        <div class="col-md-4">
          <img src="{{url('sliderimages/accord.png')}}" height="50" />
        </div>
        <div class="col-md-4">
          <img src="{{url('sliderimages/alliance.png')}}" height="70" />
        </div>
        <div class="col-md-4">
          <img src="{{url('sliderimages/bangladesh_pact.png')}}" height="50" />
        </div>
        <div class="col-md-12" style="display: block; clear: both; height: 10px;"></div>
        <div class="col-md-4">
          <img src="{{url('sliderimages/Global_Standard.png')}}" height="80" />
        </div>
        <div class="col-md-8">
          <img src="{{url('sliderimages/BSCI-Logo.png')}}" height="80" />
        </div>
        <div class="col-md-12" style="display: block; clear: both; height: 10px;"></div>
        <div class="col-md-4">
          <img src="{{url('sliderimages/sedex.png')}}"  />
        </div>


        <div class="col-md-4">
          <img src="{{url('sliderimages/zdhc.png')}}"  />
        </div>

        <div class="col-md-4">
          <img src="{{url('sliderimages/WRAP-Logo.png')}}" />
        </div>

        <div class="col-md-12" style="display: block; clear: both; height: 10px;"></div>

        <div class="col-md-5">
          <img src="{{url('sliderimages/oeko-tex-certification.png')}}" height="50"  />
        </div>
        <div class="col-md-5">
          <img src="{{url('sliderimages/BCI_logo.png')}}" height="40"  />
        </div>

      </div>

      

    </div>

  </div>


</div>

</section>


{{-- <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="false">
        <div class="swiper-wrapper context-dark text-center">
          
          @if(isset($slider))
            @foreach($slider as $row)
              <div class="swiper-slide" data-slide-bg="{{url('upload/slider/'.$row->image)}}">
                <div class="swiper-slide-caption section-md">
                  <div class="container">
                    <div class="row justify-content-start text-left">
                      <div class="col-12">
                        <h4 class="swiper-title-3" data-caption-animate="fadeInLeft" data-caption-delay="200">{{ $row->title_one }}</h4>
                        <h1 class="swiper-title-1" data-caption-animate="fadeScale" data-caption-delay="100">{{ $row->title_two }} </h1>
                        <h3 class="swiper-title-2" data-caption-animate="fadeInRight" data-caption-delay="200">{{ $row->title_three }}</h3>
                        <!-- <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300"><a class="button button-lg button-primary button-zakaria" href="grid-shop.php">Shop now</a></div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
          
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section> --}}
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
      <!-- New Products-->
      <section class="section section-xxl bg-default" id="product">
        <div class="container">
          <div class="title-group">
            <h3 class="font-weight-regular">Our products</h3>
            <!-- <p class="text-width-large">Tempor orci eu lobortis elementum. Et malesuada fames ac turpis egestas maecenas. Tempor orci dapibus ultrices in iaculis. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui.</p> -->
            <p class="font-weight-regular wow fadeInLeft">Click on the product category to see our full range of products.</p>
          </div>
          <!-- <h2 class="wow fadeScale">Our products</h2>
            <h4 class="title-style-1 wow fadeInLeft">Click on the product category to see our full range of products.</h4> -->
            <div class="isotope-wrap">
              <div class="row row-xl row-30 justify-content-center">
                @if(isset($cat))
                @foreach($cat as $row)
                <div class="col-sm-6 col-lg-4">
                  <article class="fancy-card" style="background-image: url({{url('upload/category/'.$row->image)}});">
                    <a href="product-cat/{{$row->name}}/{{ $row->id }}">
                      <div class="bg-overlay"></div>
                      <div class="v-border"></div>
                      <div class="h-border"></div>

                      <div class="content">
                        <div class="primary">
                          <h3>{{ $row->name }}</h3>
                        </div>
                      </div>
                    </a>
                  </article>
                </div>
                @endforeach
                @endif
            {{-- <div class="col-sm-6 col-lg-4">
              <article class="fancy-card two">
                <a href="{{ url('product-cat')}}">
                  <div class="bg-overlay"></div>
                  <div class="v-border"></div>
                  <div class="h-border"></div>

                  <div class="content">
                    <div class="primary">
                      <h3>WOMAN WEAR</h3>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="fancy-card three">
                <a href="{{ url('product-cat')}}">
                  <div class="bg-overlay"></div>
                  <div class="v-border"></div>
                  <div class="h-border"></div>

                  <div class="content">
                    <div class="primary">
                      <h3>KIDS WEAR</h3>
                    </div>
                  </div>
                </a>
              </article>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- About Us-->
    
    <!-- Services-->
    <section class="section parallax-container" data-parallax-img="{{ url('frontEnd/images/parallax-6.jpg')}}" id="service">
      <div class="parallax-content section-xxl context-dark dark-overlay">
        <div class="container">

          <div class="row row-30 box-ordered">

            <h3 class="col-md-12">Our products</h3>

            @if(isset($service))
            @foreach($service as $row)
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
              <article class="box-icon-modern">
                <div class="box-icon-modern-header">
                  <div class="box-icon-modern-icon {{ $row->class_name }}"></div>
                </div>
                <h4 class="box-icon-modern-title"><a href="#">{{ $row->name }}</a></h4>
                <p class="box-icon-modern-text">{{ $row->detail }}</p>
              </article>
            </div>
            @endforeach
            @endif
              {{-- <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                <article class="box-icon-modern">
                  <div class="box-icon-modern-header">
                    <div class="box-icon-modern-icon linearicons-cash-dollar"></div>
                  </div>
                  <h4 class="box-icon-modern-title"><a href="#">Sample Production</a></h4>
                  <p class="box-icon-modern-text">Don’t have a finished concept? We can help you with our 100 strong creative and sample production team.</p>
                </article>
              </div>
              <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                <article class="box-icon-modern">
                  <div class="box-icon-modern-header">
                    <div class="box-icon-modern-icon linearicons-truck"></div>
                  </div>
                  <h4 class="box-icon-modern-title"><a href="#">Independent Inspections</a></h4>
                  <p class="box-icon-modern-text">We inspect independently to our customers deliver the best quality products as per your requirements.</p>
                </article>
              </div>
              <div class="col-sm-6 col-lg-3 wow fadeInLeft">
                <article class="box-icon-modern">
                  <div class="box-icon-modern-header">
                    <div class="box-icon-modern-icon linearicons-clock2"></div>
                  </div>
                  <h4 class="box-icon-modern-title"><a href="#">100% Complient</a></h4>
                  <p class="box-icon-modern-text">Only work with compliant factories certified by BSCI, ACCORD, CTPAT, ALLIANCE, WARP.</p>
                </article>
              </div> --}}
            </div>
          </div>
        </div>
      </section>      
      
      <!-- Section Product and Clients-->

      <!-- Team Creative-->
      <section class="section section-xxl bg-image-1" id="team">
        <div class="container">
          <h3 class="col-md-12">Our Team</h3>
          <div class="row row-lg row-30 justify-content-center">

            

            

            @if(isset($team))
              @foreach($team as $row)

                <div class="col-sm-6 col-lg-4">
                  <article class="team-creative">
                    <div class="team-creative-header"><a class="team-creative-figure" style="border-radius: 0px !important;" href="#">
                      <img src="{{url('upload/team/'.$row->image)}}" alt="" width="249" height="249"/></a>
                      <div class="team-creative-decor"></div>
                    </div>
                    <div class="team-creative-body">
                      <h4 class="team-creative-name"><a href="#">{{ $row->name }}</a></h4>
                      <p class="team-creative-text">{{ $row->detail }} </p>
                      <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                        <li><a class="icon mdi mdi-facebook" href="{{ $row->facebook }}"></a></li>
                        <li><a class="icon mdi mdi-twitter" href="{{ $row->twitter }}"></a></li>
                        <li><a class="icon mdi mdi-instagram" href="{{ $row->youtube }}"></a></li>
                        <li><a class="icon mdi mdi-google-plus" href="{{ $row->google_plus }}"></a></li>
                      </ul>
                    </div>
                  </article>
                </div>
              @endforeach
              @endif
            {{-- <div class="col-sm-6 col-lg-4">
              <article class="team-creative">
                <div class="team-creative-header"><a class="team-creative-figure" href="#"><img src="{{ url('frontEnd/images/team-9-249x249.jpg')}}" alt="" width="249" height="249"/></a>
                  <div class="team-creative-decor"></div>
                </div>
                <div class="team-creative-body">
                  <h4 class="team-creative-name"><a href="#">Caroline Lopez</a></h4>
                  <p class="team-creative-text">Sit amet purus gravida quis blandit turpis. Orci eu lobortis elementum nibh tellus molestie nunc non. </p>
                  <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="team-creative">
                <div class="team-creative-header"><a class="team-creative-figure" href="#"><img src="{{ url('frontEnd/images/team-10-249x249.jpg')}}" alt="" width="249" height="249"/></a>
                  <div class="team-creative-decor"></div>
                </div>
                <div class="team-creative-body">
                  <h4 class="team-creative-name"><a href="#">peter Johnson</a></h4>
                  <p class="team-creative-text">Ut lectus arcu bibendum at varius. Eu lobortis elementum nibh tellus molestie nunc non blandit turpis.</p>
                  <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div> --}}
          </div>
        </div>
      </section>
      
      @endsection
      @section('js')

      @endsection

