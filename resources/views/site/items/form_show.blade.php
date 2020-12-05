

<h5 class="text-justify left"> Item selecionado:  {{ $items->name }}.</h5>
<div class="table-responsive">
    <table class="table table-sm table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th style="width: 30px" scope="col">Cód.</th>
            <th style="width: 200px" scope="col">Nome</th>
            <th style="width: 250px" scope="col">Descrição</th>
            <th style="width: 150px" scope="col">Categoria</th>
            <th style="width: 80px" scope="col">Qde Atual</th>
            <th style="width: 80px" scope="col">Qde Mínima</th>
            <th style="width: 120px" scope="col">Custo</th>
            <th style="width: 120px" scope="col">Preço de Venda</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $items->id }}</th>
            <td>{{ $items->name }}</td>
            <td>{{ $items->description }}</td>
            <td>{{ $items->category }}</td>
            <td>{{ $items->qty }}</td>
            <td>{{ $items->minimum_qty }}</td>
            <td>{{ $items->paid_price }}</td>
            <td>{{ $items->new_price }}</td>

        </tr>

        </tbody>
    </table>

    {{--        <table class="table table-bordered">  <tbody>--}}
    {{--            <td class="table-info"></td></tbody></table>--}}


</div>
