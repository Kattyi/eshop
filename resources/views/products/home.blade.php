@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
    <div id="carouselExampleControls" class="carousel slide mt-5 mx-3 mx-sm-0 mt-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_2_1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mb-4">

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
@endsection