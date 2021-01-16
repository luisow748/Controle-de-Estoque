<nav class='navbar navbar-expand-lg fixed-top navbar-dark bg-dark justify-between pl-4 pr-5'>
    <a class='navbar-brand mr-auto mr-lg-0' href='{{config('variaveis.top_menu_1l')}}'>
        {{config('variaveis.nome_logo') }}
    </a>
    <button class='navbar-toggler p-0 border-0' type='button' data-toggle='offcanvas'>
        <span class='navbar-toggler-icon'></span>
    </button>

    <div class='navbar-collapse offcanvas-collapse' id='navbarsExampleDefault'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
                <a class='nav-link' href='#'>
                    <span class='sr-only'></span>
                </a>
            </li>

            <li class='nav-item'>
                <a class='nav-link' href='{{config('variaveis.top_menu_1l')}}'>
                    {{config('variaveis.top_menu_1')}}
                </a>
            </li>

            <li class='nav-item dropdown pr-1'>
                <a class='nav-link dropdown-toggle' href='' id='dropdown01' data-toggle='dropdown'
                   aria-haspopup='true' aria-expanded='false'>
                   {{config('variaveis.top_menu_6')}}
                </a>
                <div class='dropdown-menu' aria-labelledby='dropdown01'>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_6_0l')}}'>
                        {{config('variaveis.top_menu_6_0')}}
                    </a>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_6_1l')}}'>
                        {{config('variaveis.top_menu_6_1')}}
                    </a>
                    {{-- <a class='dropdown-item' href='{!! $var['top_menu_6_2l'] !!}'> {!! $var['top_menu_6_2'] !!} </a> --}}
                </div>
            </li>

            <li class='nav-item dropdown pr-1'>
                <a class='nav-link dropdown-toggle' href='{{config('variaveis.top_menu_2l')}}'
                id='dropdown01' data-toggle='dropdown'
                   aria-haspopup='true' aria-expanded='false'>
                   {{config('variaveis.top_menu_2')}}
                </a>
                <div class='dropdown-menu' aria-labelledby='dropdown01'>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_2_1l')}}'>
                        {{config('variaveis.top_menu_2_1')}}
                    </a>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_2_2l')}}'>
                        {{config('variaveis.top_menu_2_2')}}
                    </a>
                    {{-- <a class='dropdown-item' href='{!! $var['top_menu_2_3l'] !!}'>{!! $var['top_menu_2_3'] !!}</a> --}}

                </div>
            </li>

            <li class='nav-item dropdown pr-1'>
                <a class='nav-link dropdown-toggle' href='{{config('variaveis.top_menu_4l')}}' id='dropdown01'
                   data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                   {{config('variaveis.top_menu_4')}}
                </a>

                <div class='dropdown-menu' aria-labelledby='dropdown01'>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_4_1l')}}'>
                        {{config('variaveis.top_menu_4_1')}}
                    </a>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_4_2l')}}'>
                        {{config('variaveis.top_menu_4_2')}}
                    </a>
                    {{-- <a class='dropdown-item' href='{!! $var['top_menu_4_3l'] !!}'>{!! $var['top_menu_4_3'] !!}</a> --}}
                </div>
            </li>

    {{-- Locais --}}
            <li class='nav-item dropdown pr-1'>
                <a class='nav-link dropdown-toggle' href='{{config('variaveis.top_menu_locais')}}' id='dropdown01'
                   data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                   {{config('variaveis.top_menu_locais')}}
                </a>

                <div class='dropdown-menu' aria-labelledby='dropdown01'>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_locais_0l')}}'>
                        {{config('variaveis.top_menu_locais_0')}}
                    </a>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_locais_1l')}}'>
                        {{config('variaveis.top_menu_locais_1')}}
                    </a>
                    {{-- <a class='dropdown-item' href='{!! $var['top_menu_4_3l'] !!}'>{!! $var['top_menu_4_3'] !!}</a> --}}
                </div>
            </li>

            {{-- Tags --}}
            <li class='nav-item dropdown pr-1'>
                <a class='nav-link dropdown-toggle' href='{{config('variaveis.top_menu_tagsl')}}' id='dropdown01'
                   data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                   {{config('variaveis.top_menu_tags')}}
                </a>

                <div class='dropdown-menu' aria-labelledby='dropdown01'>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_tags_0l')}}'>
                        {{config('variaveis.top_menu_tags_0')}}
                    </a>
                    <a class='dropdown-item' href='{{config('variaveis.top_menu_tags_1l')}}'>
                        {{config('variaveis.top_menu_tags_1')}}
                    </a>
                    {{-- <a class='dropdown-item' href='{!! $var['top_menu_4_3l'] !!}'>{!! $var['top_menu_4_3'] !!}</a> --}}
                </div>
            </li>

            {{-- Consultas --}}
            <li class='nav-item'>
                <a class='nav-link' href='{{config('variaveis.top_menu_3l')}}'>
                    {{config('variaveis.top_menu_3')}}
                </a>
            </li>

            {{-- Admin --}}
            <li class='nav-item'>
                <a class='nav-link' href='{{config('variaveis.top_menu_5l')}}'>
                    {{config('variaveis.top_menu_5')}}
                </a>
            </li>


        </ul>
    @if(Auth::user())
    <span class="mr-1">Olá,</span>

            {{--        Área do USUÁRIO --}}
            <div class="dropdown mr-3 pr-3">
                <button class="btn btn-sm btn-secondary dropdown-toggle border-info" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    {{Auth::user()->name}} ...
                </button>
                <div class="dropdown-menu dropdown-menu-left" >
                    <a class="dropdown-item" type="button"
                    href="{{config('variaveis.area_usuario_link')}}">
                        Usuário
                    </a>
                    <a class="dropdown-item" type="button"
                    href="{{config('variaveis.area_usuario_opcoes_link')}}">
                        Opções
                    </a>

                </div>
            </div>

            {{--        LOGOUT--}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a class="btn btn-sm btn-danger" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
            </form>

            {{--        LOGIN--}}
        @else

            <button  class='btn btn-outline-info my-2 my-sm-0' type='submit'>
                <a href="{{route('enter')}}">
                    {{config('variaveis.top_menu_login')}}
                </a>
            </button>
        @endif

    </div>

</nav>
