<?php
use App\Models\Category;
?>
    <nav id='sidebar'>
        <div class='custom-menu '>
            <button type='button' id='sidebarCollapse' class='btn btn-primary'>
                <i class='fa fa-bars'></i>
                <span class='sr-only'> Menu</span>
            </button>
        </div>
        <h1><a href='/items' class='logo'>Categorias </a></h1>
        <ul class='list-unstyled components mb-5'>
            <li class='active'>
                <a href='/items'><span class='fa fa-home mr-3'></span> Todas </a>
            </li>

@foreach(Category::query()->orderBy('name')->get() as $cat)

            <li class=''>
                <a href='/categorias/{{$cat->id_category}}/items'><span class='fa fa-home mr-3'></span>{{$cat->name}} </a>
            </li>

@endforeach



        </ul>

    </nav>

