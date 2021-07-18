@extends('layouts.app')

@section('content')
<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container" style="margin-top: 3rem;">
        <div class="az-content-left az-content-left-profile">
            <div class="az-profile-overview">
                <div class="az-img-user">
                </div><!-- az-img-user -->
                <div class="d-flex justify-content-between mg-b-20">
                    <div>
                        <h5 class="az-profile-name">{{auth()->User()->name}}</h5>

                    </div>
                    <div class="btn-icon-list">
                        <a href="{{route('newpost')}}" class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></a>
                        <button class="btn btn-primary btn-icon"><i class="typcn typcn-message"></i></button>
                    </div>
                </div>

                <div class="az-profile-bio">

                </div><!-- az-profile-bio -->

                <hr class="mg-y-30">

            </div><!-- az-profile-overview -->
        </div><!-- az-content-left -->

        <div class="az-content-body az-content-body-profile">
            <nav class="nav az-nav-line">

                    <h2 class="card-title">{{$datas->project_title}}</h2>
            </nav>

            <div class="az-profile-body">
                <div class="card" style="margin: auto; width: 50%;">
                    <img class="card-img-top" src="{{asset('posts/')}}@php echo '/'.$datas->user_id.'/'.$datas->image; @endphp" alt="Card image cap" style="width:100%;margin: auto;">
                    <div class="card-body">
                        <p class="card-text">{{$datas->project_description}}.</p>
                    </div>
                </div>
            </div><!-- az-content-body -->
        </div><!-- container -->

    </div><!-- az-content -->
</div>
@endsection

