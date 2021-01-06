@extends('layout_sidebar')

    @section('title')
        Formulário edição itens
    @endsection

@section('header')

@endsection

@section('content')


{{--    Inclui a view que mostra os erros--}}
    @include('site.validation.errors')



    <div class="index-container p-3">
        <h5> Editar item: {{ $items->name }}</h5>

    {{-- @include('site.items.form_edit') --}}
        @include('site.items.form-insert-complete')

    </div>

@endsection
