@extends('layouts.main')

@section('hero')
    <h1>@lang('ui.contact')</h1>
@endsection

@section('content')
    <div class="main">
        @include('layouts.contact')
    </div>
@endsection