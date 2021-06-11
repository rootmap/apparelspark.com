@extends('admin.layout.master')
@section('title','Price')
@section('breadcrumb','Price')

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
								 	<h4 class="card-title">Edit Price</h4>
								@else
									<h4 class="card-title">Add Price</h4>
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
										action="{{url('admin-site/price/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/price/save')}}"
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
												<label class="col-md-3 text-right">Position</label>
												<div class="col-md-8">
													<div class="form-group">
														<select class="form-control" name="position">
					                                    <option value="0" selected="" disabled="">Please Select Option</option>
					                                    <option @if(isset($edit)){{ $edit->position === 'Position 1' ? 'selected' : '' }} @endif  value="Position 1">Position 1</option>
					                                    <option @if(isset($edit)){{ $edit->position === 'Position 2' ? 'selected' : '' }} @endif  value="Position 2">Position 2</option>
					                                    <option @if(isset($edit)){{ $edit->position === 'Position 3' ? 'selected' : '' }} @endif  value="Position 3">Position 3</option>
					                                </select>
													</div>
												</div>
											</div>
											<div class="row contact-repeater">
												<label class="col-md-3 text-right">Features</label>
												<div class="col-md-8">
													
													<div  class="cloneRow">
														
					                                    <div class="input-group mb-1" data-repeater-item>
					                                        <input type="text" placeholder="Features" value="" class="form-control" id="example-tel-input" name="features[]">
					                                        <div class="input-group-append">
					                                            <span class="input-group-btn" id="button-addon2">
					                                                <button class="btn btn-danger removeFetRow" type="button"  onclick="removeFetRow(this)"><i class="ft-x"></i></button>
					                                            </span>
					                                        </div>
					                                    </div>
					                                    
					                                </div>
					                                
					                                <button type="button" id="createNewRow" class="btn btn-primary">
					                                    <i class="icon-plus4"></i> Add new Features
					                                </button>
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
								<h4 class="card-title">Price List</h4>
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
												<th>Title</th>
												<th>Position</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@if(isset($data))
											@foreach($data as $row)
											<tr>
												<td>{{ $row->id }}</td>
												<td>{{ $row->title }}</td>
												<td>{{ $row->position }}</td>
												<td>

						                            <a href="{{url('admin-site/price/edit/'.$row->id)}}" title="Edit" class="btn btn-icon btn-outline-primary"><i class="fa fa-pencil-square-o"></i></a>
                                        			<a  href="{{url('admin-site/price/delete/'.$row->id)}}" title="Delete" class="btn btn-icon btn-outline-danger"><i class="ft-trash-2"></i></a>

                                    
												</td>
											</tr>
											@endforeach
											@endif
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Position</th>
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
<script src="{{url('admin/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{url('admin/app-assets/js/scripts/forms/form-repeater.min.js')}}"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		$("#createNewRow").click(function(){
    			//$(".cloneRow").clone().insertAfter("contact-repeater:last");
    			$(".cloneRow:last").after($('.cloneRow:last').clone());
    		});
    	});

    	function removeFetRow(removeFetRow)
    	{
    			$(removeFetRow).parent().parent().parent('div').remove();
    	}
    </script>
@endsection

