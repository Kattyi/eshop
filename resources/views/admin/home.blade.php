@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center my-4">Products</h2>
        <div class="d-flex justify-content-center justify-content-sm-end">
            <a href="admin-product-new.html" class="btn btn-lg my-custom-button">Add new product</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Beatles</td>
                    <td>Black</td>
                    <td>€ 190</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Derby</td>
                    <td>Brown</td>
                    <td>€ 180</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pantofola</td>
                    <td>Blue</td>
                    <td>€ 210</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Beatles</td>
                    <td>Black</td>
                    <td>€ 190</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Derby</td>
                    <td>Brown</td>
                    <td>€ 180</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Pantofola</td>
                    <td>Blue</td>
                    <td>€ 210</td>
                    <td class="text-right">
                        <a href="admin-product-detail.html" class="btn btn-primary mt-1"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-info mt-1"><i class="far fa-copy"></i></button>
                        <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
@endsection