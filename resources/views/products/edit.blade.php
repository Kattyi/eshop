@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">

                <img class="d-block w-100 float-left" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="">

                <div>
                    <img class="d-block w-25 float-left" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="">
                    <img class="d-block w-25 float-left" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="">
                    <img class="d-block w-25 float-left" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="">
                    <img class="d-block w-25 float-left" src="https://www.lanciottideverzi.com/images/articoli/max/695P_antik_cordovan_1_2.jpg" alt="">
                </div>

            </div>
            <div class="col-md-6 mt-3 product-inputs">

                <form action="{{url('products', [$product->id])}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$product->name}}" name="name" aria-label="Product name" aria-describedby="product">
                        <div class="input-group-append">
                            <span class="input-group-text" id="product-name">Name</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select class="custom-select mb-3" id="inlineFormCustomSelect" name="color">
                            <option selected>{{$product->color->name}}</option>
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                            @endforeach
                        </select>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$product->price}}" name="price" aria-label="Product price" aria-describedby="product">
                        <div class="input-group-append">
                            <span class="input-group-text" id="product-price">Price</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$product->material}}" name="material" aria-label="Product material" aria-describedby="product">
                        <div class="input-group-append">
                            <span class="input-group-text" id="product-material">Material</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <button type="submit" class="btn my-custom-button">Save</button>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>

            </div>
        </div>
    </div>
@endsection