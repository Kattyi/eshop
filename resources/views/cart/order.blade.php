@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')

    <div class="container">

        <div class="stepper mt-5">
            <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                <div class="step">
                    <a href="#step-1" class="btn btn-js" data-toggle="tooltip" data-placement="top">
                        <i class="fas fa-shopping-bag fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="step">
                    <a href="#step-2" class="btn" data-toggle="tooltip" data-placement="top">
                        <i class="fas fa-shipping-fast fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="step">
                    <a href="#step-3" class="btn" data-toggle="tooltip" data-placement="top">
                        <i class="far fa-credit-card fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="step">
                    <a href="#step-4" class="btn" data-toggle="tooltip" data-placement="top">
                        <i class="fas fa-check fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <hr>
        </div>



        <div class="row text-center" id="step-4">
            <div class="col-md-12 mb-4">
                <h2 class="my-4">Congrats! Your order has been accepted!</h2>
                <hr class="mb-4">
                <a href="/" class="btn btn-lg my-custom-button">Return to store</a>
            </div>
        </div>

    </div>

@endsection