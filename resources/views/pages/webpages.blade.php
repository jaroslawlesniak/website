@extends('layouts.main')

@section('title', __('title.webpages'))

@section('hero')
    <h1>@lang('hero.webpages')</h1>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">@lang('content.offert')</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-globe"></i>
                    <h3>@lang('content.offert.webpages')</h3>
                    <p>@lang('content.offert.webpages-title')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-basket"></i>
                    <h3>@lang('content.offert.shops')</h3>
                    <p>@lang('content.offert.shops-title')</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-cubes"></i>
                    <h3>@lang('content.offert.webapps')</h3>
                    <p>@lang('content.offert.webapps-title')</p>
                </div>
            </div>
        </div>
        <h2 class="projects">@lang('content.finished-projects')</h2>
        <div class="portfolio">
            <div class="item">
                <img src="/assets/portfolio/inox-railing.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/inox-railing"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.webpage')</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/sifa.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/sifa"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.webpage')</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/smartme.jpg">
                <div class="opacity">
                    <a href="/{{ App::getLocale() }}/portfolio/smartme"><i class="icon-link"></i></a>
                    <h3>@lang('content.project.webpage')</h3>
                </div>
            </div>
        </div>
    </div>
@endsection