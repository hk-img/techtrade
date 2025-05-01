@extends('layouts/master')
@section('title')
@if(!empty($result))
		Update 
	@else
		Add 
	@endif
	Admin
@endsection
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
                            <a class="btn-primary" href="{{ url('admin/admin/list')}}">
                                <i class="fa fa-list"></i> Admin List
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
						<h2><i class="fa fa-th"></i> @if(!empty($result)) Update @else Add @endif Admin</h2>
					</div>
					<div class="body">
						<form id="form" action="{{ route('admin.admin.addadmin') }}" method="post" enctype="multipart/form-data" autocomplete="off">
						@csrf
						
						<input type="hidden" name="id" value="@if(!empty($result)){{$result['id']}}@else{{ 0 }}@endif"  required />

                        <div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<label for="name">Name <label class="text-danger">*</label></label>
									<input  value="@if(!empty($result)){{ $result['name'] }}@endif" type="text" required class="form-control" placeholder="Enter Admin Name" name="name" >
								</div>
							</div>
						</div>

						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="email">Email <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['email'] }}@endif" type="email" required class="form-control" placeholder="Enter Email" name="email" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="mobile">Mobile <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['mobile'] }}@endif" type="text" required class="form-control" placeholder="Enter Mobile" name="mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)" >
									</div>
								</div>
							</div>
						</div>
      
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Image </label>
										<input type="file" id="uploadImage" accept="image/png, image/gif, image/jpeg" class="form-control"  name="image" @if(!$result) @endif  data-type="single" data-image-preview="product" accept="image/*">
									</div>
								</div>
								
								<div class="form-group previewimages col-md-6 mt-4" id="product">
									@if($result)
										@if($result->profileimage != null || $result->profileimage != '' )<img src="{{ asset('uploads/user/'.$result->profileimage) }}" style="width: 100px;border:1px solid #222;margin-right: 13px" />@endif
										<input type="hidden" name="old_image" value="{{ $result->profileimage }}" />
									@endif
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 p-t-20 text-center">
							<button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15" >@if(!empty($result)) Update @else Submit @endif</button> 
							@if(empty($result)) 
								<button type="reset" class="btn btn-danger waves-effect">Reset</button>
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
			
			$('.previewimages').html('');
		}
	</script>
@endpush