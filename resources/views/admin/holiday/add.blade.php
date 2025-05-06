@extends('layouts.master')

@section('title')
	@if(!empty($result))
		Update
	@else
		Add
	@endif
	Holiday
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
                            <a class="btn-primary" href="{{ url('admin/resources/holiday/list')}}">
                                <i class="fa fa-list"></i> Holiday List 
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
						<h2><i class="fa fa-th"></i> @if(!empty($result)) Update @else Add @endif Holiday</h2>
					</div>
					<div class="body">
						<form id="form" action="{{ url('admin/resources/holiday/add') }}" method="post" enctype="multipart/form-data"  autocomplete="off">
						@csrf
						<input type="hidden" name="id" value="@if(!empty($result)){{ $result['id'] }}@else{{ '0' }}@endif"  required />
						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Holiday Type <label class="text-danger">*</label> </label>
										<select required name="holiday_type" id="holiday_type" class="form-control">
											<option value="">-- Select Holiday Type  --</option>
											<option value="Trading" @if(!empty($result) && $result->holiday_type == 'Trading') selected @endif >Trading</option>
											<option value="Settlement" @if(!empty($result) && $result->holiday_type == 'Settlement') selected @endif>Settlement</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Year <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['year'] }}@endif" type="text" required class="form-control" placeholder="Enter year" name="year" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Holiday <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['holiday'] }}@endif" type="text" required class="form-control" placeholder="Enter holiday" name="holiday" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Exchanges <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['exchanges'] }}@endif" type="text" required class="form-control" placeholder="Enter Exchanges" name="exchanges" >
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-line">
										<label for="inputName">Date <label class="text-danger">*</label></label>
										<input  value="@if(!empty($result)){{ $result['date'] }}@endif" type="date" required class="form-control" placeholder="Enter Date" name="date" >
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

