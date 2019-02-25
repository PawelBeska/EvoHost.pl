@extends('partner.master')

@section('header')
    @include('partner.layouts.global.header.header')
@stop
@section('sidebar')
    @include('partner.layouts.global.sidebar.sidebar')
@stop
@section('body')
    @include('partner.layouts.wallet.settings.settings')
@stop
