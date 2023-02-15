@extends('layout.app')

@section('title', 'Заказы')

@section('content')
    <a href="{{route('orders.create')}}">
        <button class="btn btn-success">Сделать заказ</button>
    </a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Номер заказа</th>
            <th scope="col">Дата заказа</th>
            <th scope="col">Название товара</th>
            <th scope="col">Количество</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ \App\Models\Product::whereId($order->product_id)->first()->name }}</td>
                <td>{{ $order->amount  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
