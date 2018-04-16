@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/collection.css">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row h-100">
            <aside class="col-12 col-md-2 pl-0 pt-md-4">
                <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start py-2 px-md-4">
                    <div class="collapse navbar-collapse">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            @foreach($colors as $color)
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="/collection/{{$color->name}}"><i class="fa fa-circle fa-fw">
                                        </i><span class="d-none d-md-inline">{{$color->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col bg-faded py-3">
                <div class="container">

                    <h2 class="text-center my-4">
                        @isset($selected_color)
                            {{ $selected_color->name }}
                        @else
                            Collection
                        @endisset
                    </h2>

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-sm-6 col-md-6 col-lg-4 my-2">
                                <a href="{{url('products', [$product->id])}}" class="product-card">
                                    <div class="card">
                                        <img class="card-img-top" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_2_1.jpg" alt="Card image cap">
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