@extends('layouts.app')

@section('content')

    @foreach($categories as $category)
        <div class="container">
            <div class="starter-template">
                <a href="{{ route('category', $category->code) }}">
                    <h2>{{ $category->name }}</h2>
                </a>
            </div>
        </div>
    @endforeach

@endsection