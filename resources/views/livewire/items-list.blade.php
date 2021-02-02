<?php
use App\Models\Item;
?>
<div>

    {{-- <h5> {{$category->name}} <a href="/items/criar/{{$category->id_category}}" class="ml-2 info"><i class='far fa-plus-square'></i> </a></h5> --}}
    <table class="table table-sm table-bordered bg-white rounded shadow table-hover text-center">
        <thead class="thead-dark">
        <tr>

            <th style="width: 30px" scope="col">Cód.</th>
            <th style="width: 30px" scope="col">Criado em</th>
            <th style="width: 200px" scope="col">Nome</th>
            <th style="width: 80px" scope="col">Qde/Mín. </th>

            <th style="width: 130px" scope="col">Categoria</th>

            <th style="width: 180px" scope="col" class="justify-center">Ações</th>
        </tr>
        </thead>
        <tbody>

    @foreach(Item::query()->orderByDesc('created_at')->get() as $item)
        <tr>
            <th scope="row">
                <button class="btn btn-sm btn-secondary rounded">
                    <a  style="color: whitesmoke" href="/items/mostrar/{{$item->id}}"> {{$item->id}} </a>
                </button>
            </th>
            <td>{{$item->created_at}}</td>
            <td class="text-left"> <a  style="color: #2C3033" href="/items/mostrar/{{$item->id}}">
                    {{$item->name}} </a></td>
            <td>{{$item->qty}}/{{$item->minimum_qty}}</td>
            <td>{{$item->category}}</td>

            <td>
                @include('site.items.actions')
            </td>
        </tr>
    @endforeach
        </tbody>

    </table>
</div>
