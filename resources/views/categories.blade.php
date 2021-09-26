@extends('layouts.main')

@section('title')Категории@endsection

@section('main_content')
    <div class="container">
        <div class="starter-template">
            <div class="panel">
                <a href="/categories/mobiles">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                    <h2>Мобильные телефоны</h2>
                </a>

                <p>
                    В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
                </p>
            </div>
            <div class="panel">
                <a href="/categories/portable">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/portable.jpg">
                    <h2>Портативная техника</h2>
                </a>
                <p>
                    Раздел с портативной техникой.
                </p>
            </div>
            <div class="panel">
                <a href="/categories/appliances">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/appliance.jpg">
                    <h2>Бытовая техника</h2>
                </a>
                <p>
                    Раздел с бытовой техникой
                </p>
            </div>
        </div>
    </div>
@endsection