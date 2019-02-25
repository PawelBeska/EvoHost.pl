@extends('master')

@section('header')
    @include('layouts.global.header.header')
@stop
@section('body')
    @include('layouts.user.movies.movies')
@stop
@section('footer')
    @include('layouts.global.footer.footer')
@stop
