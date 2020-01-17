@extends('layouts/main')

@section('title', __('title.homepage'))

@section('hero')
    <div class="row">
        <div class="col-md-6">
            <h1>Jarosław Leśniak</h1>
            <h2><i class="icon-right-open"></i>@lang('hero.webpages')</h2>
            <h2><i class="icon-right-open"></i>@lang('hero.shops')</h2>
            <h2><i class="icon-right-open"></i>@lang('hero.web-apps')</h2>
            <h2><i class="icon-right-open"></i>@lang('hero.mobile-apps')</h2>
            <h2><i class="icon-right-open"></i>@lang('hero.desktop-apps')</h2>
            <h2><i class="icon-right-open"></i>@lang('hero.graphics')</h2>
        </div>
        <div class="col-md-6 last-project">
           <img src="/assets/images/jaroslaw_lesniak.jpg">
           <div class="about">
           <h2>@lang('hero.about')</h2>
           <p>@lang('hero.about-desc')</p>
           </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main">
        <h2 class="ignore-margin offert-header">@lang('content.my-offert')</h2>
        <div class="container offert">
            <div class="row">
                <div class="col-md-3">
                    <i class="icon-globe"></i>
                    <h3>@lang('hero.webpages')</h3>
                    <p>@lang('content.webpages-desc')</p>
                    <a href="/{{ App::getLocale().'/'.__('ui.webpages-url') }}">@lang('content.more-info')</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-mobile"></i>
                    <h3>@lang('hero.mobile-apps')</h3>
                    <p>@lang('content.mobile-desc')</p>
                    <a href="/{{ App::getLocale().'/'.__('ui.apps-url') }}">@lang('content.more-info')</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-desktop"></i>
                    <h3>@lang('hero.desktop-apps')</h3>
                    <p>@lang('content.desktop-desc')</p>
                    <a href="/{{ App::getLocale().'/'.__('ui.apps-url') }}">@lang('content.more-info')</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-palette"></i>
                    <h3>@lang('hero.graphics')</h3>
                    <p>@lang('content.graphic-desc')</p>
                    <a href="/{{ App::getLocale().'/'.__('ui.graphics-url') }}">@lang('content.more-info')</a>
                </div>
            </div>
        </div>
        <div class="technologies">
            <h2>@lang('content.technologies')</h2>
            <div class="container">
                <div class="frameworks">
                    <img src="/assets/frameworks/react.png" title="React">
                    <img src="/assets/frameworks/angular.png" title="Angular">
                    <img src="/assets/frameworks/craftcms.png" title="CraftCMS">
                    <img src="/assets/frameworks/ionic.png" title="Ionic">
                    <img src="/assets/frameworks/wordpress.png" title="Wordpress">
                    <img src="/assets/frameworks/laravel.png" title="Laravel">
                    <img src="/assets/frameworks/mysql.png" title="MySQL">
                    <img src="/assets/frameworks/electron.png" title="Electron">
                </div>
            </div>
        </div>
        <h2 class="ignore-margin margin-top">@lang('content.last-projects')</h2>
        <h3>@lang('hero.webpages')</h3>
        <div class="portfolio">
            <a href="/{{ App::getLocale() }}/portfolio/notes">
                <div class="item">
                    <img src="/assets/portfolio/notes.jpg">
                    <div class="opacity">
                        <i class="icon-link"></i>
                        <h3>@lang('content.project.webapp')</h3>
                    </div>
                </div>
            </a>
            <a href="/{{ App::getLocale() }}/portfolio/florencja">
                <div class="item">
                    <img src="/assets/portfolio/florencja.jpg">
                    <div class="opacity">
                        <i class="icon-link"></i>
                        <h3>@lang('content.project.webpage')</h3>
                    </div>
                </div>
            </a>
            <a href="/{{ App::getLocale() }}/portfolio/itad-2020">
                <div class="item">
                    <img src="/assets/portfolio/itad-2020.jpg">
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
        </div>
        <div class="counts">
            <h2 class="ignore-margin">@lang('content.counts')</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span>9</span>
                        <p>@lang('content.finished')</p>
                    </div>
                    <div class="col-md-4">
                        <span>7</span>
                        <p>@lang('content.technologies-amount')</p>
                    </div>
                    <div class="col-md-4">
                        <span>25</span>
                        <p>@lang('content.coffe')</p>
                    </div>
                </div>
            </div>
        </div>
        <h2>@lang('content.contact-me')</h2>
        @include('layouts.contact')
    </div>
@endsection