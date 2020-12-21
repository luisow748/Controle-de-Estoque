<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h3>Digite os dados para registrar um novo usuário:</h3>
        </x-slot>

        <x-jet-validation-errors class="" />


<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-jet-label for="name" value="{{ __('Nome') }}" />
        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label for="email" value="{{ __('E-mail') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Senha') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-jet-label for="password_confirmation" value="{{ __('Confirme a Senha') }}" />
        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                     required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <input id="is_admin" class="mt-1 mr-2" type="checkbox" name="is_admin" value=1 />
        <label for="is_admin" value=""> {{ __('Administrador') }}</label>

    </div>


    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Já registrado?') }}
        </a>

        <x-jet-button class="ml-4">
            {{ __('Registrar') }}
        </x-jet-button>
    </div>
</form>
</x-jet-authentication-card>
</x-guest-layout>
