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

<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container" style="margin-top: 3rem;">
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
            <div class="az-content-breadcrumb">
                <span>Finish Account Setup</span>
            </div>
            <h2 class="az-content-title">Finalize Account</h2>
            <form action="{{route('saveprofile')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div id="wizard2">
                <h3>Personal Information</h3>
                <section>
                    <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
                    <div class="row row-sm">
                        <div class="col-md-10 col-lg-8">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input id="firstname" class="form-control" value="{{auth()->user()->name}}" name="firstname" placeholder="Enter Your Name"
                                   type="text" required>
                        </div>
                    </div>
                    <input hidden id="lastname" class="form-control" value="juma" name="lastname" placeholder="Enter lastname">


                    <div class="row row-sm" style="margin-top: 1rem;">
                        <div class="col-md-5 col-lg-4">
                            <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                            <input id="bob" class="form-control" value="{{auth()->user()->DOB}}" max="{{date('Y-m-d')}}" name="dob" placeholder="Enter Date of Birth"
                                   type="date" required>
                        </div><!-- col -->
                        <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                            <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                            <select id="gender" class="form-control" name="gender" placeholder="Select Gender"
                                    required>
                                    <option value="{{auth()->user()->gender}}">{{auth()->user()->gender}}</option>
                                <option value="Male">Male</option>
                                <option value="Male">Female</option>
                            </select>
                        </div><!-- col -->
                    </div><!-- row -->
                </section>
                <h3>Contact Information</h3>
                <section>
                    <p>Wonderful transition effects.</p>
                    <div class="row row-sm">
                        <div class="col-md-5 col-lg-4">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input id="email" class="form-control" value="{{auth()->user()->email}}" name="email" placeholder="Enter email"
                                   type="email" required>
                        </div><!-- col -->

                            <input hidden value="juma"  id="lastname" class="form-control" name="lastname" placeholder="Enter lastname"
                                   type="text" required>
                    </div>

                    <div class="row row-sm" style="margin-top: 1rem;">
                        <div class="col-md-5 col-lg-4">
                            <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                            <input value="{{auth()->user()->phone_number}}" id="p_number1" class="form-control" name="phone_number" placeholder="Enter Phone Number"
                                   type="number" maxlength="10" minlength="10" required>
                        </div><!-- col -->
                        <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                            <label class="form-control-label">Phone Number 2: <span class="tx-danger">*</span></label>
                            <input value="{{auth()->user()->phone_number2}}" id="phone_number2" class="form-control" name="phone_number2"
                                   placeholder="Enter Phone number"
                                   type="number" required  maxlength="10" minlength="10" >
                        </div><!-- col -->
                    </div>

                    <div class="row row-sm" style="margin-top: 1rem;">
                        <div class="col-md-5 col-lg-4">
                            <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                            <input id="country" class="form-control" value="{{auth()->user()->country}}" name="country" placeholder="Enter country"
                                   type="text" required>
                        </div><!-- col -->
                        <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                            <label class="form-control-label">Region: <span class="tx-danger">*</span></label>
                            <input id="district" class="form-control"  value="{{auth()->user()->region}}" name="region" placeholder="Enter Region"
                                   type="text" required>
                        </div><!-- col -->
                    </div>

                    <div class="row row-sm" style="margin-top: 1rem;">
                        <div class="col-md-5 col-lg-4">
                            <label class="form-control-label">District: <span class="tx-danger">*</span></label>
                            <input id="district" class="form-control"  value="{{auth()->user()->district}}" name="district" placeholder="Enter District"
                                   type="text" required>
                        </div><!-- col -->
                        <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                            <label class="form-control-label">Street: <span class="tx-danger">*</span></label>
                            <input id="street" class="form-control" name="street" value="{{auth()->user()->street}}" placeholder="Enter Street"
                                   type="text" required>
                        </div><!-- col -->
                    </div>
                </section>
                <h3>Submit</h3>
                <section>
                    <p>Save your changes.</p>
                    <div hidden id="cbWrapper2" class="parsley-checkbox wd-250 mg-b-0">

                        <label class="ckbox mg-b-5">
                            <input hidden checked type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2"
                                   data-parsley-class-handler="#cbWrapper2"
                                   data-parsley-errors-container="#cbErrorContainer2"
                                   required><span>Email Notification</span>
                        </label>

                        <label class="ckbox mg-b-5">
                            <input hidden checked type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2"
                                   data-parsley-class-handler="#cbWrapper2"
                                   data-parsley-errors-container="#cbErrorContainer2"
                                   required><span>Email Notification</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </section>
            </div>
</form>
            <hr class="mg-y-30 mg-lg-y-50 bd-transparent">

            <div class="ht-40"></div>

            <div class="az-footer mg-t-auto" style="margin-top: -3rem;">
                <div class="container">
                </div><!-- container -->
            </div><!-- az-footer -->
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->


<script src="{{asset('app/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('app/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app/lib/ionicons/ionicons.js')}}"></script>
<script src="{{asset('app/lib/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{asset('app/lib/parsleyjs/parsley.min.js')}}"></script>


<script src="{{asset('app/js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

        $('#wizard1').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            onStepChanging: function (event, currentIndex, newIndex) {
                if (currentIndex < newIndex) {
                    // Step 1 form validation
                    if (currentIndex === 0) {
                        var fname = $('#firstname').parsley();
                        var lname = $('#lastname').parsley();

                        if (fname.isValid() && lname.isValid()) {
                            return true;
                        } else {
                            fname.validate();
                            lname.validate();
                        }
                    }

                    // Step 2 form validation
                    if (currentIndex === 1) {
                        var email = $('#email').parsley();
                        if (email.isValid()) {
                            return true;
                        } else {
                            email.validate();
                        }
                    }
                    // Always allow step back to the previous step even if the current step is not valid.
                } else {
                    return true;
                }
            }
        });

        $('#wizard3').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            stepsOrientation: 1
        });
    });
</script>
</body>

</html>
