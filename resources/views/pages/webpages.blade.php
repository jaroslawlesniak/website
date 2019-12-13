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
            <a href="/{{ App::getLocale() }}/portfolio/itad-2020">
                <div class="item">
                    <img src="/assets/portfolio/itad-2020.jpg">
                    <div class="opacity">
                        <i class="icon-link"></i>
                        <h3>@lang('content.project.webpage')</h3>
                    </div>
                </div>
                </a>
                <a href="/{{ App::getLocale() }}/portfolio/homepage">
                    <div class="item">
                        <img src="/assets/portfolio/homepage.jpg">
                        <div class="opacity">
                            <i class="icon-link"></i>
                            <h3>@lang('content.project.webpage')</h3>
                        </div>
                    </div>
                </a>
                <a href="/{{ App::getLocale() }}/portfolio/smartme">
                    <div class="item">
                        <img src="/assets/portfolio/smartme.jpg">
                        <div class="opacity">
                            <i class="icon-link"></i>
                            <h3>@lang('content.project.webpage')</h3>
                        </div>
                    </div>
                </a>
                <a href="/{{ App::getLocale() }}/portfolio/sifa">
                    <div class="item">
                        <img src="/assets/portfolio/sifa.jpg">
                        <div class="opacity">
                            <i class="icon-link"></i>
                            <h3>@lang('content.project.webpage')</h3>
                        </div>
                    </div>
                </a>
                <a href="/{{ App::getLocale() }}/portfolio/inox-railing">
                    <div class="item">
                        <img src="/assets/portfolio/inox-railing.jpg">
                        <div class="opacity">
                            <i class="icon-link"></i>
                            <h3>@lang('content.project.webpage')</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection