@extends('layout')

    @section('title')
        Formulário adição itens
    @endsection

@section('header')
    Adicionar Item
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="description" class="">Descrição</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="form-group">
            <label for="photo_name" class="">Nome da foto</label>
            <input type="text" class="form-control" name="photo_name" id="photo_name">
        </div>
        <div class="form-group">
            <label for="qty" class="">Quantidade</label>
            <input type="text" class="form-control" name="qty" id="qty">
        </div>

        <div class="form-group">
            <label for="minimum_qty" class="">Quantidade Mínima</label>
            <input type="text" class="form-control" name="minimum_qty" id="minimum_qty">
        </div>
        <div class="form-group">
            <label for="paid_price" class="">Preço pago</label>
            <input type="text" class="form-control" name="paid_price" id="paid_price">
        </div>
        <div class="form-group">
            <label for="new_price" class="">Preço Novo</label>
            <input type="text" class="form-control" name="new_price" id="new_price">
        </div>

        <div class="form-group">
            <label for="category" class="">Categoria</label>
            <input type="text" class="form-control" name="category" id="category">
        </div>

        <div class="form-group">
            <label for="subcategory" class="">Subcategoria</label>
            <input type="text" class="form-control" name="subcategory" id="subcategory">
        </div>

        <div class="form-group">
            <label for="section" class="">Seção</label>
            <input type="text" class="form-control" name="section" id="section">
        </div>

        <div class="form-group">
            <label for="subsection" class="">Subseção</label>
            <input type="text" class="form-control" name="subsection" id="subsection">
        </div>


        <button class="btn btn-primary">Adicionar Item</button>
    </form>
@endsection
