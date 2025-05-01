@extends('layouts/master')

@section('title')
    @if (!empty($result))
        Update
    @else
        Add
    @endif
    Profile
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form id="form" action="{{ route('user.profile.myaccount') }}" method="post"
            enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                @if (\Auth::user()->designation_id == '3' && \Auth::user()->remarks != '')
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span
                                    class="sr-only">Close</span></button>
                            <p style=" color: white; font-weight: 600;font-size:20px;margin-top:10px"><strong><i
                                        class="fa fa-warning"></i> Profile!</strong> {{ \Auth::user()->remarks }}</p>
                        </div>
                    </div>
                @endif
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> Basic Info</h2>
                        </div>
                        <div class="body">
                                <input type="hidden" name="id"
                                    value="@if (!empty($result)) {{ $result['id'] }}@else{{ 0 }} @endif"
                                    required />
                                <div class="col-md-12 col-xs-12">
                                    <label for="inputimg">Name: </label> @if(!isset($seller_details)) {{ \Auth::user()->name }} @else {{$seller_details->name}} @endif<br />
                                    <label for="inputimg">Email: </label> @if(!isset($seller_details)) {{ \Auth::user()->email }}  @else {{$seller_details->email}} @endif <br />
                                    <label for="inputimg">KYC Status: </label> <span class="@if(Auth::user()->status == 'Approved') text-success @elseif(Auth::user()->status == 'In-Review') text-info @else text-warning @endif">{{ \Auth::user()->status }}</span> <br />
                                    <label>Current Photo</label>
                                    <img src="@if (\Auth::user()->profileimage != null && file_exists( public_path().'/uploads/user/'.\Auth::user()->profileimage)) {{ asset('uploads/user/' . \Auth::user()->profileimage) }} @else {{ asset('admin-assets/images/emptys.png') }} @endif"
                                        alt="Alternate Text"
                                        style=" width: 100%; max-width: 90px; max-height: 90px;margin-left: 114px">
                                        @if (\Auth::user()->profileimage == null)
                                        <div class="form-line">
                                            <label for="inputimg">Profile Photo <label class="text-danger">*</label></label>
                                            <input type="file" id="inputimg" class="form-control" name="image"
                                                @if (!$result) required @endif data-type="single"
                                                data-image-preview="category_preview" accept="image/*" class="form-control">
                                            <p style="color:red;width:50%"></p>
                                        </div>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> Personal Information (LoginID: @if(!isset($seller_details)){{ \Auth::user()->unique_id }}  @else {{$seller_details->unique_id}} @endif)</h2>
                        </div>
                        <div class="body">
                            @if (\Auth::user()->user_type == 'Seller')
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line" style="display: flex;justify-content: space-between;">
                                                <label for="inputName">Business Name<label class="text-danger"
                                                        style="padding-right: 15px;">*</label></label>
                                                <input name="business_name" type="text"
                                                    @if (\Auth::user()->status == 'Active') {{ 'readonly' }} @endif
                                                    class="form-control" placeholder="Enter Business Name"
                                                    value="{{ \Auth::user()->business_name }}"
                                                    style="width:50%;cursor:@if (\Auth::user()->status == 'Active') {{ 'not-allowed' }}@else{{ 'pointer' }} @endif"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if (isset($seller_details))
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line" style="display: flex;justify-content: space-between;">
                                                <label for="inputName">Business Name<label class="text-danger"
                                                        style="padding-right: 15px;">*</label></label>
                                                <input name="business_name" type="text"
                                                    @if ($seller_details->status == 'Active') {{ 'readonly' }} @endif
                                                    class="form-control" placeholder="Enter Business Name"
                                                    value="{{ $seller_details->business_name }}"
                                                    style="width:50%;cursor:@if ($seller_details->status == 'Active') {{ 'not-allowed' }}@else{{ 'pointer' }} @endif"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line" style="display: flex;justify-content: space-between;">
                                            <label for="inputName">Mobile:<label class="text-danger"
                                                    style="padding-right: 15px;">*</label></label>
                                            <input type="tel" onkeypress="return /[0-9 ]/i.test(event.key)"
                                                maxLength="10" name="mobile" required readonly class="form-control"
                                                placeholder="Enter mobile no" value="@if(!isset($seller_details)) {{ \Auth::user()->mobile }}  @else {{$seller_details->mobile}} @endif"
                                                style="width:50%;cursor:not-allowed" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line" style="display: flex;justify-content: space-between;">
                                            <label for="inputName">Date of Birth:<label class="text-danger"
                                                    style="padding-right: 15px;">*</label></label>
                                            <input type="date" id="dob" name="dateofbirth" required
                                                class="form-control chkAge"
                                                value="{{(!empty($result)) ? $result['dob'] : '' }}"
                                                style="width:50%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (\Auth::user()->designation_id == '4')
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line" style="display: flex;justify-content: space-between;">
                                                <label for="inputName">Pan Number:</label>
                                                <input type="text" name="pan_no" class="form-control" maxlength="10"
                                                    value="@if (!empty($result)) {{ $result['pan_no'] }} @endif"
                                                    style="width:50%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line" style="display: flex;justify-content: space-between;">
                                                <label for="inputName">GST Number:</label>
                                                <input type="text" name="gst_no" class="form-control" maxlength="15"
                                                    @if (!empty($result) && $result['gst_no'] != '') {{ 'readonly' }} @endif
                                                    value="@if (!empty($result)) {{ $result['gst_no'] }} @endif"
                                                    style="width:50%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line" style="display: flex;justify-content: space-between;">
                                                <label for="inputName">Pin Code:</label>
                                                <input type="text" name="pincode" class="form-control" maxlength="6"
                                                    @if (!empty(\Auth::user()->pinno) && \Auth::user()->pinno != '') {{ 'readonly' }} @endif
                                                    value="@if (!empty(\Auth::user()->pinno)) {{ \Auth::user()->pinno }} @endif"
                                                    style="width:50%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> Home Address Information</h2>
                        </div>
                        <div class="body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address Full Name:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_fullname"
                                            onkeypress="return /[A-Z a-z ]/i.test(event.key)" class="form-control"
                                            value="@if (!empty($result)) {{ $result['address_fullname'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address House No.<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_houseno" class="form-control"
                                            value="@if (!empty($result)) {{ $result['address_houseno'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address Street:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_street" class="form-control"
                                            value="@if (!empty($result)) {{ $result['address_street'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address City:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_city" class="form-control"
                                            value="@if (!empty($result)) {{ $result['address_city'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address State:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_state" class="form-control"
                                            value="@if (!empty($result)) {{ $result['address_state'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Address Postal Code:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="address_postalcode"
                                            onkeypress="return /[0-9 ]/i.test(event.key)" maxLength="6"
                                            class="form-control" required
                                            value="@if (!empty($result)) {{ $result['address_postalcode'] }} @endif"
                                            style="width:50%" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2><i class="fa fa-th"></i> Office/Work Place Address Information</h2>
                        </div>
                        <div class="body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office Full Name:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_fullname"
                                            onkeypress="return /[A-Z a-z ]/i.test(event.key)" class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_fullname'] }} @endif"
                                            required style="width:50%" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office House No.<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_houseno" class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_houseno'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office Street:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_street" class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_street'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office City:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_city" class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_city'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office State:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_state" class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_state'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line" style="display: flex;justify-content: space-between;">
                                        <label for="inputName">Office Postal Code:<label class="text-danger"
                                                style="padding-right: 15px;">*</label></label>
                                        <input type="text" name="officeadd_postal"
                                            onkeypress="return /[0-9 ]/i.test(event.key)" maxLength="6"
                                            class="form-control"
                                            value="@if (!empty($result)) {{ $result['officeadd_postal'] }} @endif"
                                            style="width:50%" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-t-20 text-center">
                <button style="background:#03476e;" type="submit" class="btn btn-success waves-effect m-r-15">
                    @if (!empty($result))
                        Update
                    @else
                        Submit
                    @endif
                </button>
                @if (empty($result))
                    <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                @endif
            </div>
            <br><br>
            </form>

        </div>
    </section>
@endsection

@push('custom_js')
    <script>
        $(function() {
            $('input[name="business_type"]').on('click', function() {
                if ($(this).val() == 'Offline' || $(this).val() == 'Both') {
                    $('#textboxes').show();
                    $('#textboxes input').prop('required', true);
                } else {
                    $('#textboxes').hide();
                    $('#textboxes input').prop('required', false);
                }
            });
        });

        function resetFormData() {

            $('.previewimages').html('');
        }
    </script>
    <script>
        $(document).ready(function() {

            $('.chkAge').change(function() {

                var dob = new Date($('.chkAge').val());

                var today = new Date();
                var age = today.getFullYear() - dob.getFullYear();
                if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today
                        .getDate() < dob.getDate())) {
                    age--;
                }
                if (age < 18) {
                    alert('Age must be atleast 18 years old.');
                }


            });
        });
    </script>
@endpush
