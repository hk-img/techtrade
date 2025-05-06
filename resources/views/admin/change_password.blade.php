@extends('layouts/master')

@section('title',__('Change Password'))

@section('Changepassword',__('active'))
@push('custom_css')
 <style>
        .form-line {
            position: relative;
            width: 50%;
        }
        .form-control {
            width: 100%;
            padding-right: 40px; /* Space for the icon */
        }
        .form-line .fa-eye,
        .form-line .fa-eye-slash {
            position: absolute;
            right: 10px;
            top: 71%;
            transform: translateY(-50%);
            cursor: pointer;
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
						<h2><i class="fa fa-th"></i> Change Password</h2>
					</div>
                    
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="body">
						<form id="form" action="" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="old_pass">Enter Old Password <label class="text-danger">*</label></label>
                                        <input required type="text" id="old_pass" class="form-control" name="old_pass">
										<i class="fa fa-eye togglePassword" data-input="old_pass" aria-hidden="true" id=""></i>
									</div>
								</div>
							</div>
						</div>

							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="password">Enter New Password <label class="text-danger">*</label></label>
                                        <input required type="text" id="password" class="form-control" name="password">
										<i class="fa fa-eye togglePassword" data-input="password" aria-hidden="true" id=""></i>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="confirm_password">Enter Confirm Password <label class="text-danger">*</label></label>
                                        <input required type="text" id="confirm_password" class="form-control" name="confirm_password">
										<i class="fa fa-eye togglePassword" data-input="confirm_password" aria-hidden="true" id=""></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pb-5 text-center">
                            <input style="margin-right: 91%;" type="submit" class="btn btn-success" value="Submit">
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
 	$(document).ready(function () {
		$('.togglePassword').on('click', function () {
			const input = $(this).data('input')
			const inputField = $('#'+input);
			const type = inputField.attr('type') === 'password' ? 'text' : 'password';
			inputField.attr('type', type);
			// Toggle icon class
			$(this).toggleClass('fa-eye fa-eye-slash');
		});
	});
</script>
@endpush
