@extends('layouts.main')

@section('content')
    <div class="hero">
        <div class="container">
            <h1>Strony internetowe</h1>
        </div>
        <div class="background"></div>
    </div>
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">Oferta</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-globe"></i>
                    <h3>Strony wizytówki</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-basket"></i>
                    <h3>Sklepy internetowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-cubes"></i>
                    <h3>Aplikacje internetowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
            </div>
        </div>
        <h2>Ukończone projekty</h2>
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
    </div>
@endsection