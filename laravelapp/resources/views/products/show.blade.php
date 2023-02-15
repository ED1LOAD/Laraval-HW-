@extends('layout.app')

@section('title', 'Карточка товара')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <p>Артикул: {{$product->article}}</p>
            <p>Цена: {{$product->price}}</p>
            <p>Описание: {{$product->description}}</p>
            <p>Категория: {{\App\Models\Category::whereId($product->category_id)->first()}}</p>
            @isset($product->description)
                <p>Описание: {{ $product->description }}</p>
            @endissetпш
            <img src="{{$product->link}}" alt="mdo" width="200" height="200">
            <p></p>
            <a href="{{route('products.index', $product)}}">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
@endsection
