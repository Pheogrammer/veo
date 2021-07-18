<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{asset('app/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('app/css/azia.css')}}">

</head>
<body class="az-body">

<div class="az-signup-wrapper">
    <div class="az-column-signup-left">
        <div>

            <img src="{{asset('app1/logo.png')}}">
            <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
            <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to
                mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope
                to win Startup Fictional Business of the Year this year.</p>
            <p>Browse our site and see for yourself why you need Azia.</p>
            <a href="index.html" class="btn btn-outline-success">Learn More</a>
        </div>
    </div><!-- az-column-signup-left -->
    <div class="az-column-signup">
        <div class="az-signup-header">
            <h2 class="text-success">Get Started</h2>
            <h4>It's free to signup and only takes a minute.</h4>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Firstname &amp; Lastname</label>
                    <input  id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your firstname and lastname">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div><!-- form-group -->
                <button type="submit" class="btn btn-success btn-block"><b>Create Account</b></button>

            </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->

<script src="{{asset('app//lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('app//lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app//lib/ionicons/ionicons.js')}}"></script>

<script src="{{asset('app//js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

    });
</script>
</body>

</html>
