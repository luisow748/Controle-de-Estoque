

@extends('site.admin.layout')
@section('title')
    Registro
@endsection

@section('header')

@endsection

@section('content')

    @include('site.validation.errors')

   @include('aut.form_register')
@endsection
