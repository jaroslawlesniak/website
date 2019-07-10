@extends('layouts/home')

@section('content')
    <div class="hero">
        <h1>@lang('content.hero-title')</h1>
    </div>
    <section>
        <div class="container">
            <h2>@lang('content.web')</h2>
            <p>Eu exercitation aliqua cupidatat dolore. Mollit ea est pariatur nisi tempor occaecat. Do magna mollit in nulla laboris dolor tempor amet.</p>        
            <div class="row">
                <div class="col-md-4 portfolio">
                    <img src="assets/html.png" alt="">
                    <div class="caption">HTML, CSS, JS</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/html">@lang('content.display-projects')</a>
                </div>
                <div class="col-md-4 portfolio">
                    <img src="assets/craftcms.png" alt="">
                    <div class="caption">CraftCMS</div>
                    <div class="projects">
                        <span>2</span>
                        <p>{{ trans_choice('content.projects', 2) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/craftcms">@lang('content.display-projects')</a>
                </div>
                <div class="col-md-4 portfolio">
                    <img src="assets/laravel.png" alt="">
                    <div class="caption">Laravel</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/laravel">@lang('content.display-projects')</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>@lang('content.desktop')</h2>
            <p>Labore quis laborum adipisicing anim dolore commodo aute commodo magna ullamco. Enim est Lorem eu Lorem mollit reprehenderit elit. Irure sunt id fugiat magna sit veniam sunt esse culpa culpa ea. Exercitation sit pariatur mollit minim dolore amet adipisicing quis tempor reprehenderit consectetur Lorem aliqua. Ut cupidatat aliqua do minim et incididunt. Incididunt sint aute sit fugiat. Cillum consectetur Lorem reprehenderit amet sint qui.</p> 
            <div class="row">
                <div class="col-md-4 portfolio">
                    <img src="assets/electron.png" alt="">
                    <div class="caption">Electron</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/electron">@lang('content.display-projects')</a>
                </div>
                <div class="col-md-4 portfolio">
                    <img src="assets/ionic.jpg" alt="">
                    <div class="caption">Ionic</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/ionic">@lang('content.display-projects')</a>
                </div>      
            </div>
        </div>
    </section>
    <section>
       <div class="container">
            <h2>@lang('content.graphic')</h2>
            <p>Consectetur proident magna aliquip voluptate. Dolor ad do quis labore amet enim culpa mollit quis incididunt magna. Enim et et ipsum sit amet mollit do ad occaecat cupidatat irure.</p>
            <div class="row">
                <div class="col-md-4 portfolio">
                    <img src="assets/electron.png" alt="">
                    <div class="caption">Wizytówki</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/electron">@lang('content.display-projects')</a>
                </div>
                <div class="col-md-4 portfolio">
                    <img src="assets/ionic.jpg" alt="">
                    <div class="caption">Banery</div>
                    <div class="projects">
                        <span>1</span>
                        <p>{{ trans_choice('content.projects', 1) }}</p>
                    </div>
                    <a href="/{{ Config::get('app.locale') }}/ionic">@lang('content.display-projects')</a>
                </div>      
            </div>
        </div>
    </section>
    _contact
@endsection