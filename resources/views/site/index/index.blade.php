<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
    ?>
@extends('layout')
    @section('title')

    @endsection

    @section('header')

    @endsection

    @section('content')
        @if(Auth::user())
        <h3>Bem vindo, {{ $user->name }}.</h3>
        @endif
Aqui vai a seção {{$section}}
<p>Lorem .</p>

        <livewire:list-items />


<p> PDSADOPSDLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit .</p>
    @endsection






