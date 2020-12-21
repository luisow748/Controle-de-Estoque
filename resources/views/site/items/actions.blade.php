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
        <form method="post" action='/items/baixar/{{$item->id}}'>
            @csrf
            <button type='submit' id="dropItem" class="btn btn-info btn-sm m-1">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
        </form>
</div>
