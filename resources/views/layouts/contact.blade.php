<div class="contact">
    @if(Session::has('submited'))
        <div class="form-submited">
            <div class="container">
                <i class="icon-ok-circled"></i> Wysłano wiadomość poprzez formularz kontaktowy
            </div>
        </div>
    @endif
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
                <form method="POST" action="{{ '/'.App::getLocale().'/submit-form' }}">
                    {{ csrf_field() }}
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