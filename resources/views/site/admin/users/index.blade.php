@extends('site.admin.layout')

@section('content')

    <div class='container'>

        <div class="item">

            <h3>Listagem de usuários</h3>
            <table class="table table-striped  table-hover table-bordered tabela-usuarios">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Administrador?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)

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
                        </tr>


                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
