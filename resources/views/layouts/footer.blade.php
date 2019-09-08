<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="/assets/images/logo.png">
        </div>
        <div class="col-md-4">
            <h3>@lang('content.navigation')</h3>
            <ul>
                <li><a href="/{{ App::getLocale() }}">@lang('ui.homepage')</a></li>
                <li><a href="/{{ App::getLocale().'/'.__('ui.webpages-url') }}">@lang('ui.webpages')</a></li>
                <li><a href="/{{ App::getLocale().'/'.__('ui.apps-url') }}">@lang('hero.mobile-apps')</a></li>
                <li><a href="/{{ App::getLocale().'/'.__('ui.apps-url') }}">@lang('hero.desktop-apps')</a></li>
                <li><a href="/{{ App::getLocale().'/'.__('ui.graphics-url') }}">@lang('ui.graphics')</a></li>
                <li><a href="/{{ App::getLocale().'/cv' }}">CV</a></li>
                <li><a href="/{{ App::getLocale().'/'.__('ui.contact-url') }}">@lang('ui.contact')</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>@lang('content.contact-data')</h3>
            <p><i class="icon-user"></i>Jarosław Leśniak</p>
            <p><i class="icon-phone"></i>+48 698 259 133</p>
            <p><i class="icon-mail-alt"></i><a href="mailto:kontakt@jaroslawlesniak.pl">kontakt@jaroslawlesniak.pl</a></p>
            <p><i class="icon-github-circled"></i><a href="https://github.com/jaroslawlesniak" target="_blank">jaroslawlesniak</a></p>
            <p><i class="icon-linkedin-squared"></i><a href="https://www.linkedin.com/in/jaros%C5%82aw-le%C5%9Bniak-414974160/" target="_blank">Jarosław Leśniak</a></p>
        </div>
    </div>
</div>