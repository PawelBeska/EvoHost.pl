@extends('master')

@section('header')
    @include('layouts.global.header.header')
@stop
@guest
@section('body')
    @include('layouts.index.guest')
@stop
@else
@section('body')
    @include('layouts.index.logged')
@stop
    @endguest
@section('footer')
    @include('layouts.global.footer.footer')
@stop
