@extends('layouts.app')
@section('title',__(' Not Found'))
@section('content')

    <main class="main">
        <!-- error area -->
        <div class="error-area py-20">
            <div class="container">
                <div class="col-md-6 mx-auto">
                    <div class="error-wrapper">
                        <div class="error-img">
                            <img src="{{asset('assets/img/error/01.webp')}}" alt="">
                        </div>
                        <h2>Opos... Page Not Found!</h2>
                        <p>The page you looking for not found may be it not exist or removed.</p>
                        <a href="{{url('/')}}" class="theme-btn mb-4">Go Back Home <i class="far fa-home"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- error area end -->

    </main>
@endsection
    

