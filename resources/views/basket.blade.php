@extends('layouts.main')

@section('title')Корзина@endsection

@section('main_content')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                    </li>
                    <li class="active"><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                    <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">₽<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                            <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                            <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            <p class="alert alert-warning">iPhone X 256GB в большем кол-ве не доступен для заказа</p>
            <h1>Корзина</h1>
            <p>Оформление заказа</p>
            <div class="panel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_256">
                                    <img height="56px"
                                        src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
                                    iPhone X 256GB
                                </a>
                            </td>
                            <td><span class="badge">1</span>
                                <div class="btn-group form-inline">
                                    <form action="http://internet-shop.tmweb.ru/basket/remove/2" method="POST">
                                        <button type="submit" class="btn btn-danger" href=""><span
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                        <input type="hidden" name="_token" value="2MXoxsR5gDBYnPe5CRx8jqVgJTvMzcjtyml1dbYk">
                                    </form>
                                    <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
                                        <button type="submit" class="btn btn-success" href=""><span
                                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        <input type="hidden" name="_token" value="2MXoxsR5gDBYnPe5CRx8jqVgJTvMzcjtyml1dbYk">
                                    </form>
                                </div>
                            </td>
                            <td>89990 ₽</td>
                            <td>89990 ₽</td>
                        </tr>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>89990 ₽</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить
                        заказ</a>
                </div>
            </div>
        </div>
    </div>
@endsection
