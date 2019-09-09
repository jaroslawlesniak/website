@extends('layouts.main')

@section('title', __('project.'.$project.'.title').' | Jarosław Leśniak')

@section('hero')
    <h1>@lang('project.'.$project.'.title')</h1>
@endsection

@section('content')
    <div class="main portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>@lang('project.'.$project.'.desc')</p>
                    @if(__('project.'.$project.'.url') != '')
                        <a class="portfolio-btn" href="@lang('project.'.$project.'.url')" target="_blank">@lang('content.view-online')</a>
                    @endif
                    @if(__('project.'.$project.'.download') != '')
                        <a class="portfolio-btn" href="@lang('project.'.$project.'.download')">@lang('content.download')</a>
                    @endif
                </div>
                <div class="col-md-6">
                    <img src="/assets/portfolio/{{ $project }}.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection