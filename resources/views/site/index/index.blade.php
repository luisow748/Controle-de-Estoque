@extends('site.index.layout_index')

@section('c2')

    @if(isset($cat))
        @include('site.items.list-items-from-category')
    @else
        @include('site.index.welcome')
    @endif

@endsection





