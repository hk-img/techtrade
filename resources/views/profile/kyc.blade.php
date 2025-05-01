@extends('layouts/master')

@section('title')
	@if(!empty($result))
		Update 
	@else
		Add 
	@endif
	Kyc
@endsection

@section('content')
<section class="content">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> KYC Submission</h2>
					</div>
					<div class="body">
						@if($result->status == 'Pending')
							<div class="alert alert-warning" role="alert">
								Your request is under review.
							</div>
						@elseif($result->status == 'Rejected')
							<div class="alert alert-danger" role="alert">
								Your request has been rejected.<br/>
								@if(!empty($result->remark)){{'Reason: '. $result->remark}}@endif
							</div>
						@elseif($result->status == 'Approved')
							<div class="alert alert-success" role="alert">
								Your request is approved.
							</div>
						@endif
						<form id="form" action="{{ route('user.profile.kyc') }}" method="post" enctype="multipart/form-data" autocomplete="off">
						@csrf
						
						<input type="hidden" name="id" value="@if(!empty($result)){{$result['id']}}@else{{ 0 }}@endif"  required />
					
						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Aadhar Card Number <label class="text-danger">*</label></label>
										<input type="text" name="aadhar_number" required  class="form-control" min="12"  maxLength="12" placeholder="Enter Aadhar Card Number" value="@if(!empty($result)){{ $result['aadhar_number'] }}@endif"/>
									</div>
								</div>
							</div>
						

						<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputimg">Aadhar Card Front Image <label class="text-danger">*</label></label>									
										@if($result && $result->aadhar_image_front!='')
											<a href="{{ asset('uploads/kyc/'.$result['aadhar_image_front']) }}" target="_blank" class="text-info" style="float: right;font-size: 13px;text-decoration: underline;font-weight: 200;">Preview</a>
										@endif  
										<input type="file" id="inputimg" class="form-control"  name="aadhar_image_front" @if(!$result) required @endif  data-type="single" data-image-preview="category_preview" accept="image/*"  class="form-control" >
										<p style="color:red;width:50%"></p>
									</div>
								</div>
						</div>
                            
						<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputimg">Aadhar Card Back Image <label class="text-danger">*</label></label>
										@if($result && $result->aadhar_image_back!='')
											<a href="{{ asset('uploads/kyc/'.$result['aadhar_image_back']) }}" target="_blank" class="text-info" style="float: right;font-size: 13px;text-decoration: underline;font-weight: 200;">Preview</a>
										@endif  
										<input type="file" id="inputimg" class="form-control"  name="aadhar_image_back" @if(!$result) required @endif  data-type="single" data-image-preview="category_preview" accept="image/*"  class="form-control" >
										<p style="color:red;width:50%"></p>
									</div>
								</div>
							</div>
                            <div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">PAN Card Number <label class="text-danger">*</label></label>
										<input type="text" name="pan_number" required  class="form-control" min="10"  maxLength="10" placeholder="Enter PAN Card Number" value="@if(!empty($result)){{ $result['pan_number'] }}@endif"/>
									</div>
								</div>
							</div>

                            <div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputimg">PAN Card Front Image <label label class="text-danger">*</label></label>
										@if($result && $result->pancard_image!='')
											<a href="{{ asset('uploads/kyc/'.$result['pancard_image']) }}" target="_blank" class="text-info" style="float: right;font-size: 13px;text-decoration: underline;font-weight: 200;">Preview</a>
										@endif 
										<input type="file" id="inputimg" class="form-control"  name="pancard_image_fornt" @if(!$result) required @endif  data-type="single" data-image-preview="category_preview" accept="image/*"  class="form-control" >
										<p style="color:red;width:50%"></p>
									</div>
								</div>
							</div>
                            <div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputimg">Bank Proof <label class="text-danger">*</label></label>
										@if($result && $result->bank_proff!='')
											<a href="{{ asset('uploads/kyc/'.$result['bank_proff']) }}" target="_blank" class="text-info" style="float: right;font-size: 13px;text-decoration: underline;font-weight: 200;">Preview</a>
										@endif
										<input type="file" id="inputimg" class="form-control"  name="bank_proff" @if(!$result) required @endif  data-type="single" data-image-preview="category_preview" accept="image/*"  class="form-control" >
										<p style="color:red;width:50%"></p>
									</div>
								</div>
							</div>
						</div>
                            
						<div class="col-lg-12 p-t-20 text-center">
							@if ($result['status']!='Approved' )
								<button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15" >@if(!empty($result)) Update @else Submit @endif</button> 
								@if(empty($result)) 
									<button type="reset" class="btn btn-danger waves-effect">Reset</button>
								@endif
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