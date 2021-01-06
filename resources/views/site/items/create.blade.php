
@extends('layout_sidebar')

    @section('title')
        Formulário adição itens
    @endsection

@section('header')

@endsection

@section('content')


{{--    Inclui a view que mostra os erros--}}
    @include('site.validation.errors')



    <div class="index-container ">
        <h5>Novo Item:</h5>
            @include('site.items.form-insert-complete')

    </div>







@endsection

@section('scripts')


@endsection


