@extends('layouts.unique')

@section('header')
    @include('common.header.header')
@endsection

@section('content')
    @include('sections.content.content')
@endsection

@section('service')
    @include('sections.service.service')
@endsection

@section('portfolio')
    @include('sections.portfolio.portfolio')
@endsection



@section('team')
    @include('sections.team.team')
@endsection
