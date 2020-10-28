@extends('admin.layouts.app')

@section('title', trans('text.admin.dashboard.title'))

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/admin/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/admin/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/admin/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/admin/css/pages/card-analytics.css') }}">
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="bower_components/admin/images/elements/decore-left.png" class="img-left">
                                        <img src="bower_components/admin/images/elements/decore-right.png" class="img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">{{ trans('text.admin.dashboard.welcome') }} {{ Auth::user()->email }},</h1>
                                            {{ trans('text.admin.dashboard.welcome_message', ['pendingGame' => $numberPendingGame, 'publisherRequest' => $numberPublisherRequest]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('bower_components/admin/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <script src="{{ asset('bower_components/admin/js/pages/home.js') }}"></script>
@endsection
