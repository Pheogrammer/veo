<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Veo</title>

    <!-- vendor css -->
    <link href="{{asset('app/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('app/lib/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('app/css/azia.css')}}">

</head>
<body>

<div class="az-header" style="position: fixed; z-index:2; width:100%;">
    <div class="container">
        <div class="az-header-left">
            <a href="/" style="padding: 1rem;" class="az-logo">
                <img src="{{asset('app1/logo.png')}}" style="height: 3rem;">
            </a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.html" class="az-logo"><span></span> azia</a>
                <a href="#" class="close">&times;</a>
            </div><!-- az-header-menu-header -->

        </div><!-- az-header-menu -->

        <div class="az-header-right">
            <a href="#" class="az-header-search-link"><i class="fas fa-search"></i></a>
            <div class="az-header-message">
                <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
                <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header mg-b-20 d-sm-none">
                        <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <h6 class="az-notification-title">Notifications</h6>
                    <p class="az-notification-text">You have 2 unread notification</p>
                    <div class="az-notification-list">
                        <div class="media new">
                            <div class="az-img-user"><img src="{{asset('app/img/faces/face2.jpg')}}" alt=""></div>
                            <div class="media-body">
                                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                <span>Mar 15 12:32pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media new">
                            <div class="az-img-user online"><img src="{{asset('app/img/faces/face3.jpg')}}" alt=""></div>
                            <div class="media-body">
                                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                <span>Mar 13 04:16am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                            <div class="az-img-user"><img src="{{asset('app/img/faces/face4.jpg')}}" alt=""></div>
                            <div class="media-body">
                                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                <span>Mar 13 02:56am</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                            <div class="az-img-user"><img src="{{asset('app/img/faces/face5.jpg')}}" alt=""></div>
                            <div class="media-body">
                                <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                <span>Mar 12 10:40pm</span>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- az-notification-list -->
                    <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->

            <div class="dropdown az-profile-menu">
                <a href="#" class="az-img-user"><img src="{{asset('app/img/faces/face1.jpg')}}" alt=""></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="{{asset('app/img/faces/face1.jpg')}}" alt="">
                        </div><!-- az-img-user -->
                        <h6> {{ Auth::user()->name }}</h6>
                    </div><!-- az-header-profile -->


                    <a href="{{route('finalize')}}" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    @guest

                    @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Sign out') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                 @endguest
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->

@yield('content')

<div class="az-footer pd-b-10">
    <div class="container">
    </div><!-- container -->
</div><!-- az-footer -->


<script src="{{asset('app/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('app/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app/lib/ionicons/ionicons.js')}}"></script>
<script src="{{asset('app/lib/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('app/js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

        /** AREA CHART **/
        var ctx = document.getElementById('chartArea').getContext('2d');

        var gradient = ctx.createLinearGradient(0, 240, 0, 0);
        gradient.addColorStop(0, 'rgba(0,123,255,0)');
        gradient.addColorStop(1, 'rgba(0,123,255,.3)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Oct 1', 'Oct 2', 'Oct 3', 'Oct 4', 'Oct 5', 'Oct 6', 'Oct 7', 'Oct 8', 'Oct 9', 'Oct 10'],
                datasets: [{
                    data: [12, 15, 18, 40, 35, 38, 32, 20, 25],
                    borderColor: '#007bff',
                    borderWidth: 1,
                    backgroundColor: gradient
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    yAxes: [{
                        display: false,
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                            max: 80
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11,
                            fontFamily: 'Arial'
                        }
                    }]
                }
            }
        });

    });
</script>
</body>

</html>
