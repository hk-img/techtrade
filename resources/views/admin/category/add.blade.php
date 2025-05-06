@extends('layouts.master')

@section('title')
	@if(!empty($result))
		Update
	@else
		Add
	@endif
	Category
@endsection


@push('custom_css')
	<script src="{{ asset('admin-assets/js/jquery-3.4.1.min.js')}}"></script>

@endpush
@section('content')

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i>  Go To</h2>
					</div>
					<div class="body">
						<div class="btn-group top-head-btn">
                            <a class="btn-primary" href="{{ url('admin/resources/download/category/list')}}">
                                <i class="fa fa-list"></i> Category List 
							</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> @if(!empty($result)) Update @else Add @endif Category</h2>
					</div>
					<div class="body">
						<form id="form" action="{{ url('admin/resources/download/category/add') }}" method="post" enctype="multipart/form-data"  autocomplete="off">
						@csrf
						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<input type="hidden" name="id" value="@if(!empty($result)){{ $result['id'] }}@else{{ '0' }}@endif"  required />
										<label for="inputName">Category Name <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['name'] }}@endif" pattern="^[a-zA-Z0-9\s]+$" 
										title="Only alphabets, numbers, and spaces are allowed." type="text" required class="form-control" placeholder="Enter Category Name" name="name" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Parent Category </label>
										<select name="parent_id" id="category" class="form-control">
											<option value="">-- Select Parent Category  --</option>
											@if(!empty($category))
												@foreach($category as $cat)
													<option value="{{$cat['id']}}" @if(!empty($result) && $result['parent_id'] == $cat['id']) selected @endif>{{ucfirst($cat['name'])}}</option>
												@endforeach
											@endif
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Link</label>
										<input  value="@if(!empty($result)){{ $result['link'] }}@endif" type="url" required class="form-control" placeholder="Enter Link" name="link" >
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 p-t-20 text-center">
							<button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15" >@if(!empty($result)) Update @else Submit @endif</button> 
							@if(empty($result)) 
								<button type="reset" onclick="resetFormData()" class="btn btn-danger waves-effect">Reset</button>
							@endif
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('custom_js')

	<script>

		function resetFormData(){
			$('#category').html('');
		}

	</script>
	
@endpush

