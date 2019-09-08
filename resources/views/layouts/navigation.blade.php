{{-- <div class="container"> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/{{ App::getLocale() }}">
            <img src="/assets/images/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale() }}">@lang('ui.homepage')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale().'/'.__('ui.webpages-url') }}">@lang('ui.webpages')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale().'/'.__('ui.apps-url') }}">@lang('ui.apps')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale().'/'.__('ui.graphics-url') }}">@lang('ui.graphics')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale().'/cv' }}">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/{{ App::getLocale().'/'.__('ui.contact-url') }}">@lang('ui.contact')</a>
                </li>
                <li class="nav-item dropdown language">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/flags/{{ App::getLocale() }}.png">@lang('ui.current-language')</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pl"><img src="/assets/flags/pl.png">Polski</a>
                        <a class="dropdown-item" href="/en"><img src="/assets/flags/en.png">English</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
{{-- </div> --}}