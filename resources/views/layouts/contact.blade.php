<div class="contact">
    @if(Session::has('submited'))
        <div class="form-submited">
            <div class="container">
                <i class="icon-ok-circled"></i> @lang('content.form-submit-msg')
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>@lang('content.contact-info')</h3>
                <p><i class="icon-user"></i>Jarosław Leśniak</p>
                <p><i class="icon-phone"></i>+48 698 259 133</p>
                <p><i class="icon-mail-alt"></i><a href="mailto:kontakt@jaroslawlesniak.pl">kontakt@jaroslawlesniak.pl</a></p>
                <p><i class="icon-github-circled"></i><a href="https://github.com/jaroslawlesniak" target="_blank">jaroslawlesniak</a></p>
                <p><i class="icon-linkedin-squared"></i><a href="https://www.linkedin.com/in/jaros%C5%82aw-le%C5%9Bniak-414974160/" target="_blank">Jarosław Leśniak</a></p>
            </div>
            <div class="col-md-6">
                <h3>@lang('content.contact-form')</h3>
                <form method="POST" action="{{ '/'.App::getLocale().'/submit-form' }}">
                    {{ csrf_field() }}
                    <label>@lang('content.name')<span>*</span><input type="text" name="name" required></label>
                    <label>@lang('content.email')<span>*</span><input type="email" name="email" required></label>
                    <label>@lang('content.tel')<input type="text" name="name" required></label>
                    <label>@lang('content.title')<span>*</span><input type="text" name="title" required></label>
                    <label>@lang('content.content')<span>*</span><textarea name="message"></textarea></label>
                    <button type="submit">@lang('content.submit')</button>
                </form>
            </div>
        </div>
    </div>
</div>