<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Veo </title>

    <!-- vendor css -->
    <link href="{{asset('app/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('app/css/azia.css')}}">

</head>
<body class="az-body">

<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <div class="w3_agileits_banner_main_grid">
            <div class="w3_agile_logo">
                <h1>
                    <a href="index.html">
                        <span>G</span><span style="color: black; background-color: #FFFFFF; padding: 1px;">erminate</span>
                        <p style="font-size: 15px;">Grow healthy products</p>
                    </a>
                </h1>
            </div>
        </div>

        <div class="az-signin-header">
            <h2 class="text-success">Welcome back!</h2>
            <h4>Please sign in to continue</h4>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="text" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="Enter your email">

                </div>
                <!-- form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">

                </div>
                <!-- form-group -->
                <button type="submit" class="btn btn-success btn-block">Sign In</button>
            </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
            <p>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </p>
            <p>Don't have an account? <a href="{{ route('register') }}">Create an Account</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->

<script src="{{asset('app/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('app/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app/lib/ionicons/ionicons.js')}}"></script>

<script src="{{asset('app/js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

    });
</script>
</body>

</html>
