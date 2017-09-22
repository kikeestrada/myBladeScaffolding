@extends('template.app')
@section('body_class', 'sportbook-page')
@section('title-page') Sportbook @endsection

@section('header')
    <h1>sportbook header</h1>
@endsection

@section('content')
    @include('pages.sportbook.partials.sportbook-section')
@endsection

@section('footer')
    <h1>sportbook footer</h1>
@endsection