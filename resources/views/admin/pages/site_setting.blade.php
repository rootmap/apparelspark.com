@extends('admin.layout.master')
@section('title','Site Setting')
@section('breadcrumb','Site Setting')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body"><!-- horizontal grid start -->
			<!-- Centered Input start -->
			@include('admin.include.msg')
			<section class="checkbox-input-grid" id="checkbox-input-grid">
				<div class="row match-height">
					<div class="col-xl-6 col-lg-12 offset-md-3">
						<div class="card">
							<div class="card-header">
								@if(isset($editSetting))
								 	<h4 class="card-title">Edit Site Setting</h4>
								@else
									<h4 class="card-title">Add Site Setting</h4>
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
									<form class="form" enctype="multipart/form-data" method="post" 
									@if(isset($editSetting))
										action="{{url('admin-site/setting/modify/'.$editSetting->id)}}"
									@else
										action="{{url('admin-site/setting/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-3 text-right">Site Name</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="name" @if(isset($editSetting))
										value="{{$editSetting->name}}" 
									@endif  placeholder="Site Name">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Logo</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="file" class="form-control" placeholder="logo" name="logo">
														@if(isset($editSetting))
														@if(!empty($editSetting->logo))
															<img style="margin-top: 10px;"  width="150" src="{{url('upload/site_logo/'.$editSetting->logo)}}"  />
														@endif
															<input type="hidden" id="text" class="form-control" value="{{$editSetting->logo}}" placeholder="logo" name="ex_logo">
													@endif
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Phone Number</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="phone_number" placeholder="Phone Number" @if(isset($editSetting))
										value="{{$editSetting->phone_number}}" 
									@endif >
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Email</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="email" @if(isset($editSetting))
										value="{{$editSetting->email}}" 
									@endif  placeholder="Email">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Address</label>
												<div class="col-md-8">
													<div class="form-group">
										<textarea class="form-control" name="address" placeholder="Enter Address"> @if(isset($editSetting))
										{{$editSetting->address}} @endif</textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Facebook</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="facebook" @if(isset($editSetting))
										value="{{$editSetting->facebook}}" 
									@endif  placeholder="Facebook Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Twitter</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="twitter" @if(isset($editSetting))
										value="{{$editSetting->twitter}}" 
									@endif  placeholder="Twitter Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Youtube</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="youtube" @if(isset($editSetting))
										value="{{$editSetting->youtube}}" 
									@endif  placeholder="Youtube Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Google Plus</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="google_plus" @if(isset($editSetting))
										value="{{$editSetting->google_plus}}" 
									@endif  placeholder="Google Plus">
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection

