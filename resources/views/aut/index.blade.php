@extends('layout')

@section('title')
    Login de usuário
@endsection

@section('header')
@endsection

@section('content')
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
@include('site.validation.errors')

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <table class="table" style="width: 500px">
            <thead class="thead-light">
            <tr>
                <th scope="col">Digite os dados para fazer <strong>Login: </strong></th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th scope="row">

                    <div>
                        <label for="email" >E-mail</label>
                        <input id="email" class="" type="email" name="email" value="" />
                    </div>
                </th>
            </tr>

            <tr>
                <th scope="row">

                    <div class="mt-4">
                        <label for="password" value="Senha"> Senha</label>
                        <input id="password" class="mt-1" type="password" name="password"  />
                        <br>


                    </div>

                </th>
            </tr>

            <tr>
                <th scope="row">
                    <label for="remember_me" class=" ml-2 flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar meu login') }}</span>
                    </label>
                </th>
            </tr>

            <tr>
                <th scope="row">

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        @endif

                        <button class="btn-info ml-4">
                            Entrar
                        </button>
                    </div>
                </th>
            </tr>
            </tbody>
        </table>

    </form>
@endsection

