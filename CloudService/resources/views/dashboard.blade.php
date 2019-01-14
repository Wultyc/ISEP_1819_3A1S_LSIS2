@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">{{__('Home')}}</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Begin Row -->
        <div class="row flex-row">
            <!-- Begin Facebook -->
            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="widget widget-12 has-shadow">
                    <div class="widget-body">
                        <div class="media">
                            <div class="align-self-center ml-5 mr-5">
                                <i class="ion-person text-primary"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="title text-primary">{{__('Authenticated User')}}</div>
                                <div class="number">{{\Auth::user()->name}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Facebook -->
            <!-- Begin Twitter -->
            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="widget widget-12 has-shadow">
                    <div class="widget-body">
                        <div class="media">
                            <div class="align-self-center ml-5 mr-5">
                                @if(\Auth::user()->language === "pt-PT")
                                    <!--<img style="width:65px;" src="{{asset('assets/icons/flags/portugal.png')}}" alt="Português" class="img-fluid rounded-circle"/>-->
                                    <i class="ion-flag text-primary"></i>
                                @else
                                    <img style="width:65px;" src="{{asset('assets/icons/flags/united-kingdom.png')}}" alt="English" class="img-fluid rounded-circle"/>
                                @endif
                            </div>
                            <div class="media-body align-self-center">
                                <div class="title text-primary">{{__('Selected Language')}}</div>
                                @if(\Auth::user()->language === "pt-PT")
                                    <div class="number">Português</div>
                                @else
                                    <div class="number">English</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Twitter -->
            <!-- Begin Linkedin -->
            <div class="col-xl-4 col-md-6 col-sm-6">
                <div class="widget widget-12 has-shadow">
                    <div class="widget-body">
                        <div class="media">
                            @if(true)
                                <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-checkmark-circled text-success"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="title text-primary">{{__('Online Support')}}</div>
                                    <div class="number text-success">{{__('Available')}}</div>
                                </div>
                            @else
                                <div class="align-self-center ml-5 mr-5">
                                    <i class="ion-close-circled text-danger"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="title text-linkedin">{{__('Online Support')}}</div>
                                    <div class="number text-danger">{{__('Unavailable')}}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Linkedin -->
        </div>
        <!-- End Row -->
        <!-- Begin Row -->
        <div class="row no-margin">
            <div class="col-xl-12">
                <!-- Begin Widget -->
                <div class="row widget has-shadow">
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Calendar</h2>
                    </div>
                    <!-- End Widget Header -->
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <!-- Begin Calendar -->
                        <div id="demo-calendar"></div>
                        <!-- End Calendar -->
                    </div>
                    <!-- End Widget Body -->
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
@endsection