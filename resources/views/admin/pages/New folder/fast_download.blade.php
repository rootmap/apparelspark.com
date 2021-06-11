@extends('admin.layout.master')
@section('title','Fast Download & Upload')
@section('breadcrumb','Fast Download & Upload')

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
								@if(isset($edit))
								 	<h4 class="card-title">Edit Fast Download & Upload</h4>
								@else
									<h4 class="card-title">Add Fast Download & Upload</h4>
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
										action="{{url('admin-site/download/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/download/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-3 text-right">Title</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Title" @if(isset($edit))
										value="{{$edit->title}}" @endif name="title">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Short Detail</label>
												<div class="col-md-8">
													<div class="form-group">
														<textarea id="projectinput8" rows="5" class="form-control" name="details" placeholder="Detail">@if(isset($edit)){{$edit->details}}@endif</textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Address</label>
												<div class="col-md-8">
													<div class="form-group">
														<textarea id="projectinput8" rows="5" class="form-control" name="address" placeholder="Address">@if(isset($edit)){{$edit->address}}@endif</textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Phone Number</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone Number" @if(isset($edit))
										value="{{$edit->phone_num}}" @endif name="phone_num">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Phone Number</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone Number" @if(isset($edit))
										value="{{$edit->phone_num_another}}" @endif name="phone_num_another">
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


