
<?php
if(isset($mostrar)){
    $mostrar = "disabled"; //se for para visualizar item, os inputs ficarão 'disabled'
}else{
    $mostrar = ""; //se não, os inputs ficarão disponíveis
}
?>

<div class="add-item">
    <form method="post" class="" id="cria_item" name="cria_item"
        @if(isset($items->name))
        action="/items/editar/{{$items->id}}" {{--Se há dados vindo, trata-se de uma edição, (destino: gravar dados) --}}
        @else
        action="{{ route('store_item') }}" {{-- Se não, o destino é gravar um item novo--}}
        @endif
        >

        <fieldset>

            @csrf

            <div class="grid-container-add-items">
                <div class="a1">
                    <h6>Informações Básicas</h6>

                    <label for="cod" class="">Código / SKU:</label>
                    <input {{$mostrar}} type="number" value="{{$items->cod ?? ''}}" placeholder="{{$items->cod ?? ''}}" class="form-control" name="cod" id="cod">

                    <label for="name" class="">Nome: ( <span class='text-danger'>*</span> ) </label>
                    <input {{$mostrar}} type="text" value="{{$items->name ?? ''}}" class="form-control" name="name" id="name">

                    <label for="description" class="">Descrição:</label>
                    <input {{$mostrar}} type="text" value="{{$items->description ?? ''}}" placeholder="Descrição do item" class="form-control" name="description"
                        id="description">
                    <label for="paid_price" class="">Custo: </label>
                    <input {{$mostrar}} type="text" value="{{$items->paid_price ?? ''}}" placeholder="Preço pago (R$)"
                    class="form-control moneyClass" name="paid_price"
                        id="paid_price">
                    <label for="new_price" class="">Preço de venda:</label>
                    <input {{$mostrar}} type="text" value="{{$items->new_price ?? ''}}" placeholder="Preço atualizado (R$)"
                    class="form-control moneyClass" name="new_price"
                        id="new_price">


                </div>

                <div class="a2">
                    <h6>Localização do Item</h6>
                    {{--Se estiver vindo um Model Categoria, não seleciona seção nem
                    categoria
                    --}}
                    @if (isset($categoria))
                        <label for="category" class="">Categoria:</label>
                        <input disabled type="text" class="form-control" name="category" placeholder="{{ $categoria ?? $categoria->name}}" value="{{ $categoria ?? $categoria->name}}">
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
                    <input {{$mostrar}} type="text" value="{{$items->location ?? ''}}" placeholder="" class="form-control" name="location" id="location">
                    <label for="pb" class="">Peso bruto:</label>
                    <input {{$mostrar}} type="text" value="{{$items->pb ?? ''}}" placeholder="" class="form-control" name="pb" id="pb">
                    <label for="pl" class="">Peso líquido:</label>
                    <input {{$mostrar}} type="text" value="{{$items->pl ?? ''}}" placeholder="" class="form-control" name="pl" id="pl">

                </div>
                <div class="a3">
                    <h6>Dimensões</h6>

                    <label for="location" class="">Comprimento:</label>
                    <input {{$mostrar}} type="text" value="{{$items->depth ?? ''}}" placeholder="" class="form-control" name="depth" id="depth">
                    <label for="width" class="">Largura:</label>
                    <input {{$mostrar}} type="text" value="{{$items->width ?? ''}}" placeholder="" class="form-control" name="width" id="width">
                    <label for="height" class="">Altura:</label>
                    <input {{$mostrar}} type="text" value="{{$items->height ?? ''}}" placeholder="" class="form-control" name="height" id="height">

                    <label for="measure_unit" class="">Unidade de medida:</label>
                    <select {{$mostrar}} placeholder="" class="form-control" name="measure_unit" id="measure_unit">
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
                    <input {{$mostrar}} type="text" value="{{$items->brand ?? ''}}" placeholder="" class="form-control" name="brand" id="brand">
                    <label for="model" class="">Modelo:</label>
                    <input {{$mostrar}} type="text" value="{{$items->model ?? ''}}" placeholder="" class="form-control" name="model" id="model">
                    <label for="tax_type" class="">Tributação:</label>
                    <input {{$mostrar}} type="text" value="{{$items->tax_type ?? ''}}" placeholder="" class="form-control" name="tax_type" id="tax_type">

                    <label for="st" class="">
                        ST:
                        @if(isset($items->st))
                            Valor atual: {{$items->st}}.
                        @endif
                    </label>
                    <select {{$mostrar}} placeholder="" class="form-control" name="st" id="st">
                        <option value='cm' selected>Selecione</option>
                        <option value='0'>Opçção 1</option>
                        <option value='1'>Opção 2</option>
                    </select>
                </div>

                <div class="b1">

                        @if(isset($items->name) && ($mostrar == ''))
                        <button type="submit" class="btn btn-primary">
                             Editar Item
                            </button>
                        @elseif(($mostrar =='disabled'))
                        <div class='alert alert-primary'>
                            Modo de visualização. Selecione a aba acima (Editar item), caso queira realizar alguma alteração.
                        </div>
                        @else
                        <button type="submit" class="btn btn-primary">
                        Adicionar Item
                        </button>
                        @endif
                    <livewire:salvarecontinuar />
                </div>
                <div class="b2"></div>
                <div class="b3"></div>
                <div class="b4"></div>

            </div>

        </fieldset>
    </form>

</div>

@include('site.structures.scripts.masks')
@include('site.structures.scripts.load-data-category')
