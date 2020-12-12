<?php
use App\Models\Item;
?>
<div>
    <h5> {{$category->name}}</h5>
    <table class="table table-sm table-bordered bg-white rounded shadow table-hover text-center">
        <thead class="thead-dark">
        <tr>
            <th style="width: 30px" scope="col">Cód.</th>
            <th style="width: 200px" scope="col">Nome</th>
            <th style="width: 80px" scope="col">Qde/Mín. </th>

            {{-- <th style="width: 150px" scope="col">Categoria</th> --}}

            <th style="width: 180px" scope="col" class="justify-center">Ações</th>
        </tr>
        </thead>
        <tbody>

    @foreach(Item::where('category_id', $category->id_category)
    ->orderBy('id')->get() as $item)
        <tr>
            <th scope="row"><button class="btn btn-sm btn-secondary rounded">
                    <a  style="color: whitesmoke" href="/items/mostrar/{{$item->id}}"> {{$item->id}} </a> </button> </th>
            <td class="text-left"> <a  style="color: #2C3033" href="/items/mostrar/{{$item->id}}">
                    {{$item->name}} </a></td>
            <td>{{$item->qty}}/{{$item->minimum_qty}}</td>
            {{-- <td>{{$item->category}}</td> --}}

            <td>
                <div class="form-row justify-content-center">
                    <form method="post" action="/items/{{$item->id}}"
                          onsubmit="return confirm('Tem certeza que deseja ' +
                              'remover {{addslashes($item->name)}}?')">
                        @csrf
                        @method('DELETE')
                        <button id="lixeira" class="btn btn-danger btn-sm m-1"> <i class="far fa-trash-alt "></i>  </button>
                    </form>
                        <a href="/items/mostrar/{{$item->id}}">
                            <button id="acessItem" class="btn btn-dark btn-sm m-1">
                                <i class="fas fa-angle-double-right "></i>
                            </button>
                        </a>
                        <a href="/items/editar/{{$item->id}}">
                            <button id="editItem" class="btn btn-success btn-sm m-1">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                            </button>
                        </a>
                    <button id="dropItem" class="btn btn-info btn-sm m-1">
                        <i class="fas fa-address-book"></i>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
        </tbody>

    </table>
</div>
