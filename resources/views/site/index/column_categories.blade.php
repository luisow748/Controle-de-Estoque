<?php
use App\Models\Category;

?>

<div id="accordion">
    <div class="index-container">

        <h6 class='pt-2 text-center'>Pesquisa por:<br>
        Seção > Categoria</h6>

        @foreach ($section as $s)


            <div class="card">
                <div class="card-header" id="heading{{$s->id_section}}">
                    <div class="mb-0">
                        <button class="btn collapsed" data-toggle="collapse" data-target="#collapse{{$s->id_section}}" aria-expanded="false"
                            aria-controls="collapse{{$s->id_section}}">

                            <span>{{$s->id_section}} - {{$s->name}} </span>
                        </button>
                    </div>
                </div>

                <div id="collapse{{$s->id_section}}" class="collapse" aria-labelledby="heading{{$s->id_section}}" data-parent="#accordion">
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


    </div> <!-- fecha accordion -->
</div> <!--Fecha container -->

    {{-- <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                    aria-controls="collapseOne">

                    <h6> Nome da Seção </h6>
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche VHS.
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div> --}}

