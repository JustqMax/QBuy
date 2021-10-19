@extends('layouts.main')

@section('title')Категория {{ $category->code }}@endsection

@section('main_content')
    <div class="container">
        <div class="starter-template">
            <h1>
                {{ $category->name }} {{ $category->products->count() }} 
            </h1>
            <p>
                {{ $category->description }}
            </p>
            <div class="row">
                @foreach ($category->products as $product)
                    @include('cart', compact('product'))
                @endforeach
            </div>
        </div>
    </div>
@endsection
