@extends('layouts/home')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>@lang('hero.title')</h1>
                    <p>@lang('hero.description')</p>
                </div>
                <div class="col-md-6">
                    <div class="wrapper">
                        <a href="https://angular.io/" target="_blank"><img src="/assets/frameworks/angular.png" alt="" title="Angular"></a>
                        {{-- <a href="https://reactjs.org/" target="_blank"><img src="/frameworks/assets/react.png" alt="" title="React"></a>
                        <a href="https://vuejs.org/" target="_blank"><img src="/assets/frameworks/vue.png" alt="" title="Vue"></a> --}}
                        <a href="https://laravel.com/" target="_blank"><img src="/assets/frameworks/laravel.png" alt="" title="Laravel"></a>
                        <a href="https://craftcms.com/" target="_blank"><img src="/assets/frameworks/craftcms.png" alt="" title="CraftCMS"></a>
                        <a href="https://ionicframework.com/" target="_blank"><img src="/assets/frameworks/ionic.png" alt="" title="Ionic"></a>
                        <a href="https://electronjs.org/" target="_blank"><img src="/assets/frameworks/electron.png" alt="" title="Electron"></a>
                        <a href="https://pl.wordpress.org/" target="_blank"><img src="/assets/frameworks/wordpress.png" alt="" title="Wordpress"></a>
                        <a href="https://pl.wordpress.org/" target="_blank"><img src="/assets/frameworks/mysql.png" alt="" title="MySQL"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection