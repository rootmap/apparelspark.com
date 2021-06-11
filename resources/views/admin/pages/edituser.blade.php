@extends('admin.layout.master')
@section('title','Edit User')
@section('breadcrumb','Edit User')
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    @include('admin.include.breadcrumb')
    <div class="content-body"><!-- horizontal grid start -->
        @include('admin.include.msg')
        <!-- Centered Input start -->
        <section class="checkbox-input-grid" id="checkbox-input-grid">
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User</h4>
                            <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form action="{{url('admin-site/user/update')}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-body">
                                        <div class="row">
                                            <label class="col-md-3 text-right">Full Name</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{ Auth::user()->name }} " placeholder="Full Name" name="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-right">Email</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{ Auth::user()->email }} " placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-right">Password</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Enter your Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-right">Confirm Password</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Enter your Confirm Password" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
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
@endsection