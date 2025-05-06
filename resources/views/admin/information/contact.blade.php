@extends('layouts/master')

@section('title')
Contact Info
@endsection

@push('custom_css')
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
.note-modal-footer {
	height: 65px;
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}

.note-modal-body {
    position: relative;
    padding: 20px 30px;
    max-height: 400px;
	overflow-y: auto;
}
</style>
@endpush

@section('content')
<section class="content">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h2><i class="fa fa-th"></i> Contact Info</h2>
					</div>
					<div class="body">
						<form id="form" action="{{ url('admin/information/contact-info') }}" method="post" enctype="multipart/form-data" autocomplete="off">
						@csrf
						
						<input type="hidden" name="id" value="@if(!empty($result)){{$result['id']}}@endif"  required />
						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName"> Email <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['email'] }}@endif" type="email" required class="form-control" placeholder="Enter Email" name="email" >
									</div>
								</div>
							</div>							
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Contact Number <label class="text-danger">*</label></label>
										<input
											value="@if(!empty($result)){{ $result['contact_no'] }}@endif"
											type="tel"
											required
											class="form-control"
											placeholder="Enter Contact Number"
											name="contact_no"
											pattern="\d{10}"
											maxlength="10"
											minlength="10"
											oninput="this.value = this.value.replace(/[^0-9]/g, '')"
											title="Please enter exactly 10 digits"
										>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Registered Office <label class="text-danger">*</label></label>
										<textarea class="form-control" name="registered_office" rows="4"  id="summernote" cols="50">@if(!empty($result)){{$result['registered_office']}}@endif</textarea>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Corporate Office <label class="text-danger">*</label></label>
										<textarea class="form-control" name="corporate_office" rows="4"  id="summernote2" cols="50">@if(!empty($result)){{$result['corporate_office']}}@endif</textarea>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName"> Location <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['link'] }}@endif" type="text" required class="form-control" placeholder="Enter link" name="link" >
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 p-t-20 text-center">
							<button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15" >Update</button> 
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
	<script>

		$('#summernote').summernote({
			placeholder: 'Enter Registered Office',
			tabsize: 2,
			height: 200,
			toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview']]
                    // Note: The 'fullscreen' button is omitted here
                ]
		});
		
		$('#summernote2').summernote({
			placeholder: 'Enter Corporate Office',
			tabsize: 2,
			height: 200,
			toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview']]
                    // Note: The 'fullscreen' button is omitted here
                ]
		});

	</script>
@endpush