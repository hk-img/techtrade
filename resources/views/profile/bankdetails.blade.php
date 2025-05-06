@extends('layouts/master')

@section('title')
	@if(!empty($result))
		Update
	@else
		Add
	@endif
	Bankdetails
@endsection

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> Bank Detail</h2>
					</div>
					<div class="body">
						@if($result->status == 'De-Active')
						<h4 class="text-danger text-center">Your request is underprocess.</h4>
						@elseif($result->status == 'Reject')
						<h4 class="text-danger text-center">Your Request is Rejeceted becuase: {{$result->reject_remark}}</h4>
						@elseif($result->status == 'Active')
						<h4 class="text-success text-center">Your Request is Approved.</h4>
						@endif
						
						<form id="form" action="{{ route('user.profile.addBankdetails') }}" method="post" enctype="multipart/form-data"  autocomplete="off">
						@csrf
						<div class="row clearfix">
							<input type="hidden" name="id" value="@if(!empty($result)){{$result['id']}}@else{{ 0 }}@endif"  required />
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Account Holder Name <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['accountholdername'] }}@endif" type="text" maxlength="50" required class="form-control" placeholder="Enter Account Holder Name" name="accountholdername" >
									</div>
								</div>
							</div>
							

							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Bank Name <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['bankname'] }}@endif" type="text" required maxlength="20" class="form-control" placeholder="Enter Bank Name" name="bankname" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Bank Branch Code <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['branchcode'] }}@endif" type="text" required maxlength="20" class="form-control" placeholder="Enter Branch Code" name="branchcode" >
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Account Number<label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['accountno'] }}@endif" type="text" required class="form-control" placeholder="Enter Account Number" name="accountno" >
									</div>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">IFSC Code <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['ifsccode'] }}@endif" type="text" required maxlength="20" class="form-control" placeholder="Enter IFSC Code " name="ifsccode" >
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Upload Passbook <label class="text-danger">*</label></label>
										<input type="file" id="uploadImage" accept="image/png, image/gif, image/jpeg" class="form-control"  name="image" required data-type="single"  accept="image/*">
									</div>
								</div>
									
								<div class="form-group previewimages col-md-6" id="product" style="margin-top:10px">
									@if($result)
										<img src="{{ asset('uploads/passbook/'.$result->passbook) }}" style="width: 100px;border:1px solid #222;margin-right: 13px" />
										<input type="hidden" name="old_image" value="{{ $result->passbook }}" required />
									@endif
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

