@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/collection.css">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row h-100">
            @isset($search)
            @else
                <aside class="col-12 col-md-2 pl-0 pt-md-4">
                    <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start py-2 px-md-4">
                        <div class="collapse navbar-collapse">
                            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                @foreach($colors as $color)
                                    <li class="nav-item">
                                        @isset($gender)
                                            <a class="nav-link pl-0" href="/{{$gender}}/{{$color->name}}">
                                        @else
                                            <a class="nav-link pl-0" href="/collection/{{$color->name}}">
                                        @endisset
                                            <i class="fas fa-square-full" style="color: {{ $color->color_code }};"></i>
                                            <span class="d-none d-md-inline ml-2">{{$color->name}}</span>
                                            </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </aside>
            @endisset
            <main class="col bg-faded py-5 pl-3">
                <div class="container">

                    <h6 class="filter">
                        @isset($selected_color)
                            FILTER: {{ $selected_color->name }}
                            @isset($gender)
                                <a class="filter" href="/{{$gender}}">
                                    @else
                                        <a class="filter" href="/collection">
                                            @endisset
                                        <i class="fas fa-times fa-lg" style="color: black; padding: 2px; margin-left: 0.2rem"></i></a>
                            @endisset
                    </h6>

                    @isset($search)
                        <h2 class="text-center my-4">Search results for: "{{ $search }}"</h2>
                    @else
                        @isset($gender)
                            <h2 class="text-center my-4">{{ $gender }}</h2>
                        @else
                            <h2 class="text-center my-4">Collection</h2>
                        @endisset
                    @endisset

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                                <a href="{{url('products', [$product->id])}}" class="product-card">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('storage/products-images/' . $product->images[0]->file) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title">{{$product->name}}</h6>
                                            <p class="product_color">{{$product->color->name}}</p>
                                            <p>€ {{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </main>
        </div>
    </div>

@endsection