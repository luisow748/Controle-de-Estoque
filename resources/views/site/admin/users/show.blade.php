@extends('site.admin.layout')

@section('content')

<div class='container'>

    <div class="item">

        <h4>Dados do usuário</h4>
        <table class="table table-striped  table-hover table-bordered tabela-usuarios ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Administrador?</th>
                    <th scope="col">Cadastro</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <a href='/admin/usuarios/{{ $u->id }}'>
                        <i class="fas fa-address-card"></i>
                        {{ $u->id }}
                        </a>
                    </th>

                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>
                        @if($u->is_admin==1)
                        Sim
                        @else
                        Não
                        @endif
                    </td>
                    <td>
                        {{$u->created_at}}
                    </td>
                </tr>
            </tbody>
        </table>

                <div>
                   @include('site.structures.buttons.btn-list-users')
                </div>
    </div>
</div>
            @endsection
