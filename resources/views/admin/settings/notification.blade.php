@extends('layouts.master')

@section('title')
    Admin Info
@endsection

@push('custom_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/combotreestyle.css') }}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet" />

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

        [type="checkbox"]+label {
            padding-left: 10px;
            height: 26px;
            line-height: 20px;
            font-size: 13px;
        }

        .user-image {
            display: flex;
            flex-wrap: wrap;
        }

        .image-container {
            position: relative;
            margin-right: 13px;
        }

        .btn-delete {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #ff0000;
            color: #ffffff;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            font-weight: bold;
            font-size: 10px;
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
                            <h2><i class="fa fa-th"></i> Go To</h2>
                        </div>
                        <div class="body">
                            <div class="btn-group top-head-btn">
                                <a class="btn-primary" href="{{ url('admin/settings/changepassword') }}">
                                    <i class="fa fa-list"></i> Show Notifications
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
                            <h2><i class="fa fa-th"></i>
                                Send Push Notification
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form" action="{{ route('admin.settings.notification') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">User<label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value=""
                                                    type="text" required class="form-control"
                                                    placeholder="Enter Username" name="user">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Title<label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value=""
                                                    type="email" required class="form-control"
                                                    placeholder="Enter Title" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Message<label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value=""
                                                    type="text" required class="form-control"
                                                    placeholder="Write Message" name="body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Notification Icon<label
                                                        class="text-danger">*</label></label>
                                                <input
                                                    value=""
                                                    type="text" required class="form-control"
                                                    placeholder="Notification Icon" name="notification_icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Notification Image<label
                                                        class="text-danger">*</label></label>
                                                <input
                                                    value=""
                                                    type="text" required class="form-control"
                                                    placeholder="Notification Image" name="notification_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Want to send Data(On/Off)<label
                                                        class="text-danger">*</label></label>
                                                <div class="switch mt-3">
													<label>
														<input type="checkbox" class="toggleSendData" value="1">
														<span
															class="lever switch-col-red layout-switch"></span>
													</label>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div id="dataInputField">
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label for="inputName">DataText<label
                                                        class="text-danger">*</label></label>
													<input
														value=""
														type="text" required class="form-control"
														placeholder="" name="dataText">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label for="inputName">DataSubText<label
                                                        class="text-danger">*</label></label>
													<input
														value=""
														type="text" required class="form-control"
														placeholder="" name="dataSubText">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label for="inputName">DataImage<label
                                                        class="text-danger">*</label></label>
													<input
														value=""
														type="text" required class="form-control"
														placeholder="" name="dataImage">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label for="inputName">DataAlertOkMsg<label
                                                        class="text-danger">*</label></label>
													<input
														value=""
														type="text" required class="form-control"
														placeholder="" name="dataAlertOkMsg">
												</div>
											</div>
										</div>
									</div>
								</div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Update(On/Off)<label
                                                        class="text-danger">*</label></label>
                                                <div class="switch mt-3">
													<label>
														<input type="checkbox" class="update" name="update">
														<span
															class="lever switch-col-red layout-switch"></span>
													</label>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button style="background:#03476e;" type="submit"
                                        class="btn btn-success waves-effect m-r-15">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger waves-effect">Reset</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
		//initially Hide
		$('#dataInputField').hide();

        $.ajax({
            type: "get",
            dataType: "json",
            url: "{{ route('admin.product.addproduct') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                $('#preloader').css('display', 'block');
            },
            error: function(xhr, textStatus) {
                if (xhr && xhr.responseJSON.message) {
                    sweetAlertMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                } else {
                    sweetAlertMsg('error', xhr.status + ': ' + xhr.statusText);
                }
                $('#preloader').css('display', 'none');
            },
            success: function(data) {
                $('#preloader').css('display', 'none');
            }
        });


        function refreshpage()
        {
            location.reload();
        }

		$('.toggleSendData').on('change',function(){
			var isChecked  = $(this).is(':checked');
			if(isChecked){
				$('#dataInputField').show();
			}else{
				$('#dataInputField').hide();
			}
		})
    </script>

@endpush
