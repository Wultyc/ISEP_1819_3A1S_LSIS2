@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">{{__('Profile')}}</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item active">{{__('Profile')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-xl-3">
                <!-- Begin Widget -->
                <div class="widget has-shadow">
                    <div class="widget-body">
                        <div class="mt-5">
                            <img src="assets/img/avatar/avatar-01.jpg" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                        </div>
                        <h3 class="text-center mt-3 mb-1">{{\Auth::user()->name}}</h3>
                        <p class="text-center">{{\Auth::user()->email}}</p>
                        <div class="em-separator separator-dashed"></div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bell la-2x align-middle pr-2"></i>{{__('Notifications')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bolt la-2x align-middle pr-2"></i>{{__('Activity')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-comments la-2x align-middle pr-2"></i>{{__('Messages')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-gears la-2x align-middle pr-2"></i>{{__('Settings')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-question-circle la-2x align-middle pr-2"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <div class="col-xl-9">
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>{{__('Update Profile')}}</h4>
                    </div>
                    <div class="widget-body">
                        <div class="col-10 ml-auto">
                            <div class="section-title mt-3 mb-3">
                                <h4>01. {{__('Personnal Informations')}}</h4>
                            </div>
                        </div>
                        <form method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('Client Number')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="{{__('Client Number')}}" value="{{\Auth::user()->client_number}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('Full Name')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="{{__('Full Name')}}" value="{{\Auth::user()->name}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                <div class="col-lg-6">
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{\Auth::user()->email}}">
                                </div>
                            </div>
                        <div class="col-10 ml-auto">
                            <div class="section-title mt-3 mb-3">
                                <h4>02. {{__('Address Informations')}}</h4>
                            </div>
                        </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('Address')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" name="address" class="form-control" placeholder="{{__('Address')}}" value="{{\Auth::user()->address}}">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('City')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" name="city" class="form-control" placeholder="{{__('City')}}" value="{{\Auth::user()->city}}">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('State')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" name="state" class="form-control" placeholder="{{__('State')}}" value="{{\Auth::user()->state}}">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">{{__('Zip')}}</label>
                                <div class="col-lg-6">
                                    <input type="text" name="zip" class="form-control" placeholder="{{__('Zip')}}" value="{{\Auth::user()->zip}}">
                                </div>
                            </div>

                        <div class="em-separator separator-dashed"></div>
                        <div class="text-right">
                            <button class="btn btn-gradient-01" type="submit">{{__('Save Changes')}}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection