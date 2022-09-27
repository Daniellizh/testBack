@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="starter-template">
            <div class="row">
                @foreach($products as $product)
                    @include('card', compact('product'))
                @endforeach
                {{ $products->links() }}
            </div>
            
        </div>
    </div>
@endsection