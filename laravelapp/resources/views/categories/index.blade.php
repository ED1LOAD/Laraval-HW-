@extends('layout.app')

@section('title', 'Категории')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Родительская категория</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ isset($category->parent_category_id)
                        ? App\Models\Category::whereId($category->parent_category_id)->first()->name
                        : ""  }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
