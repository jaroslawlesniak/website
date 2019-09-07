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
            <h2 class="ignore-margin">Ostatnio ukończone projekty</h2>
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
            <div class="container offert">
                <div class="row">
                    <div class="col-md-3">
                        <i class="icon-globe"></i>
                        <h3>Strony internetowe</h3>
                        <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="icon-mobile"></i>
                        <h3>Aplikacje mobilne</h3>
                        <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="icon-desktop"></i>
                        <h3>Aplikacje desktopowe</h3>
                        <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="icon-palette"></i>
                        <h3>Projekty graficzne</h3>
                        <p>Voluptate aliquip non Lorem enim esse sit eu nisi. Minim aliquip consequat ex sunt deserunt.</p>
                    </div>
                </div>
            </div>
            <div class="counts">
                <h2 class="ignore-margin">Trochę liczb</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <span>6</span>
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
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Dane teleadresowe</h3>
                            <p><i class="icon-user"></i>Jarosław Leśniak</p>
                            <p><i class="icon-phone"></i>+48 698 259 133</p>
                            <p><i class="icon-mail-alt"></i><a href="mailto:kontakt@jaroslawlesniak.pl">kontakt@jaroslawlesniak.pl</a></p>
                            <p><i class="icon-github-circled"></i><a href="https://github.com/jaroslawlesniak" target="_blank">jaroslawlesniak</a></p>
                            <p><i class="icon-linkedin-squared"></i><a href="https://www.linkedin.com/in/jaros%C5%82aw-le%C5%9Bniak-414974160/" target="_blank">Jarosław Leśniak</a></p>
                        </div>
                        <div class="col-md-6">
                            <h3>Formularz kontaktowy</h3>
                            <form>
                                <label>Imię i nazwisko<span>*</span><input type="text" name="name" required></label>
                                <label>Adres email<span>*</span><input type="email" name="email" required></label>
                                <label>Nr telefonu<input type="text" name="name" required></label>
                                <label>Tytuł wiadomości<span>*</span><input type="text" name="title" required></label>
                                <label>Treść wiadomości<span>*</span><textarea name="message"></textarea></label>
                                <button type="submit">Wyślij</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection