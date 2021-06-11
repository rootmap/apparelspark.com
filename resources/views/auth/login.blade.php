
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login Panel</title>
    <link rel="apple-touch-icon" href="{{url('admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/app.min.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/pages/login-register.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css')}}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1"><img src="{{url('admin/image/logo.png')}}" alt="logo" width="200"></div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <fieldset class="form-group floating-label-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="user-name">Your Email</label>
                                <input type="text" class="form-control" id="user-name" placeholder="Your Email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="user-password">Enter Password</label>
                                <input type="password" class="form-control" id="user-password" placeholder="Enter Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                    <fieldset>
                                        <input type="checkbox" id="remember-me" class="chk-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember-me"> Remember Me</label>
                                    </fieldset>
                                </div>
                                {{-- <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div> --}}
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="ft-unlock"></i> Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <script src="{{url('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{url('admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{url('admin/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{url('admin/app-assets/js/core/app.min.js')}}"></script>
    <script src="{{url('admin/app-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
  </body>
</html>