@extends('layouts/home')

@section('content')
    <div class="hero">
        <h1>@lang('content.hero-title')</h1>
    </div>
    <section>
        <div class="container">
            <h2>@lang('content.web')</h2>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ Config::get('app.locale') }}/smartme">
                        <div class="item">
                            <img src="./assets/portfolio-web-3.png">
                            <div class="desc">
                                <div class="info">
                                    <span>SmartME</span> • <span>CraftCMS</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ Config::get('app.locale') }}/inox-railing">
                        <div class="item">
                            <img src="./assets/portfolio-web-1.png">
                            <div class="desc">
                                <div class="info">
                                    <span>INOX-RAILING</span> • <span>PHP</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <a href="{{ Config::get('app.locale') }}/sifa">
                    <div class="col-md-6">
                        <div class="item">
                            <img src="./assets/portfolio-web-2.png">
                            <div class="desc">
                                <div class="info">
                                    <span>SIFA</span> • <span>CraftCMS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>@lang('content.desktop')</h2>
            
        </div>
    </section>
    <section>
       <div class="container">
            <h2>@lang('content.graphic')</h2>
            
        </div>
    </section>
    _contact
@endsection