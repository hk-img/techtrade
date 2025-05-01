<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel Login | {{ env('PAGE_TITLE') }}</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/admin_login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="workSpace">
        <div class="avatar" style="background: white;">
            <div id="infinity">
               <img src="{{ asset('admin-assets/images/admin-logo.png')}}" style="margin-top: 18px;height: 60px" alt="">
            </div>
        </div>
       
        <div class="left">
            <img class="img-fluid" style="width:284px;height:92px;" src="{{ asset('assets/img/healthfirst-logo-blue.webp') }}" alt="">
            <h1 class="logo" style="margin-bottom: 15px;">Welcome to {{ env('PAGE_TITLE') }}</h1>
            <div class="hme-btn">
                {{-- <a href="http://127.0.0.1:8000" class="btn-link">Go to home </a> --}}
            </div>
        </div>
        <div class="right">
            <form action="{{route('sendresetlink')}}" id="" method="post">
                @csrf
                @if (session('message'))
                    <div class="bg-green alert alert-success alert-dismissible" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('message') }}
                    </div>
                @endif
                <h1 style="margin-bottom: 26px;">Forgot Password</h1>
                <p class="invalid-feedback" role="alert">
                    <strong id="Message"></strong>
                </p>
                <p class="invalid-feedback" role="alert">
                    <strong id="succMessage" style="color:green"></strong>
                </p>
            
                @error('unique_id')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
              
                <input class="input" type="text" placeholder="Enter Email ID" name="email" value="{{ old('email') }}"
                    required autocomplete="off">
               
                <div class="login-btn-box">
                    <button class="submit">Send link</button>
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
                $('#succMessage').html("{{ Session::get('5fernsadminsuccess') }}");
            @endif
        });

    </script> 

</body>

</html>