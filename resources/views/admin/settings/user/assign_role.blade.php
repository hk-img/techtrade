@extends('layouts.master')

@section('title')
	Assign Role
@endsection


@push('custom_css')
	<link href="{{ asset('admin-assets/css/jquerysctipttop.css')}}" rel="stylesheet" />
	<link href="{{ asset('admin-assets/css/materialdesignicons.min.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('admin-assets/css/combotreestyle.css') }}">
	<script src="{{ asset('admin-assets/js/jquery-3.4.1.min.js')}}"></script>

<style>
	.fs-wrap {
		display: inline-block;
		cursor: pointer;
		line-height: 1.3;
		width: 100%;
	}

	.fs-dropdown {
		position: absolute;
		background-color: #fff;
		border: 1px solid #ddd;
		width: 100%;
		margin-top: 5px;
		z-index: 1000;
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
						<h2><i class="fa fa-th"></i>  Go To</h2>
					</div>
					<div class="body">
						<div class="btn-group top-head-btn">
                            <a class="btn-primary" href="{{ url('admin/settings/user/list')}}">
                                <i class="fa fa-list"></i> User List 
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
						<h2><i class="fa fa-th"></i> Assign Role</h2>
					</div>
					<div class="body">
						<form id="form" action="{{ route('admin.settings.user.role') }}" method="post"  autocomplete="off">
						@csrf
						<input type="hidden" name="id" value="@if(!empty($result)){{ $result['id'] }}@else{{ '0' }}@endif"  required />
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName"> Username <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['username'] }}@endif" type="text" required class="form-control" placeholder="Enter Username" name="username" maxlength="8" disabled>
									</div>
								</div>
							</div>
						</div>

						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Select Role <label class="text-danger">*</label></label>
										<select class="form-control category" name="role" required>
											{{-- <option  selected disabled>Please select any role</option> --}}
											<option value="1" @if(!empty($result['designation_id']) && $result['designation_id'] == 1) selected @endif>Super User</option>
											<option value="2" @if(!empty($result['designation_id']) && $result['designation_id'] == 2) selected @endif>Sub User</option>
											<option value="3" @if(!empty($result['designation_id']) && $result['designation_id'] == 3) selected @endif>User</option>
											<option value="4" @if(!empty($result['designation_id']) && $result['designation_id'] == 4) selected @endif>Manager</option>
										</select>
									</div>
								</div>
							</div>
						</div>
	 	
						<div class="col-lg-12 p-t-20 text-center">
							<button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15" >@if(!empty($result)) Update @else Submit @endif</button> 
							@if(empty($result)) 
								<button type="reset" class="btn btn-danger waves-effect" onclick="window.location.reload();">Reset</button>
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
	$('.category').fSelect({
		placeholder: 'Please select any role',
		numDisplayed: 3,
		overflowText: '{n} selected',
		noResultsText: 'No results found',
		searchText: 'Search',
		showSearch: true
	});

	$(document).ready(function () {
		
		function validateDiscountInput(inputValue) {
			// Remove non-numeric characters
			inputValue = inputValue.replace(/[^0-9]/g, '');

			// Ensure the value is between 1 and 100
			if (inputValue < 1 || inputValue > 100) {
				inputValue = inputValue.substring(0, inputValue.length - 1);
			}

			return inputValue;
		}

		function applyDiscountTypeConditions(discountType) {
			// $('#discount').val('');

			$('#discount').off('input'); // Remove any existing input event handler

			if (discountType == 1) {
				// Attach new input event handler for numeric validation
				$('#upto').attr('required',true)
				$('#upto').removeAttr('disabled')
				$('#uptoLabel').html('*')
				$('#discount').on('input', function () {
					var inputValue = $(this).val();
					inputValue = validateDiscountInput(inputValue);
					$(this).val(inputValue);
				});
			} else {
				$('#upto').removeAttr('required')
				$('#upto').attr('disabled',true)
				$('#uptoLabel').html('')
				// Attach a generic input event handler (no specific validation)
				$('#discount').on('input', function () {
					var inputValue = $(this).val();
					$(this).val(inputValue);
				});
			}
		}

		var discount = $('#discount_type').find(':selected').val();
		if(discount){
			applyDiscountTypeConditions(discount) 

		}else{
			// Set the initial discount type to 1
			$('#discount_type').val(1);
	
			// Apply conditions based on the initial discount type
			applyDiscountTypeConditions($('#discount_type').val());

		}

		$('#discount_type').on('change', function () {
			$('#discount').val('');
			// Apply conditions based on the selected discount type
			applyDiscountTypeConditions($(this).val());
		});

		$('#generate-coupon').on('click', function () {
			var coupon = Math.random().toString(36).slice(2, 9);
			$('input[name="coupon_code"]').val(coupon.toUpperCase());
		});
	});
</script>
@endpush
