@extends('Layouts.master')

@section("titolo")
Homepage
@endsection

@section('content')
    @include('partials.comicsGrid')
    @include('partials.shopBanner')
@endsection