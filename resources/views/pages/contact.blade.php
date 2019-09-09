@extends('layouts.main')

@section('title', __('title.contact'))

@section('hero')
    <h1>@lang('ui.contact')</h1>
@endsection

@section('content')
    <div class="main">
        @include('layouts.contact')
    </div>
@endsection