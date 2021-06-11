@extends('admin.layout.master')
@section('title','Delivery & Payment')
@section('breadcrumb','Delivery & Payment')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body"><!-- horizontal grid start -->
			<!-- Centered Input start -->
			<section class="checkbox-input-grid" id="checkbox-input-grid">
				<div class="row match-height">
					<div class="col-xl-8 col-lg-12 offset-md-2">
						<div class="card">
							<div class="card-header">
								@if(isset($edit))
								 	<h4 class="card-title">Edit Delivery & Payment</h4>
								@else
									<h4 class="card-title">Add Delivery & Payment</h4>
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
										action="{{url('admin-site/payment/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/payment/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-2 text-right">Detail</label>
												<div class="col-md-10">
													<div class="form-group">
														<textarea class="form-control" rows="5" name="detail" placeholder="Enter your Delivery & Payment info"> @if(isset($edit)) {{$edit->detail}} @endif</textarea>
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
			<!-- Centered Input end -->
		
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

