<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | {{ env('PAGE_TITLE') }}</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin_login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="workSpace">
        <div class="left">
            <img class="img-fluid" style="width:284px;height:92px;" src="{{asset('assets/img/logo.png')}}" alt="">
            <h1 class="logo">Welcome to TECHTRADE</h1>
        </div>
        <div class="right">
            <form action="{{ route('adminlogin') }}" method="POST">
                @csrf
                <h1>Sign In</h1>
                
                <!-- Display general error message -->
                <p class="invalid-feedback" role="alert">
                    <strong id="Message"></strong>
                </p>
                <p class="invalid-feedback" role="alert">
                    <strong id="Message1" style="color: green;"></strong>
                </p>

                <!-- Laravel validation error messages -->
                @error('error')
                    <p class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror

                @error('email')
                    <p class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror

                @error('password')
                    <p class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror

                <!-- Input fields -->
                <input class="input" 
                    type="text" 
                    name="email" 
                    placeholder="Enter Email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="off">

                    <div style="position: relative; display: inline-block; width:100%">
                        <input class="input" 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Enter your password" 
                            required 
                            autocomplete="off" >
                        <button type="button" 
                                onclick="togglePassword()" 
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
                            <i id="eyeIcon" class="fa fa-eye"></i>
                        </button>
                    </div>

                <!-- Login button -->
                <div class="login-btn-box">
                    <button class="submit" type="submit">Log In</button>
                </div>

                <!-- Forgot password link -->
                <!-- <a href="{{ route('reset') }}" class="forgotpassword">Forgot Password?</a> -->
                {{-- <p >If don't have an account!! &nbsp;&nbsp;<a href="{{url('register')}}"> Register Now</a></p> --}}
            </form>

        </div>
    </div>
    <script src="{{ asset('admin-assets/js/app.min.js')}}"></script> 

    <script>
        $(document).ready(function(){
            @if(Session::has('5fernsadminerror'))
                $('#Message').html("{{ Session::get('5fernsadminerror') }}");
            @elseif(Session::has('5fernsadminsuccess'))
                $('#Message1').html("{{ Session::get('5fernsadminsuccess') }}");
            @endif
        });

    </script>
    <script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var eyeIcon = document.getElementById("eyeIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>
</body>

</html>