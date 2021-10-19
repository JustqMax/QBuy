@extends('layouts.main')
@section('title')Главная страница @endsection

@section('main_content')
    <div class="container">
        <h1>Все товары</h1>

        <div class="row">
            @foreach ($products as $product)
                @include('cart', compact('product'))
            @endforeach

        </div>
    </div>
@endsection
