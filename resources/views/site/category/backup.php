@foreach($categories as $cat)
<li class="list-group-item float-left d-flex justify-content-between align-items-center">
    Item: <a href="{{$var['caminho_absoluto']}}items/{{$cat->id}}"> {{ $cat->name }} </a>
    Descrição da Categoria: {{$cat->description}} | Código:{{$cat->id}}
    <form method="post" action="/items/{{$cat->id}}"
          onsubmit="return confirm('Tem certeza que deseja ' +
                          'remover {{addslashes($cat->name)}}?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </button>
        <button class="btn btn-dark btn-sm"> <i class="fas fa-angle-double-right"></i> </button>
    </form>

</li>
@endforeach
