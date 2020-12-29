<div class="add-item">
    <form method="post" class="" id="cria_item" name="cria_item" action="{{ route('store_item') }}">
        <fieldset>
            <p>
            {{-- <h4>Digite os dados do item a ser inserido:</h4> --}}
            </p>
            @csrf

            <div class="grid-container-add-items">
                <div class="a1">
                    <h6>Informações Básicas</h6>
                    <label for="name" class="">Código / SKU:</label>
                    <input type="number" placeholder="Cód." class="form-control" name="cod" id="cod">
                    <label for="name" class="">Nome: ( <span class='text-danger'>*</span> )</label>
                    <input type="text" placeholder="Nome" class="form-control" name="name" id="name">
                    <label for="description" class="">Descrição:</label>
                    <input type="text" placeholder="Descrição do item" class="form-control" name="description"
                        id="description">
                    <label for="paid_price" class="">Custo: </label>
                    <input type="text" placeholder="Preço pago (R$)" class="form-control" name="paid_price"
                        id="paid_price">
                    <label for="new_price" class="">Preço de venda:</label>
                    <input type="text" placeholder="Preço atualizado (R$)" class="form-control" name="new_price"
                        id="new_price">
                </div>

                <div class="a2">
                    <h6>Localização do Item</h6>
                    {{--Se estiver vindo um Model Categoria, não seleciona seção nem
                    categoria
                    --}}
                    @if (isset($categoria))
                        <p> O item será incluído na categoria {{ $categoria->name }}.</p>
                        <input hidden name="category" value="{{ $categoria->name }}">
                        <input hidden name="category_id" value="{{ $categoria->id_category }}">
                    @else
                        {{-- Se não estiver vindo, mostra os formulários para selecionar a
                        seção e
                        categoria--}}

                        @include('site.structures.forms.select_section')

                        @include('site.structures.forms.select_category')
                    @endif

                    <label for="location" class="">Local de armazenagem:</label>
                    <input type="text" placeholder="" class="form-control" name="location" id="location">
                    <label for="pb" class="">Peso bruto:</label>
                    <input type="text" placeholder="" class="form-control" name="pb" id="pb">
                    <label for="pl" class="">Peso líquido:</label>
                    <input type="text" placeholder="" class="form-control" name="pl" id="pl">

                </div>
                <div class="a3">
                    <h6>Dimensões</h6>

                    <label for="location" class="">Comprimento:</label>
                    <input type="text" placeholder="" class="form-control" name="depth" id="depth">
                    <label for="width" class="">Largura:</label>
                    <input type="text" placeholder="" class="form-control" name="width" id="width">
                    <label for="height" class="">Altura:</label>
                    <input type="text" placeholder="" class="form-control" name="height" id="height">
                    <label for="measure_unit" class="">Unidade de medida:</label>
                    <select placeholder="" class="form-control" name="measure_unit" id="measure_unit">
                        <option value='cm' selected>Centímetro</option>
                        <option value='mm'>Milímetro</option>
                        <option value='m'>Metro</option>
                    </select>



                </div>
                <div class="a4">
                    <h6>Diversos</h6>

                    <label for="brand" class="">Marca:</label>
                    <input type="text" placeholder="" class="form-control" name="brand" id="brand">
                    <label for="model" class="">Modelo:</label>
                    <input type="text" placeholder="" class="form-control" name="model" id="model">
                    <label for="tax-type" class="">Tributação:</label>
                    <input type="text" placeholder="" class="form-control" name="tax-type" id="tax-type">
                    <label for="st" class="">ST:</label>
                    <select placeholder="" class="form-control" name="st" id="st">
                        <option value='cm' selected>Selecione</option>
                        <option value='0'>Não</option>
                        <option value='1'>Sim</option>
                    </select>
                </div>
                <div class="b1"> <button type="submit" class="btn btn-primary">Adicionar Item</button></div>
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







{{--Se estiver vindo um Model Categoria, não seleciona seção nem categoria
--}}
@if (isset($categoria))
    <p> O item será incluído na categoria {{ $categoria->name }}.</p>
    <input hidden name="category" value="{{ $categoria->name }}">
    <input hidden name="category_id" value="{{ $categoria->id_category }}">
@else
    {{-- Se não estiver vindo, mostra os formulários para selecionar a seção e
    categoria--}}

    @include('site.structures.forms.select_section')

    @include('site.structures.forms.select_category')
@endif




@include('site.structures.scripts.load-data-category')
