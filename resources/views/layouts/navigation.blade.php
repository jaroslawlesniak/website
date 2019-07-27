{{-- <div class="container"> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-left">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/') }}">@lang('ui.homepage')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('ui.web-apps')</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <p>@lang('ui.web-apps')</p>
                    <a class="dropdown-item" href="#">@lang('ui.web-apps.cards')<span title="@lang('ui.completed-projects')">3</span></a>
                    <a class="dropdown-item" href="#">@lang('ui.web-apps.shops')<span title="@lang('ui.completed-projects')">0</span></a>
                    <a class="dropdown-item" href="#">@lang('ui.web-apps.apps')<span title="@lang('ui.completed-projects')">0</span></a>
                    <p>@lang('ui.web-tech.title')</p>
                    <a class="dropdown-item" href="#">CraftCMS<span title="@lang('ui.completed-projects')">2</span></a>
                    <a class="dropdown-item" href="#">Laravel<span title="@lang('ui.completed-projects')">1</span></a>
                    <a class="dropdown-item" href="#">Angular<span title="@lang('ui.completed-projects')">0</span></a>
                    <a class="dropdown-item" href="#">Wordpress<span title="@lang('ui.completed-projects')">1</span></a>
                    {{-- <a class="dropdown-item" href="#">React<span title="@lang('ui.completed-projects')">0</span></a> --}}
                    {{-- <a class="dropdown-item" href="#">Vue<span title="@lang('ui.completed-projects')">0</span></a> --}}
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('ui.apps.title')</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <p>@lang('ui.apps.desktop')</p>
                        <a class="dropdown-item" href="#">Electron<span title="@lang('ui.completed-projects')">0</span></a>
                        <p>@lang('ui.apps.mobile')</p>
                        <a class="dropdown-item" href="#">Ionic<span title="@lang('ui.completed-projects')">0</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('ui.graphics')</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">@lang('ui.graphics.logos')<span title="@lang('ui.completed-projects')">1</span></a>
                        <a class="dropdown-item" href="#">@lang('ui.graphics.cards')<span title="@lang('ui.completed-projects')">1</span></a>
                        <a class="dropdown-item" href="#">@lang('ui.graphics.baners')<span title="@lang('ui.completed-projects')">0</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/') }}">@lang('ui.contact')</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto language">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/flags/{{ App::getLocale() }}.png">@lang('ui.current-language')</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ Url::to('/pl') }}"><img src="/assets/flags/pl.png">Polski</a>
                        <a class="dropdown-item" href="{{ Url::to('/en') }}"><img src="/assets/flags/en.png">English</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
{{-- </div> --}}