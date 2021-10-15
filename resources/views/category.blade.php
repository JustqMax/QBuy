@extends('layouts.main')

@section('title')Категория {{$category->code}}@endsection

@section('main_content')
    <div class="container">
    <div class="starter-template">
        <h1>
            {{$category->name}}
        </h1>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
                @include('cart', ['category' => $category])
        </div>
    </div>
    </div>
@endsection
