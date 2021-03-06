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
                <a href="#" class="nav-link active" data-toggle="tab">Farms</a>

            </nav>

            <div class="az-profile-body">
                <div class="row project-list-showcase">
@foreach ($projects as $item)



                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 project-grid">
                        <div class="project-grid-inner">
                            <div class="d-flex align-items-start">
                                <div class="wrapper">
                                    <h5 class="project-title">{{$item->project_title}}</h5>
                                    <p class="project-location">{{$item->location}}</p>
                                </div>
                            </div>
                            <p class="project-description">{{$item->project_description}}.</p>


                            <p>By: <small>{{$item['user']->name}}</small> </p>

                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="action-tags d-flex flex-row">
                                    <a href="{{route('readpost',$item->id)}}" class="wrapper pr-4"><i class="mdi mdi-view-sequential mr-2"></i>Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- az-profile-body -->
            </div><!-- az-content-body -->
        </div><!-- container -->
    </div><!-- az-content -->

   @endsection
