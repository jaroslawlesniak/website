@extends('layouts/main')

@section('content')
    <div class="hero">
        <div class="container">
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
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
        <div class="background">
            
        </div>
    </div>
    {{-- <div class="container"> --}}
        <div class="main">
            <h2>Ostatnio ukończone projekty</h2>
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
            <div class="technologies">
                <h2>Technologie z którymi pracuję</h2>
                <div class="container">
                    <div class="frameworks">
                        <img src="/assets/frameworks/react.png" title="React">
                        <img src="/assets/frameworks/angular.png" title="Angular">
                        <img src="/assets/frameworks/craftcms.png" title="CraftCMS">
                        <img src="/assets/frameworks/electron.png" title="Electron">
                        <img src="/assets/frameworks/ionic.png" title="Ionic">
                        <img src="/assets/frameworks/wordpress.png" title="Wordpress">
                        <img src="/assets/frameworks/laravel.png" title="Laravel">
                        <img src="/assets/frameworks/mysql.png" title="MySQL">
                    </div>
                </div>
            </div>
            <h2>Kompletna oferta</h2>
            <h2>Trochę liczb</h2>
            <h2>Skontaktuj się ze mną</h2>
        </div>
    {{-- </div> --}}
@endsection