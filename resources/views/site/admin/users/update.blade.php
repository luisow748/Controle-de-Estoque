@extends('site.admin.layout')

@section('content')

    <div class="index-item">
            <h4>Atualizar Usuário {{ $user->name }}</h4>

            <form action='/admin/usuarios/editar/{{ $user->id }}' method="post">
                @csrf
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cód.</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Administrador?</th>
                            {{-- <th scope="col">Senha</th> --}}


                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <input type="text" hidden name="id" value="{{ $user->id }}">
                            <td>
                                <input type="text" name="name" class="" value="{{ $user->name }}"
                                    placeholder="{{ $user->name }}">
                            </td>
                            <td>
                                <input type="email" name="email" class="" value="{{ $user->email }}"
                                    placeholder="{{ $user->email }}">
                            </td>
                            <td>Clique para ativar / desativar: <br>
                                @if ($user->is_admin == null ?? $user->is_admin == 0)
                                    <input type="checkbox" name="is_admin" value="1">
                                @else
                                    <input type="checkbox" name="is_admin" checked={{ $user->is_admin }} value="1" ">

                                 @endif
                            </td>
                            {{-- <td>
                                <input type="password" name="password" value="{{ $user->password }}"
                                    placeholder="{{ $user->password }}">
                            </td> --}}


                        </tr>

                    </tbody>
                </table>
                <button class="btn btn-sm mb-4 btn-primary" type="submit">Enviar</button>
            </form>

            <div>
                @include('site.structures.buttons.btn-list-users')
            </div>


    </div>

@endsection
