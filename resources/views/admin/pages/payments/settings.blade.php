@extends('admin.master')

@section('header')
    @include('admin.layouts.global.header.header')
@stop
@section('sidebar')
    @include('admin.layouts.global.sidebar.sidebar')
@stop
@section('body')
    @include('admin.layouts.index.index')
@stop
