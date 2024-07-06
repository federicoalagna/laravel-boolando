@extends('layouts.app')

@section('main')
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($product as $products)
            <li> {{ $product }} </li>
        @endforeach
    </ul>
@endsection
