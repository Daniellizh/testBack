@extends('layouts.app')

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>
            {{$category->name}} {{ $category->products->count() }}
        </h1>

        <div class="row">
            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>

    </div>
</div>

@endsection