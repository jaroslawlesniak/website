@extends('layouts.main')

@section('hero')
    <h1>Projekty graficzne</h1>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">Oferta</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-diamond"></i>
                    <h3>Loga</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-vcard"></i>
                    <h3>Wizytówki</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-flag"></i>
                    <h3>Banery reklamowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
            </div>
        </div>
        <h2 class="projects">Ukończone projekty</h2>
        <div class="portfolio same-height">
            <div class="item">
                <img class="padding" src="/assets/portfolio/amdar.jpg">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Logo</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/inox-railing-wizytowka.jpg">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Wizytówka</h3>
                </div>
            </div>
        </div>
    </div>
@endsection