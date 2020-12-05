<div>
    <input type="text" wire:model="item" >
    <button wire:click="add">Adicionar</button>

    <p>
        <button wire:click="resetList()" > Resetar Lista</button>
    </p>

    <ul>
    @foreach($lista as $key => $nome)
        <li>
            <span> {{$nome}}</span>
            <button wire:click="delete({{ $key }})"> X </button>
        </li>
    @endforeach
    </ul>
{{--    <button wire:click="showItems()">Mostrar Items</button>--}}


    <div>
        <!-- Alpine Counter Component -->
        <div x-data>
            <h1 x-text="$wire.count"></h1>

            <button x-on:click="$wire.increment()">Increment</button>
        </div>
    </div>


    <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>

        <ul x-show="open" @click.away="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>

</div>
