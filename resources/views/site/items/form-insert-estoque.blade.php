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

            <div class="grid-container-add-items formulario p-1">
                <div class="a1">
                    <h6>Informações do Estoque:</h6>

                    <label for="cod" class="">Quantidade Mínima:</label>
                    <input {{$mostrar}} type="number" value="{{$items->minimum_qty ?? ''}}" placeholder="{{$items->minimum_qty ?? ''}}"
                    class="form-control" name="minimum_qty" id="minimum_qty">

                    <label for="name" class="">Quantidade Atual: ( <span class='text-danger'>calculado automaticamente</span> ) </label>
                    <input disabled {{$mostrar}} type="text" value="{{$items->qty ?? ''}}" class="form-control" name="qty" id="qty">

                    @include('site.structures.forms.select_location')

                </div>

                <div class="a2">
                    <h6>Locais onde os itens estão:</h6>


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

@include('site.validation.masks')
@include('site.structures.scripts.load-data-category')
