@extends('site.admin.layout')

@section('content')

<div class='index-container'>

    <div class="index-item" >
        <h3>Listagem de usuários</h3>
        <ul>
        @foreach ($users as $u)

         <li>   <a href=''>{{$u->name}} - {{$u->email}}</a></li>
        @endforeach
    </ul>
    </div>
</div>

@endsection
