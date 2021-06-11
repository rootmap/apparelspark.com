@extends('admin.layout.master')
@section('title','Our Team')
@section('breadcrumb','Our Team')

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
								@if(isset($edit))
								 	<h4 class="card-title">Edit Our Team</h4>
								@else
									<h4 class="card-title">Add Our Team</h4>
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
									@if(isset($edit))
										action="{{url('admin-site/team/modify/'.$edit->id)}}"
									@else
										action="{{url('admin-site/team/save')}}"
									@endif>
									{{ csrf_field() }}
										<div class="form-body">
											<div class="row">
												<label class="col-md-3 text-right">Name</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="name" @if(isset($edit))
										value="{{$edit->name}}" 
									@endif  placeholder="Name">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Image</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="file" class="form-control" placeholder="Image" name="image">
														@if(isset($edit))
														@if(!empty($edit->image))
															<img style="margin-top: 10px;"  width="150" src="{{url('upload/team/'.$edit->image)}}"  />
														@endif
															<input type="hidden" id="text" class="form-control" value="{{$edit->image}}" placeholder="image" name="ex_image">
													@endif
													</div>
												</div>
											</div>
											
											<div class="row">
												<label class="col-md-3 text-right">Detail</label>
												<div class="col-md-8">
													<div class="form-group">
										<textarea class="form-control" name="detail" placeholder="Enter Detail"> @if(isset($edit))
										{{$edit->detail}} @endif</textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Facebook</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="facebook" @if(isset($edit))
										value="{{$edit->facebook}}" 
									@endif  placeholder="Facebook Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Twitter</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="twitter" @if(isset($edit))
										value="{{$edit->twitter}}" 
									@endif  placeholder="Twitter Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Youtube</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="youtube" @if(isset($edit))
										value="{{$edit->youtube}}" 
									@endif  placeholder="Youtube Url">
													</div>
												</div>
											</div>
											<div class="row">
												<label class="col-md-3 text-right">Google Plus</label>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" class="form-control" name="google_plus" @if(isset($edit))
										value="{{$edit->google_plus}}" 
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
			<!-- Centered Input end -->
			<section id="base-style">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Team List</h4>
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
												<th>Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@if(isset($data))
											@foreach($data as $row)
											<tr>
												<td>{{ $row->id }}</td>
												<td>{{ $row->name }}</td>
												<td>

						                            <a href="{{url('admin-site/team/edit/'.$row->id)}}" title="Edit" class="btn btn-icon btn-outline-primary"><i class="fa fa-pencil-square-o"></i></a>
                                        			<a  href="{{url('admin-site/team/delete/'.$row->id)}}" title="Delete" class="btn btn-icon btn-outline-danger"><i class="ft-trash-2"></i></a>

                                    
												</td>
											</tr>
											@endforeach
											@endif
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Title</th>
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
@endsection

