@extends('layouts.main')

@section('title', __('title.graphics'))

@section('hero')
    <h1>@lang('ui.graphics')</h1>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">@lang('content.offert')</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-diamond"></i>
                    <h3>@lang('content.offert.logo')</h3>
                    <p>@lang('content.offert.logo-desc')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-vcard"></i>
                    <h3>@lang('content.offert.card')</h3>
                    <p>@lang('content.offert.card-desc')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-flag"></i>
                    <h3>@lang('content.offert.baner')</h3>
                    <p>@lang('content.offert.baner-desc')</p>
                </div>
            </div>
        </div>
        <h2 class="projects">@lang('content.finished-projects')</h2>
        <div class="portfolio same-height">
            <div class="item">
                <img src="/assets/portfolio/inox-railing-wizytowka.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/inox-railing-wizytowka"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.card')</h3>
                </div>
            </div>
            <div class="item">
                <img class="padding" src="/assets/portfolio/amdar.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/amdar"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.logo')</h3>
                </div>
            </div>
        </div>
    </div>
@endsection