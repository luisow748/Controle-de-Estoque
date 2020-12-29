<?php
use App\Models\Category;
use App\Models\Section;
$i = 0;
 ?>
<nav id='sidebar'>

    <div id="accordion">

        <div class='custom-menu '>
            <button type='button' id='sidebarCollapse' class='btn btn-primary'>
                <i class='fa fa-bars'></i>
                <span class='sr-only'> Menu</span>
            </button>
        </div>
        <h1><a href='/items' class='logo'>Seções </a></h1>
        <p class='p-2'>Escolha uma seção para abrir as categorias:</p>

        @foreach (Section::query()->get() as $s)


            <div class="card">
                <div class="card-header" id="heading{{$s->id_section}}">
                    <div class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapse{{$s->id_section}}" aria-expanded="false"
                            aria-controls="collapse{{$s->id_section}}">

                            <span>{{$s->id_section}} - {{$s->name}} </span>
                        </button>
                    </div>
                </div>

                <div id="collapse{{$s->id_section}}" class="collapse"
                    aria-labelledby="heading{{$s->id_section}}" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table table-hover table-sm bordered">
                            <thead class=''>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody>

                        @foreach (Category::where('section_id', $s->id_section)
                        ->get(); as $c)

                            <tr>
                                <th scope="row">{{$c->id_category}}-</th>
                                <td>
                                    <a href='/index/categoria/{{$c->id_category}}'>
                                        {{$c->name}}
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>



        @endforeach





        {{-- <ul class='list-unstyled components mb-5'>
            <li class='active'>
                <a href='/items'><span class='fa fa-home mr-3'></span> Todas </a>
            </li>

            @foreach (Category::query()
                ->orderBy('id_category')
                ->get()
                as $cat)

                <li class=''>
                    <a href='/categorias/{{ $cat->id_category }}/items'><span class='fas fa-angle-right mr-3'></span>
                        {{ $cat->id_category }} - {{ $cat->name }} </a>
                </li>

            @endforeach



        </ul> --}}

    </div>

</nav>
