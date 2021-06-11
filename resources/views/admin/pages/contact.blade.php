@extends('admin.layout.master')
@section('title','Contact List')
@section('breadcrumb','Contact List')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body"><!-- horizontal grid start -->
			@include('admin.include.msg')
			<!-- Centered Input end -->
			<section class="checkbox-input-grid" id="checkbox-input-grid">
				<div class="row match-height">
					<div class="col-xl-6 col-lg-12 offset-md-3">
						<div class="card">
							<div class="card-header">
								@if(isset($edit))
								 	<h4 class="card-title">Edit Contact</h4>
								@else
									<h4 class="card-title">Add Contact</h4>
								@endif
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
									<form enctype="multipart/form-data" method="post" 
									@if(isset($edit))
										action="{{url('admin-site/blog/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/blog/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-2 text-right">Name</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Title" @if(isset($edit))
										value="{{$edit->name}}" @endif name="name">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-2 text-right">Email</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Title" @if(isset($edit))
										value="{{$edit->email}}" @endif name="email">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-2 text-right">Phone Number</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Title" @if(isset($edit))
										value="{{$edit->phone}}" @endif name="phone">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-2 text-right">Package</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Title" @if(isset($edit))
										value="{{$edit->plan}}" @endif name="plan">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-2 text-right">Detail</label>
												<div class="col-md-8">
													<div class="form-group">
														<textarea id="projectinput8" rows="5" class="form-control" name="details" placeholder="Detail">@if(isset($edit)){{$edit->message}} @endif </textarea>
													</div>
												</div>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<!--/ Base style table -->
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
@endsection

@section('js')
<script src="{{url('admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{url('admin/app-assets/js/scripts/tables/datatables/datatable-styling.min.js')}}"></script>
@endsection

