<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel Login | {{ env('PAGE_TITLE') }}</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin_login.css') }}">

    <style>
        .email:hover {
            cursor: not-allowed;
            background-color: #ffcccc;
        }
        
        .email:hover:after {
            content: 'X';
            color: #ff0000;
            font-size: 24px;
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <div class="workSpace">
        <div class="avatar" style="background: white;">
            <div id="infinity">
               <img src="{{ asset('admin-assets/images/admin-logo.png')}}" style="margin-top: 18px;height: 60px" alt="">
            </div>
        </div>
        <div class="left">
             <img class="img-fluid" style="width:284px;height:92px;" src="{{ asset('assets/img/healthfirstlogo.webp') }}" alt="">
            <h1 class="logo">Welcome to {{ env('PAGE_TITLE') }}</h1>
        </div>
        <div class="right">
            <form action="{{ route('reset.password') }}" id="" method="post">
                @csrf
                
                <h1>Reset Your Password</h1>
                <p class="invalid-feedback" role="alert">
                    <strong id="Message"></strong>
                </p>
                <p class="invalid-feedback" role="alert">
                    <strong id="succMessage"></strong>
                </p>
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
                <input type="hidden" name="token" value="{{$token}}">
                <input class="input email" type="text" placeholder="Enter Email ID" name="email" value="{{$email ?? old('email') }}"
                    required autocomplete="off">
               
                    <input class="input" name="password" type="password" placeholder="Enter your password" required
                    autocomplete="off">
                <input class="input" name="password_confirmation" type="password" placeholder="Enter your confirm password" required
                    autocomplete="off">
                <div class="login-btn-box">
                    <button class="submit">Update Password</button>
                    
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('admin-assets/js/app.min.js')}}"></script> 

    

    <script>
        $(document).ready(function(){
            @if(Session::has('5fernsadminerror'))
                $('#Message').html("{{ Session::get('5fernsadminerror') }}");
            @elseif(Session::has('5fernsadminsuccess'))
                $('#succMessage').html("{{ Session::get('5fernsuser_success') }}");
            @endif
        });

    </script>

    
</body>

</html>