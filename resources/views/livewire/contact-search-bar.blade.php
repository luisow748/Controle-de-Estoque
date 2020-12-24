<div class="relative index-item">
    <h6 class='block'>Pesquisa por item</h6>
    Digite o nome ou algo sobre a descrição de um item:
    <input
        type="text"
        class="form-input"
        placeholder="Digite algo..."
        wire:model="query"
        wire:keydown.escape="reset"
        wire:keydown.tab="reset"
        wire:keydown.ArrowUp="decrementHighlight"
        wire:keydown.ArrowDown="incrementHighlight"
        wire:keydown.enter="selectContact"
    />

    <div wire:loading class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item"></div>
    </div>

    @if(!empty($query))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="reset"></div>

        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
            @if(!empty($contacts))
                @foreach($contacts as $i => $contact)
                    <a class='list-item-consulta' href='items/mostrar/{{$contact['id']}}'
                        {{-- href="{{ route('show-item', $contact['id']) }}" --}}
                        {{-- class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}" --}}
                    >{{ $contact['name'] }}</a>
                @endforeach
            @else
                <div class="list-item warning">Nenhum item encontrado.</div>
            @endif
        </div>
    @endif
</div>


