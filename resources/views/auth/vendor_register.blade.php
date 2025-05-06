<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Register | {{ env('PAGE_TITLE') }}</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin_login.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
    <style>
        .modal-dialog-2{
            max-width: 589px;
            margin: 175px auto;
        }

        .modal-content{
            border: none;
        }
        
        .modal-header-2{
            border-bottom: none !important;
        }
        .table{
        border-color: #4f4c4c;
        }

        h4{
        color: green;
        }
        h6{
            color: black;
        }
        .not-box{
            color: red;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
        }
        .table tbody td{
            font-size: 14px;
            font-weight: 500;
            text-align:center
        }
        .spinner-border-sm {
            width: 20px;
            height: 20px;
            border-width: 0.2em;
        }
        .right .submit {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #03476e;
            border: 2px #03476e solid;
            margin: 10px 0;
            color: #fff;
            font-size: 20px;
            outline: none;
            font-weight: 600;
            border-radius: 20px;
            cursor: pointer;
            padding: 32px 17px 7px 24px;
        }
        .fs-wrap{
            width:260px
        }
        .fs-dropdown{
            width:29%
        }

        .formMain 
        .formLable {
            color: #000;
            font-size: 11px;
            font-weight: 500;
        }
        .formLable .star {
            color: red;
            font-weight: 500;
            font-size: 12px
        }
        .formInput {
            font-size: 14px !important;
        }
        .formInner {
            width: 50%;
        }
        .heading::after {
            transform: translateX(-50%);
            left: 50% !important;
        }
        .formdata {
            border-radius: 30px 
        }
        .workSpace {
            height: auto;
        }
        .right {
            border-radius: 20px
        }
        @media (max-width:576px) {
            .formMain {
                flex-direction: column;
            }
            .formInner {
                width: 100%;
            }
            .heading {
                font-size: 25px !important;
            }
            .heading::after {
                width: 25% !important;
            }
            .submit {
                font-size: 16px !important;
            }
            .workSpace {
                height: 100%;
            }

        }

    </style>

</head>

<body>
    
    <div class="workSpace shadow-none" style="backg round:#fff">
        <div class="right bg-white">
            <form id="formsubmit" action="{{ route('vendor.registration') }}" method="post" class="w-100 m h-100 shadowsm bg-white rounded-5 formdata px-sm-4 px-3 py-4">
                @csrf
                <h1 class="text-center mb-4 text-dark heading">Vendor Registration</h1><br>
                
                <div id="textboxes" style="display: none">
                    <input class="input w-100" type="text" onkeypress="return /[0-9 ]/i.test(event.key)" placeholder="Enter Admin Discount" name="discount"
                      autocomplete="off">
                </div>
                <div class="d-flex formMain gap-sm-4 gap-3 mt-3">
                    <div class="w-100">
                        <label class="ps-2 formLable">Store Name <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" type="text" placeholder="Enter your Store Name" name="name" value="{{ old('name') }}"
                        required autocomplete="off">
                    </div>
                    <div class="w-100">
                        <label class="ps-2 formLable">Business Name <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" type="text" placeholder="Enter your Business Name" name="business_name" value="{{ old('business_name') }}"
                        required autocomplete="off">
                    </div>
                </div>
                <div class="d-flex formMain gap-sm-4 gap-3 mt-3">
                    <div class="w-100">
                        <label class="ps-2 formLable">Email <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}"
                        required autocomplete="off">
                    </div>
                    <div class="w-100">
                        <label class="ps-2 formLable">Mobile Number <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" type="tel" placeholder="Enter your mobile" onkeypress="return /[0-9 ]/i.test(event.key)"  maxLength="10" name="mobile" value="{{ old('mobile') }}"
                        required autocomplete="off">
                    </div>
                </div>
                <div class="d-flex formMain gap-sm-4 gap-3 mt-3">
                    <div class="w-100">
                        <label class="ps-2 formLable">Password <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" name="password" type="password" placeholder="Enter your password" required
                        autocomplete="off">
                    </div>
                    <div class="w-100">
                        <label class="ps-2 formLable">Confirm Password <span class="star">*</span></label>
                        <input class="input w-100 formInput mt-0" name="password_confirmation" type="password" placeholder="Enter your confirm password" required
                            autocomplete="off">
                    </div>
                </div>
                    
                <div class="login-btn-box pt-3">
                    <button class="submit roundedpill" id="formsubmitSubmit" style="display: flex;padding-top:5px;align-items: center;width: 161px; border-radius:30px;"> Sign-up &nbsp;&nbsp;&nbsp; <pre class="spinner-border spinner-border-sm"  style="color:white;font-size: 100%;margin-top:-6px;position:relative;top:44%;right:6%;display:none" id="registerLoaderNew"></pre></button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('admin-assets/js/app.min.js')}}"></script> 
    <script src="{{ asset('admin-assets/js/fSelect.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <script> 
    $('.select').fSelect({
			placeholder: 'Select Category',
			numDisplayed: 3,
			overflowText: '{n} selected',
			noResultsText: 'No results found',
			searchText: 'Search',
			showSearch: true
		});
    
        $(function() {
            $('input[name="business_type"]').on('click', function() {
                if ($(this).val() == 'Offline' || $(this).val() == 'Both') {
                    $('#textboxes').show();
                }
                else {
                    $('#textboxes').hide();
                }
            });
        });


        $("form#formsubmit").submit(function(e) {
        
            e.preventDefault();

            var formId = $(this).attr('id');
            var formAction = $(this).attr('action');

            $.ajax({
                url: formAction,
                data: new FormData(this),
                dataType: 'json',
                type: 'post',
                beforeSend: function() {
                 
                    $('#registerLoaderNew').show();
                    $('#' + formId + 'Submit').prop('disabled', true);
                },
                error: function(xhr, textStatus) {

                    if (xhr && xhr.responseJSON.message) {
                    
                        swal.fire({
                            title: "Error!",
                            icon: "error",
                            text: xhr.responseJSON.message, 
                            button: "OK",
                            closeOnClickOutside: false
                        }); 
 
                    } else {
                    
                        swal.fire({
                            title: "Error!",
                            icon: "error",
                            text: xhr.statusText,
                            button: "OK",
                            closeOnClickOutside: false
                        }); 
                    }

                    $('#registerLoaderNew').hide();
                    $('#' + formId + 'Submit').prop('disabled', false);

                },
                success: function(data) {
                    
                    $('#registerLoaderNew').hide();
                    $('#' + formId + 'Submit').prop('disabled', false);

                    if(data.error == false){

                        $('#formsubmit')[0].reset();

                        swal.fire({
                            title: 'Success !',
                            icon: "success",
                            html: data.msg,
                            button: "OK",
                            closeOnClickOutside: false
                        });

                    }else{
                        swal.fire({
                            title: "Error!",
                            icon: "error",
                            text: data.msg,
                            button: "OK",
                            closeOnClickOutside: false
                        });
                    } 
                    
                },
                
                cache: false,
                contentType: false,
                processData: false,
            });

        });

    
        $('.input_capital').on('input', function(evt) {
            $(this).val(function(_, val) {
                return val.toUpperCase();
            });
        });
    </script>

    </body>
</html>