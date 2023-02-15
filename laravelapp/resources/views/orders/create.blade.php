@extends('layout.app')

@section('title', 'Создание заказа')

@section('content')
    <div class="card">
        <div class="card-header">
            Создание заказа
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="product_id" class="form-label">ID продукта</label>
                    <input type="number" class="form-control" name="product_id" id="product_id">
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Количество</label>
                    <input type="number" class="form-control" name="amount" id="amount">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Дата заказа</label>
                    <input type="text" class="form-control" name="date" id="date">
                </div>

                <button type="submit" class="btn btn-success">Создать</button>
                <a href="{{route('orders.index')}}">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
@endsection
