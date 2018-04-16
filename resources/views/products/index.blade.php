@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="container">
        <h2 class="text-center my-4">Products</h2>
        <div class="d-flex justify-content-center justify-content-sm-end">
            <a href="{{URL::to('products/create')}}" class="btn btn-lg my-custom-button">Add new product</a>
        </div>
        <div class="table-responsive table-hover">
            <table class="table mt-4">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td><a href="/products/{{$product->id}}">{{$product->name}}</a></td>
                        <td>{{$product->color->name}}</td>
                        <td>{{$product->price}}</td>
                        <td class="text-right">
                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                            <form class="d-inline-block" action="{{url('products', [$product->id])}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection