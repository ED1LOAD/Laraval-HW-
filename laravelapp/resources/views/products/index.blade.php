@extends('layout.app')

@section('title', 'Карточка товара')

@section('content')
    <a href="{{route('products.create')}}">
        <button class="btn btn-success">Создать товар</button>
    </a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Артикул</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
            <th scope="col">Название категории</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->article }}</td>
                <td>{{ $product->description  }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ App\Models\Category::whereId($product->category_id)->first()}}</td>
                <td>
                    <a href="{{route('products.show', $product)}}">
                        <button class="btn btn-primary btn-sm">Просмотреть</button>
                    </a>

                    <a href="{{route('products.edit', $product)}}">
                        <button class="btn btn-info btn-sm">Изменить</button>
                    </a>
                    <form method="POST" action="{{route('products.destroy', $product)}}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
