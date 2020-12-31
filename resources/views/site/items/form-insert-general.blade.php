<div class="add-item">
    <form method="post" class="" id="cria_item" name="cria_item"
        @if(isset($items->name))
        action="/items/editar/{{$items->id}}"
        @else
        action="{{ route('store_item') }}"
        @endif
        >

        <fieldset>

            @csrf

            <div class="grid-container-add-items">
                <div class="a1">
                    <h6>Informações Básicas</h6>
                    <label for="cod" class="">Código / SKU:</label>
                    <input type="number" value="{{$items->cod ?? ''}}" placeholder="{{$items->cod ?? ''}}" class="form-control" name="cod" id="cod">

                    <label for="name" class="">Nome: ( <span class='text-danger'>*</span> ) </label>
                    <input type="text" value="{{$items->name ?? ''}}" class="form-control" name="name" id="name">

                    <label for="description" class="">Descrição:</label>
                    <input type="text" value="{{$items->description ?? ''}}" placeholder="Descrição do item" class="form-control" name="description"
                        id="description">
                    <label for="paid_price" class="">Custo: </label>
                    <input type="text" value="{{$items->paid_price ?? ''}}" placeholder="Preço pago (R$)" class="form-control" name="paid_price"
                        id="paid_price">
                    <label for="new_price" class="">Preço de venda:</label>
                    <input type="text" value="{{$items->new_price ?? ''}}" placeholder="Preço atualizado (R$)" class="form-control" name="new_price"
                        id="new_price">


                </div>

                <div class="a2">
                    <h6>Localização do Item</h6>
                    {{--Se estiver vindo um Model Categoria, não seleciona seção nem
                    categoria
                    --}}
                    @if (isset($categoria))
                        <label for="category" class="">Categoria:</label>
                        <input disabled type="text" placeholder="" class="form-control" name="category" placeholder="{{ $categoria}}" value="{{ $categoria}}">
                        <input hidden name="category_id" value="{{ $categoria_id }}">
                    @else
                        {{-- Se não estiver vindo, mostra os formulários para selecionar a
                        seção e
                        categoria--}}
                        <input hidden name="category_id" value="1"> {{-- Se não for edição, coloca 1 como valor padrão e depois atualizará --}}
                        @if(isset($section))

                            @include('site.structures.forms.select_section')

                            @include('site.structures.forms.select_category')

                        @endif

                    @endif

                    <label for="location" class="">Local de armazenagem:</label>
                    <input type="text" value="{{$items->location ?? ''}}" placeholder="" class="form-control" name="location" id="location">
                    <label for="pb" class="">Peso bruto:</label>
                    <input type="text" value="{{$items->pb ?? ''}}" placeholder="" class="form-control" name="pb" id="pb">
                    <label for="pl" class="">Peso líquido:</label>
                    <input type="text" value="{{$items->pl ?? ''}}" placeholder="" class="form-control" name="pl" id="pl">

                </div>
                <div class="a3">
                    <h6>Dimensões</h6>

                    <label for="location" class="">Comprimento:</label>
                    <input type="text" value="{{$items->depth ?? ''}}" placeholder="" class="form-control" name="depth" id="depth">
                    <label for="width" class="">Largura:</label>
                    <input type="text" value="{{$items->width ?? ''}}" placeholder="" class="form-control" name="width" id="width">
                    <label for="height" class="">Altura:</label>
                    <input type="text" value="{{$items->height ?? ''}}" placeholder="" class="form-control" name="height" id="height">

                    <label for="measure_unit" class="">Unidade de medida:</label>
                    <select placeholder="" class="form-control" name="measure_unit" id="measure_unit">
                        @if(isset($items->measure_unit))
                            <option value='{{$items->measure_unit}}' selected> {{$items->measure_unit}} </option>
                            <option value='cm'>Centímetro</option>
                            <option value='mm'>Milímetro</option>
                            <option value='m'>Metro</option>
                        @else
                            <option value='cm' selected>Centímetro</option>
                            <option value='mm'>Milímetro</option>
                            <option value='m'>Metro</option>
                        @endif
                    </select>



                </div>
                <div class="a4">
                    <h6>Diversos</h6>

                    <label for="brand" class="">Marca:</label>
                    <input type="text" value="{{$items->brand ?? ''}}" placeholder="" class="form-control" name="brand" id="brand">
                    <label for="model" class="">Modelo:</label>
                    <input type="text" value="{{$items->model ?? ''}}" placeholder="" class="form-control" name="model" id="model">
                    <label for="tax-type" class="">Tributação:</label>
                    <input type="text" value="{{$items['tax-type'] ?? ''}}" placeholder="" class="form-control" name="tax-type" id="tax-type">

                    <label for="st" class="">
                        ST:
                        @if(isset($items->st))
                            Valor atual: {{$items->st}}.
                        @endif
                    </label>
                    <select placeholder="" class="form-control" name="st" id="st">
                        <option value='cm' selected>Selecione</option>
                        <option value='0'>Opçção 1</option>
                        <option value='1'>Opção 2</option>
                    </select>
                </div>

                <div class="b1">
                    <button type="submit" class="btn btn-primary">
                        @if(isset($items->name))
                            Editar
                         @else
                             Adicionar
                         @endif
                    Item</button>
                </div>
                <div class="b2"></div>
                <div class="b3"></div>
                <div class="b4"></div>

            </div>




            <div class=" ">


            </div>




        </fieldset>
    </form>

    <article>



    </article>

</div>

<div class=" ">


</div>




<div class="mr-2 d-flex ">
    <label for="qty" class="p-2">Quantidade </label>
    <input type="number" placeholder="Quantidade" class="form-control" name="qty" value="1" id="qty">
</div>

<div class="mr-2 d-flex ">
    <label for="minimum_qty" class="p-2">Qde mín. </label>
    <input type="number" placeholder="Qde Mínima" class="form-control" name="minimum_qty" value="1" id="minimum_qty">
</div>

<div class="mr-2 d-flex ">

</div>






@include('site.structures.scripts.load-data-category')
