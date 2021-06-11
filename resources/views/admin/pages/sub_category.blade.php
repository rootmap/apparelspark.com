@extends('admin.layout.master')
@section('title','SubCategory')
@section('breadcrumb','SubCategory')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body">
        	@include('admin.include.msg')
        	<!-- horizontal grid start -->
			<!-- Centered Input start -->
			<section class="checkbox-input-grid" id="checkbox-input-grid">
				<div class="row match-height">
					<div class="col-xl-6 col-lg-12 offset-md-3">
						<div class="card">
							<div class="card-header">
								@if(isset($edit))
								 	<h4 class="card-title">Edit Sub Category</h4>
								@else
									<h4 class="card-title">Add Sub Category</h4>
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
										action="{{url('admin-site/sub-category/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/sub-category/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-4 text-right">Category</label>
												<div class="col-md-8">
													<div class="form-group">
														<select class="form-control" name="category_id">
															<option> Select Category Name</option>
															
															@foreach($catdata as $row)
																<option
																@if(isset($edit)) 
					                                                @if($edit->category_id==$row->id) 
					                                                selected="selected"
					                                                @endif 
					                                            @endif
                                             value="{{ $row->id }}"> {{ $row->name }}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-4 text-right">Name</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Name" @if(isset($edit))
										value="{{$edit->name}}" @endif name="name">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-4 text-right">Image</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="file" class="form-control" placeholder="col-md-8" name="image">
														@if(isset($edit))
														@if(!empty($edit->image))
															<img style="margin-top: 10px;"  width="150" src="{{url('upload/SubCategory/'.$edit->image)}}"  />
														@endif
															<input type="hidden" id="text" class="form-control" value="{{$edit->image}}" placeholder="logo" name="ex_image">
													@endif
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
			<section id="base-style">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Category List</h4>
								<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
								<div class="card-body card-dashboard">
									<table class="table table-striped table-bordered base-style">
										<thead>
											<tr>
												<th>#</th>
												<th>Category Name</th>
												<th>Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@if(isset($data))
											@foreach($data as $row)
											<tr>
												<td>{{ $row->id }}</td>
												<td>{{ $row->category_name }}</td>
												<td>{{ $row->name }}</td>
												<td>

						                            <a href="{{url('admin-site/sub-category/edit/'.$row->id)}}" title="Edit" class="btn btn-icon btn-outline-primary"><i class="fa fa-pencil-square-o"></i></a>
                                        			<a  href="{{url('admin-site/sub-category/delete/'.$row->id)}}" title="Delete" class="btn btn-icon btn-outline-danger"><i class="ft-trash-2"></i></a>

                                    
												</td>
											</tr>
											@endforeach
											@endif
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Catgory Name</th>
												<th>Name</th>
												<th>Action</th>
											</tr>
										</tfoot>				
									</table>				
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

