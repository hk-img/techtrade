<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | {{ env('PAGE_TITLE') }}</title>
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
            color: green;
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

        

    </style>

</head>

<body>
    <div class="workSpace">
        <div class="avatar" style="background: white;">
            <div id="infinity">
               <img src="{{ asset('admin-assets/images/admin-logo.png')}}" style="margin-top: 6px;height: 58px" alt="">
            </div>
        </div>
        <div class="left">
            <img class="img-fluid" src="{{ asset('admin-assets/images/admin-2.png') }}" alt="">
            <h1 class="logo">Welcome to {{ env('PAGE_TITLE') }}</h1>
            <div class="hme-btn">
                {{-- <a href="<?php //echo url('/'); ?>" class="btn-link">Go to home </a> --}}
            </div>
            
        </div>
        <div class="right">
            <form id="formsubmit" action="{{ route('user.registration') }}" method="post">
                @csrf
                <h1>Signup</h1> 
                <input class="input input_capital position relative" type="text" placeholder="Enter Referral ID (Optional)" name="referrer_id" id="referralId" value="{{ old('name') }}"
                     autocomplete="off">
                     <pre class="spinner-border spinner-border-sm"  style="color:black;font-size: 100%;position:absolute;top:22%;right:10%;display:none" id="chkReferralLoader"></pre>
                <p id="ReferralMessageSuccess" style="color:green"></p>
                <p id="ReferralMessageError" style="color:red"></p>
                <input class="input" type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}"
                    required autocomplete="off">
                <input class="input" type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}"
                    required autocomplete="off">
                <input class="input" type="tel" placeholder="Enter your mobile" onkeypress="return /[0-9 ]/i.test(event.key)"  maxLength="10" name="mobile" value="{{ old('mobile') }}"
                    required autocomplete="off">
                <input class="input" name="password" type="password" placeholder="Enter your password" required
                    autocomplete="off">
                <input class="input" name="password_confirmation" type="password" placeholder="Enter your confirm password" required
                    autocomplete="off">
                <div class="login-btn-box">
                    <button class="submit" id="formsubmitSubmit" style="display: flex;padding-top:5px;align-items: center;width: 161px;"> Sign-up &nbsp;&nbsp;&nbsp; <pre class="spinner-border spinner-border-sm"  style="color:white;font-size: 100%;margin-top:-6px;position:relative;top:44%;right:6%;display:none" id="registerLoaderNew"></pre></button>
                </div>
            </form>
            <p >If you have an already account!! &nbsp;&nbsp;<a href="{{url('login')}}"> Login Now</a></p>

        </div>
    </div>
    <script src="{{ asset('admin-assets/js/app.min.js')}}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <script> 

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
                 
                    $('#registerLoaderNew').css('display', 'block');
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

                    $('#registerLoaderNew').css('display', 'none');
                    $('#' + formId + 'Submit').prop('disabled', false);

                },
                success: function(data) {
                    
                    $('#registerLoaderNew').css('display', 'none');
                    $('#' + formId + 'Submit').prop('disabled', false);

                    if(data.error == false){

                        $('#formsubmit')[0].reset();
                        $('#ReferralMessageSuccess').html('');
                        $('#ReferralMessageError').html('');

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
                processData: false
            });

        });

    

        $('#referralId').change(function(){
            var input = $(this).val();
 
            $('#ReferralMessageSuccess').html('');
            $('#ReferralMessageError').html('');
            
            var fd = new FormData();    
            fd.append('referrer_id', input );    

            $.ajax({

                type: "POST",
                dataType: "json",
                url: "{{route('check.referral.code.by.user')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: fd,
                beforeSend:function(){
                    $('#chkReferralLoader').css('display','block');
                },
                error:function(xhr,textStatus){
                    
                    if (xhr && xhr.responseJSON.message) {
                    
                        $('#ReferralMessageError').html(xhr.responseJSON.message);
                    } else {
                    
                        $('#ReferralMessageError').html(xhr.statusText);
                    }
                    $('#chkReferralLoader').css('display','none');
                },
                success: function(data){ 

                    $('#chkReferralLoader').css('display','none');

                    if(data.error){
                        $('#ReferralMessageError').html(data.msg);
                    }else{
                        $('#ReferralMessageSuccess').html(data.msg);
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