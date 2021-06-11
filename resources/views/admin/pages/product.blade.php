@extends('admin.layout.master')
@section('title','Product')
@section('breadcrumb','Product')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body"><!-- horizontal grid start -->
			@include('admin.include.msg')
			<!-- Centered Input start -->
			<section class="checkbox-input-grid" id="checkbox-input-grid">
				<div class="row match-height">
					<div class="col-xl-10 col-lg-12 offset-md-1">
						<div class="card">
							<div class="card-header">
								@if(isset($edit))
								 	<h4 class="card-title">Edit Product</h4>
								@else
									<h4 class="card-title">Add Product</h4>
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
										action="{{url('admin-site/product/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/product/save')}}"
									@endif>
										{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-3 text-right">Category</label>
												<div class="col-md-8">
													<div class="form-group">
														<select class="form-control" name="category_id" id="cat">
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
												<label class="col-md-3 text-right">Sub Category</label>
												<div class="col-md-8">
													<div class="form-group">
														<select class="form-control" name="sub_category_id" id="subCat">
															<option> Select Category Name</option>
															@foreach($subcatdata as $row)
																<option
																@if(isset($edit)) 
					                                                @if($edit->sub_category_id==$row->id) 
					                                                selected="selected"
					                                                @endif 
					                                            @endif
                                             value="{{ $row->id }}"> {{ $row->name }}</option>
															@endforeach
														</select>
					                                </select>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Name</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Name" @if(isset($edit))
										value="{{$edit->name}}" @endif name="name">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Price</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Price" @if(isset($edit))
										value="{{$edit->price}}" @endif name="price">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Short Detail</label>
												<div class="col-md-8">
													<div class="form-group">
														
													<textarea class="form-control" name="short_detail" placeholder="Short Detail">@if(isset($edit))
										{{$edit->short_detail}} @endif</textarea>
													</div>
												</div>
											</div>
			                                @if(isset($edit))
	                                    	<?php
						                     $fet=json_decode($edit->specification);
						                     $fetCount=count($fet); 
						                   ?>
											<div class="row">
												<label class="col-md-3 text-right">Specification</label>
												<div class="form-group col-8 mb-2 contact-repeater">
								                   @foreach($fet as $tt)
					                                <div data-repeater-list="repeater-group">
					                                    <div class="input-group mb-1" data-repeater-item>
					                                    	
										                     <input type="text" placeholder="Enter your product specification" class="form-control" id="example-tel-input" name="specification" value="{{ $tt }}">
					                                        <div class="input-group-append">
					                                            <span class="input-group-btn" id="button-addon2">
					                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
					                                            </span>
					                                        </div><br>
										                   
					                                    </div>
					                                </div>
					                                @endforeach
										                   
					                                <button type="button" data-repeater-create class="btn btn-primary">
					                                    <i class="icon-plus4"></i> Add Specification
					                                </button>
					                            </div>
											</div>
					                        @else
					                        <div class="row">
												<label class="col-md-3 text-right">Specification</label>
												<div class="form-group col-8 mb-2 contact-repeater">
					                               
					                                <div data-repeater-list="repeater-group">
					                                    <div class="input-group mb-1" data-repeater-item>
					                                    	
										                     <input type="text" placeholder="Enter your product specification" class="form-control" id="example-tel-input" name="specification" >
					                                        <div class="input-group-append">
					                                            <span class="input-group-btn" id="button-addon2">
					                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
					                                            </span>
					                                        </div><br>
										                   
					                                    </div>
					                                </div>
					                                
					                                        
					                                <button type="button" data-repeater-create class="btn btn-primary">
					                                    <i class="icon-plus4"></i> Add Specification
					                                </button>
					                            </div>
											</div>
					                        @endif
											<div class="row">
												<label class="col-md-3 text-right">Product Image</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="file" class="form-control" name="image[]" multiple="multiple">
														@if(isset($edit))
			                                    	<?php
								                     $fet=json_decode($edit->image);
								                     $fetCount=count($fet); 
								                   ?>
								                   @foreach($fet as $tt)
								                   <img style="margin-top: 10px;"  width="150" src="{{url('upload/product/'.$tt)}}"  />
								                   @endforeach
								                   <input type="hidden" id="text" class="form-control" value="{{$edit->image}}" placeholder="image" name="ex_image">
								                   @endif
													</div>
												</div>
											</div>
											@if(isset($edit))
			                                    	<?php
								                     $fet=json_decode($edit->additional_info);
								                     $fetCount=count($fet); 
								                   ?>
											<div class="row">
												<label class="col-md-3 text-right">Additional Information</label>
												<div class="form-group col-8 mb-2 contact-repeater">
					                                
								                   @foreach($fet as $tt)
					                                <div data-repeater-list="repeater-group">
					                                    <div class="input-group mb-1" data-repeater-item>
					                                    	
					                                        <input type="text" placeholder="Enter your product Additional Information" class="form-control" id="example-tel-input" name="additional_info" value="{{ $tt }}"><br>
					                                        <div class="input-group-append">
					                                            <span class="input-group-btn" id="button-addon2">
					                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
					                                            </span>
					                                        </div>
					                                        
					                                    </div>
					                                </div>
					                                @endforeach
					                                        
					                                <button type="button" data-repeater-create class="btn btn-primary">
					                                    <i class="icon-plus4"></i> Add additional information
					                                </button>
					                            </div>
											</div>
											@else
					                                    
					                                       
											<div class="row">
												<label class="col-md-3 text-right">Additional Information</label>
												<div class="form-group col-8 mb-2 contact-repeater">
					                                <div data-repeater-list="repeater-group">
					                                    <div class="input-group mb-1" data-repeater-item>
					                                        <input type="tel" placeholder="Enter your product Additional Information" class="form-control" id="example-tel-input" name="additional_info">
					                                        <div class="input-group-append">
					                                            <span class="input-group-btn" id="button-addon2">
					                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
					                                            </span>
					                                        </div>
					                                    </div>
					                                </div>

					                                <button type="button" data-repeater-create class="btn btn-primary">
					                                    <i class="icon-plus4"></i> Add additional information
					                                </button>
					                            </div>
											</div>
										</div>
										 @endif
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
<script src="{{url('admin/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
{{-- <script src="{{url('admin/app-assets/js/scripts/customizer.min.js')}}"></script> --}}
<script src="{{url('admin/app-assets/js/scripts/forms/form-repeater.min.js')}}"></script>
<script type="text/javascript">
	$("#cat").click(function () {

    var cat = $(this).val();
    if (cat == null || cat == 0)
    {
        var loadingscid = '<option value="0">Please Select Category</option>';
        $("#subCat").html(loadingscid);
    } else
    {
        var loadingscid = '<option value="0">Loading Please Wait...</option>';
        $("#subCat").html(loadingscid);
        $.post("{{url('admin-site/ajax/subCatData')}}", {'cat': cat, '_token': '<?php echo csrf_token(); ?>'}, function (divdata) {
            console.log(divdata);
            var loadingscid = '<option value="0">Please Select Sub Category</option>';
            $.each(divdata, function (index, val) {
                console.log(val);
                loadingscid += '<option value="' + val.id + '">' + val.name + '</option>';
            });
            var getlength = divdata.length;
            //console.log(getlength);
            if (getlength == 0)
            {
                var loadingscid = '<option value="0">Please Select Another Category</option>';
                $("#subCat").html(loadingscid);
            } else
            {
                $("#subCat").html(loadingscid);
            }
        });
    }
});
</script>
@endsection

