<ul class="list-group">
    @foreach($items as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Item: <a href="{{$var['caminho_absoluto']}}items/{{$item->id}}"> {{ $item->name }} </a>
            | Qde: {{$item->qty}} | Descrição: {{$item->description}} | Código:{{$item->id}} | Preço: R$ {{$item->paid_price}}
            <form method="post" action="/items/{{$item->id}}"
                  onsubmit="return confirm('Tem certeza que deseja ' +
                      'remover {{addslashes($item->name)}}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i> </button>
            </form>

        </li>
    @endforeach
</ul>
