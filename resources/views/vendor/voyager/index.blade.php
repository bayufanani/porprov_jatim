@extends('voyager::master')

@section('content')
    <div class="page-content" style="padding: 0 1rem">
        <h3>Selamat datang, {{ Auth::user()->name }}</h3>
        <p>{{ setting('site.title') }}</p>
    </div>
@stop
