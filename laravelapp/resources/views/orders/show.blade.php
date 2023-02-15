@extends('layout.app')

@section('title', 'Информация о заказе')

@section('content')
    <div class="card">
        <div class="card-header">
            Заказ №{{ $order->id }}
        </div>
        <div class="card-body">
            <p>Дата заказа: {{$order->date}}</p>
            <p>Заказанный товар: {{\App\Models\Product::whereId($order->product_id)->first()->name}}</p>
            <p>Количество: {{ $order->amount }}</p>

            <a href="{{route('orders.index', $order)}}">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
@endsection
