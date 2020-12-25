<div class="form-row justify-content-center">
    <form method="post" action="/admin/usuarios/{{$u->id}}"
          onsubmit="return confirm('Tem certeza que deseja ' +
              'remover o usuário {{addslashes($u->name)}}?')">
        @csrf
        @method('DELETE')
        <button id="dropUser" class="btn btn-danger btn-sm m-1"> <i class="far fa-trash-alt "></i>  </button>
    </form>
        <a href="/admin/usuarios/{{$u->id}}">
            <button id="acessUser" class="btn btn-dark btn-sm m-1">
                <i class="fas fa-angle-double-right "></i>
            </button>
        </a>
        <a href="/admin/usuarios/editar/{{$u->id}}">
            <button id="editUser" class="btn btn-success btn-sm m-1">
                <i class="fas fa-arrow-alt-circle-right"></i>
            </button>
        </a>
        <form method="post" action='/items/baixar/{{$u->id}}'>
            @csrf
            <button type='submit' id="dropItem" class="btn btn-info btn-sm m-1">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
        </form>
</div>
