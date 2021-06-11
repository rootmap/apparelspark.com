
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <title>@yield('title') | Clothing Park LTD.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    @include('admin.include.headerCss')
    @yield('css')
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
    @include('admin.include.topnavbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('admin.include.navbar')
    
    @yield('content')
    

    @include('admin.include.footer')
    @include('admin.include.footerJs')

    @yield('js')
  </body>
</html>