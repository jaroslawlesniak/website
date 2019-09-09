@extends('layouts.main')

@section('title', __('title.apps'))

@section('hero')
    <h1>@lang('ui.apps')</h1>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">@lang('content.offert')</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-globe"></i>
                    <h3>@lang('content.offert.progressive')</h3>
                    <p>@lang('content.offert.progressive-desc')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-mobile"></i>
                    <h3>@lang('content.offert.mobile')</h3>
                    <p>@lang('content.offert.mobile-desc')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-desktop"></i>
                    <h3>@lang('content.offert.desktop')</h3>
                    <p>@lang('content.offert.desktop-desc')</p>
                </div>
            </div>
        </div>
        <h2 class="ignore-margin margin-top">@lang('content.finished-projects')</h2>
        <h3>@lang('ui.apps')</h3>
        <div class="portfolio">
            <div class="item">
                <img src="/assets/portfolio/schedule.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/schedule"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.progressive')</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/league-parser.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/league-parser"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.mobile')</h3>
                </div>
            </div>
        </div>
        <h3>@lang('hero.desktop-apps')</h3>
    </div>
@endsection