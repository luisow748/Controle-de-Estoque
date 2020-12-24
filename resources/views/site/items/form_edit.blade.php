
<div class="index-container">
    <h3 class="text-justify left"> Edite o Item: {{ $items->name }}.</h3>
    <div class="table-responsive index-item">

        <form action='/items/editar/{{ $items->id }}' method="post">
            @csrf
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cód.</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Qde Atual</th>
                        <th scope="col">Qde Mínima</th>
                        <th scope="col">Custo</th>
                        <th scope="col">Preço de Venda</th>

                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <th scope="row">{{ $items->id }}</th>
                        <input type="text" hidden name="id" value="{{ $items->id }}">
                        <td><input type="text" name="name" class="" value="{{ $items->name }}"
                                placeholder="{{ $items->name }}"></td>
                        <td><input type="text" name="description" value="{{ $items->description }}"
                                placeholder="{{ $items->description }}"></td>
                        <td>{{ $items->category }}</td>
                        <td><input type="text" name="qty" value="{{ $items->qty }}" placeholder="{{ $items->qty }}">
                        </td>
                        <td><input type="text" name="minimum_qty" value="{{ $items->minimum_qty }}"
                                placeholder="{{ $items->minimum_qty }}"></td>
                        <td><input type="text" name="paid_price" value="{{ $items->paid_price }}"
                                placeholder="{{ $items->paid_price }}"></td>
                        <td><input type="text" name="new_price" value="{{ $items->new_price }}"
                                placeholder="{{ $items->new_price }}"></td>

                    </tr>

                </tbody>
            </table>
            <button class=" btn btn-sm mb-4 btn-primary" type="submit">Enviar</button>
        </form>


        {{-- <table class="table table-bordered">
            <tbody>--}}
                {{-- <td class="table-info"></td>
            </tbody>
        </table>--}}


    </div>
</div>
