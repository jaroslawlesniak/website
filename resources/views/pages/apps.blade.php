@extends('layouts.main')

@section('hero')
    <h1>Aplikacje mobilne i desktopowe</h1>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <h2 class="ignore-margin offert-header">Oferta</h2>
            <div class="row offert">
                <div class="col-md-4">
                    <i class="icon-globe"></i>
                    <h3>Aplikacje progresywne</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-mobile"></i>
                    <h3>Aplikacje mobilne</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon-desktop"></i>
                    <h3>Aplikacje desktopowe</h3>
                    <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                </div>
            </div>
        </div>
        <h2 class="ignore-margin margin-top">Ukończone projekty</h2>
        <h3>Aplikacje mobilne i progesywne</h3>
        <div class="portfolio">
            <div class="item">
                <img src="/assets/portfolio/schedule.png">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Aplikacja progresywna</h3>
                </div>
            </div>
            <div class="item">
                <img src="/assets/portfolio/league-parser.png">
                <div class="opacity">
                    <i class="icon-link"></i>
                    <h3>Aplikacja mobilna</h3>
                </div>
            </div>
        </div>
        <h3>Aplikacje desktopowe</h3>
    </div>
@endsection