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
                                    <i class="fa fa-list"></i> Change Password
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
                                Admin Information
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form" action="{{ route('admin.settings.info') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Admin Username <label
                                                        class="text-danger">*</label></label></label>
                                                        <input 
                                                            value="{{ auth()->user()->username ?? '' }}" 
                                                            type="text" class="form-control" 
                                                            placeholder="Enter Username" name="username" 
                                                            id="usernameInput"
                                                        >

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">E-mail Id <label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value="{{auth()->user()->email ?? ''}}"
                                                    type="email" class="form-control"
                                                    placeholder="Enter Email ID" name="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Mobile No. <label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value="{{auth()->user()->mobile ?? ''}}"
                                                    type="text" class="form-control"
                                                    placeholder="Enter Mobile Number" name="mob">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Address <label
                                                        class="text-danger">*</label></label>
                                                <textarea class="form-control"  name="address" placeholder="Address">{{auth()->user()->address ?? ''}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button style="background:#03476e;" type="submit"
                                        class="btn btn-success waves-effect m-r-15">
                                        Update
                                    </button>
                                    {{-- <button type="reset" class="btn btn-danger waves-effect">Reset</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content mt-0 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i>
                                Set Delivery Charges
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form" action="{{ url('admin/settings/charges') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Set Delivery Charges <label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value="{{auth()->user()->delivery_charge ?? ''}}"
                                                    type="number" class="form-control"
                                                    placeholder="Set Delivery Charges" name="delivery_charge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="inputName">Set Applicable Charges <label
                                                        class="text-danger">*</label></label></label>
                                                <input
                                                    value="{{auth()->user()->applicable_charge ?? ''}}"
                                                    type="number" class="form-control"
                                                    placeholder="Set Applicable Charges" name="applicable_charge">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button style="background:#03476e;" type="submit"
                                        class="btn btn-success waves-effect m-r-15">
                                        Update
                                    </button>
                                    {{-- <button type="reset" class="btn btn-danger waves-effect">Reset</button> --}}
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

        
    </script>

@endpush
