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
                    <h6>Informações do Estoque</h6>

                    <label for="cod" class="">Quantidade Mínima:</label>
                    <input {{$mostrar}} type="number" value="{{$items->minimum_qty ?? ''}}" placeholder="{{$items->minimum_qty ?? ''}}"
                    class="form-control" name="minimum_qty" id="minimum_qty">

                    <label for="name" class="">Quantidade Atual: ( <span class='text-danger'>*</span> ) </label>
                    <input disabled {{$mostrar}} type="text" value="{{$items->qty ?? ''}}" class="form-control" name="qty" id="qty">

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

                </div>
                <div class="a3">

                </div>
                <div class="a4">

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
