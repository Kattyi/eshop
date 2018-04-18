@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <img class="d-block w-100" src="{{ asset('storage/products-images/' . $product->images[0]->file) }}" alt="">
            </div>
            <div class="col-md-6 mt-3">
                <div class="mx-3">
                    <h2>{{ $product->name }}</h2>
                    <h4>{{ $product->color->name }}</h4>
                    <p class="mb-5">{{ $product->price }} €</p>
                </div>

                <row>
                    <div class="col-12 mb-3">

                        <select class="custom-select">
                            <option selected>Size</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                        </select>

                    </div>
                    <div class="col-12 mb-5">
                        <button class="btn my-custom-button w-100"><i class="fas fa-shopping-bag mr-2"></i>Add to Bag</button>
                    </div>
                    <div class="col-12">
                        <ul class="product-description">
                            <li>Material: {{ $product->material }}</li>
                            <li>Made in Italy</li>
                        </ul>
                    </div>
                </row>
            </div>
        </div>
    </div>
@endsection