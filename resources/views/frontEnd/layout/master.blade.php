
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title') | Clothing Park LTD.</title>

    @include('frontEnd.include.headerCss')
    @yield('css')

  </head>
  <body>
    <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ url('frontEnd/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-bell">
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <script src="{{ url('frontEnd/js/core.min.js')}}"></script>
      @include("frontEnd.include.header")
      <!-- Swiper-->
      @yield('content')


      <!-- Page Footer-->
      @include("frontEnd.include.footer")
    </div>
    <div class="snackbars" id="form-output-global"></div>
   
   
    <script src="{{ url('frontEnd/js/script.js')}}"></script>

    @yield('js')

    


	
  </body>
</html>