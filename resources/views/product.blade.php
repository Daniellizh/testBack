@extends('layouts.app')

@section('content')

    <h2>{{ $product }}</h2>
    <form action="{{ route('basket-add', $product) }}" method="POST">
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"
                role="button">Подробнее</a>
        @csrf
    </form>

@endsection