@extends('layouts/main')

@section('hero')
    <div class="row">
        <div class="col-md-6">
            <h1>Jarosław Leśniak</h1>
            <h2><i class="icon-right-open"></i>Strony internetowe</h2>
            <h2><i class="icon-right-open"></i>Sklepy internetowe</h2>
            <h2><i class="icon-right-open"></i>Aplikacje internetowe</h2>
            <h2><i class="icon-right-open"></i>Aplikacje mobilne</h2>
            <h2><i class="icon-right-open"></i>Aplikacje desktopowe</h2>
            <h2><i class="icon-right-open"></i>Projekty graficzne</h2>
        </div>
        <div class="col-md-6 last-project">
            <img src="/assets/portfolio/sifa.jpg">
            <span>Wyróżniony projekt: SIFA</span>
        </div>
    </div>
@endsection

@section('content')
    <div class="main">
        <h2 class="ignore-margin offert-header">Moja oferta</h2>
        <div class="container offert">
            <div class="row">
                <div class="col-md-3">
                    <i class="icon-globe"></i>
                    <h3>Strony internetowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    <a href="/{{ App::getLocale() }}/strony-internetowe">Więcej informacji</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-mobile"></i>
                    <h3>Aplikacje mobilne</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    <a href="/{{ App::getLocale() }}/aplikacje-mobilne-i-desktopowe">Więcej informacji</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-desktop"></i>
                    <h3>Aplikacje desktopowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    <a href="/{{ App::getLocale() }}/aplikacje-mobilne-i-desktopowe">Więcej informacji</a>
                </div>
                <div class="col-md-3">
                    <i class="icon-palette"></i>
                    <h3>Projekty graficzne</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    <a href="/{{ App::getLocale() }}/projekty-graficzne">Więcej informacji</a>
                </div>
            </div>
        </div>
        <div class="technologies">
            <h2>Technologie z którymi pracuję</h2>
            <div class="container">
                <div class="frameworks">
                    <img src="/assets/frameworks/react.png" title="React">
                    <img src="/assets/frameworks/angular.png" title="Angular">
                    <img src="/assets/frameworks/craftcms.png" title="CraftCMS">
                    <img src="/assets/frameworks/ionic.png" title="Ionic">
                    <img src="/assets/frameworks/wordpress.png" title="Wordpress">
                    <img src="/assets/frameworks/laravel.png" title="Laravel">
                    <img src="/assets/frameworks/mysql.png" title="MySQL">
                </div>
            </div>
        </div>
        <h2 class="ignore-margin margin-top">Ostatnio ukończone projekty</h2>
        <h3>Strony internetowe</h3>
        <div class="portfolio">
            <div class="item">
                <img src="/assets/portfolio/inox-railing.jpg">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Strona internetowa</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/sifa.jpg">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Strona internetowa</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/smartme.jpg">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Strona internetowa</h3>
                </div>
            </div>
        </div>
        <div class="counts">
            <h2 class="ignore-margin">Kilka liczb</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span>7</span>
                        <p>Ukończonych projektów</p>
                    </div>
                    <div class="col-md-4">
                        <span>3</span>
                        <p>Klientów</p>
                    </div>
                    <div class="col-md-4">
                        <span>20</span>
                        <p>Wypitych kubków kawy</p>
                    </div>
                </div>
            </div>
        </div>
        <h2>Skontaktuj się ze mną</h2>
        @include('layouts.contact')
    </div>
@endsection