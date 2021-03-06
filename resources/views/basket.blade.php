@extends('layouts.main')

@section('title')Корзина@endsection

@section('main_content')

    <div class="container">
        <div class="starter-template">
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
                            <td><span class="badge">4</span>
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
                            <td>359960 ₽</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64">
                                    <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                                    iPhone X 64GB
                                </a>
                            </td>
                            <td><span class="badge">2</span>
                                <div class="btn-group form-inline">
                                    <form action="http://internet-shop.tmweb.ru/basket/remove/1" method="POST">
                                        <button type="submit" class="btn btn-danger" href=""><span
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                        <input type="hidden" name="_token" value="2MXoxsR5gDBYnPe5CRx8jqVgJTvMzcjtyml1dbYk">
                                    </form>
                                    <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                                        <button type="submit" class="btn btn-success" href=""><span
                                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        <input type="hidden" name="_token" value="2MXoxsR5gDBYnPe5CRx8jqVgJTvMzcjtyml1dbYk">
                                    </form>
                                </div>
                            </td>
                            <td>71990 ₽</td>
                            <td>143980 ₽</td>
                        </tr>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>503940 ₽</td>
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
