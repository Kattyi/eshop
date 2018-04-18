@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div>
                    <img class="float-left m-2" src="http://via.placeholder.com/100x100" width="100" height="100" alt="">
                    <img class="float-left m-2" src="http://via.placeholder.com/100x100" width="100" height="100" alt="">
                    <img class="float-left m-2" src="http://via.placeholder.com/100x100" width="100" height="100" alt="">
                    <img class="float-left m-2" src="http://via.placeholder.com/100x100" width="100" height="100" alt="">
                    <img class="float-left m-2" src="http://via.placeholder.com/100x100" width="100" height="100" alt="">
                </div>

            </div>
            <div class="col-md-6 mt-3 product-inputs">

                <form action="/products" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <div class="custom-file" id="customFile">
                            <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="product">
                            <label class="custom-file-label" for="image"></label>
                        </div>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" aria-label="Product name" aria-describedby="product">
                        <div class="input-group-append">
                            <span class="input-group-text" id="product-name">Name</span>
                        </div>
                    </div>

                    <select class="custom-select mb-3" id="inlineFormCustomSelect" name="gender">
                        <option selected>Choose gender</option>
                        <option value="0">MAN</option>
                        <option value="1">WOMAN</option>
                    </select>

                    <select class="custom-select mb-3" id="inlineFormCustomSelect" name="color">
                        <option selected>Choose color</option>
                        @foreach($colors as $color)
                            <option value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                    </select>

                    <div class="input-group mb-3">
                        <input type="number" step="0.01" class="form-control" name="price" aria-label="Product price" aria-describedby="product">
                        <div class="input-group-append">
                            <span class="input-group-text" id="product-price">Price</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="material" aria-label="Product material" aria-describedby="product">
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


