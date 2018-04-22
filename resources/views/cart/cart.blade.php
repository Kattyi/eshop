@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

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

        <form role="form" action="">
            <div class="row setup-content-2" id="step-1">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center my-4">Cart</h2>

                    <p class="text-right">
                        <a href="/empty" class="btn btn-danger mt-1">DELETE ALL PRODUCTS</a>
                    </p>

                    <div class="table-responsive">
                        <table class="table mt-4">
                            <tbody>

                            @if(Cart::content()->count() > 0)

                                @foreach(Cart::content() as $item)

                                    <tr class="first-product">
                                        <td class="d-none d-sm-block">
                                            <img src="{{ asset('storage/products-images/' . $item->model->images[0]->file) }}"
                                                 width="100" height="100" alt="..."/>
                                        </td>
                                        <td>
                                            <h6>
                                                <a href="/products/{{$item->model->id}}" class="text-secondary">{{$item->model->name}}</a>
                                            </h6>
                                            <br>
                                            <small class="d-none d-sm-block float-left">{{ $item->color }}</small>
                                        </td>
                                        <td>
                                            {{ $item->qty }}
                                        </td>
                                        <td>€ {{ $item->price }}</td>
                                        <td class="text-right">
                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                            @endif

                            <tr>
                                <td class="text-right" colspan="5">
                                    <h4 class="mr-3">Total:</h4>
                                    <h4>{{ Cart::subtotal() }} €</h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="mb-4">

                    <a href="/collection" class="btn my-custom-button float-left"><i class="fas fa-angle-left mr-2"></i>Continue Shopping</a>
                    <button class="btn my-custom-button nextBtn-2 float-right" type="button">Checkout<i class="fas fa-angle-right ml-2"></i></button>

                </div>
            </div>

            <div class="row setup-content-2" id="step-2">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center my-4">Shipping</h2>

                    <div class="row">

                        <div class="col-md-7">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Jane" value="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Doe" value="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country</label>
                                    <select class="custom-select d-block w-100" id="country">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <select class="custom-select d-block w-100" id="state">
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="">
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>

                                    @foreach(Cart::content() as $item)

                                        <tr class="first-product">
                                            <td class="d-none d-sm-block">
                                                <img src="{{ asset('storage/products-images/' . $item->model->images[0]->file) }}"
                                                     width="100" height="100" alt="..."/>
                                            </td>
                                            <td>
                                                <h6>
                                                    <a href="/products/{{$item->model->id}}" class="text-secondary">{{$item->model->name}}</a>
                                                </h6>
                                                <br>
                                                <small class="d-none d-sm-block float-left">{{ $item->color }}</small>
                                            </td>
                                            <td>
                                                {{ $item->qty }}
                                            </td>
                                            <td>€ {{ $item->price }}</td>
                                        </tr>

                                    @endforeach

                                    <tr>
                                        <td class="text-right" colspan="5">
                                            <h4 class="mr-3">Total:</h4>
                                            <h4>{{ Cart::subtotal() }} €</h4>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>


                    <hr class="mb-4">

                    <button class="btn my-custom-button prevBtn-2 float-left" type="button"><i class="fas fa-angle-left mr-2"></i>Back to Basket</button>
                    <button class="btn my-custom-button nextBtn-2 float-right" type="button">Payment<i class="fas fa-angle-right ml-2"></i></button>
                </div>
            </div>

            <div class="row setup-content-2" id="step-3">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center my-4">Payment</h2>

                    <div class="row">

                        <div class="col-md-7">

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="debit">Card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Cardholder name</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="">
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="">
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    @foreach(Cart::content() as $item)

                                        <tr class="first-product">
                                            <td class="d-none d-sm-block">
                                                <img src="{{ asset('storage/products-images/' . $item->model->images[0]->file) }}"
                                                     width="100" height="100" alt="..."/>
                                            </td>
                                            <td>
                                                <h6>
                                                    <a href="/products/{{$item->model->id}}" class="text-secondary">{{$item->model->name}}</a>
                                                </h6>
                                                <br>
                                                <small class="d-none d-sm-block float-left">{{ $item->color }}</small>
                                            </td>
                                            <td>
                                                {{ $item->qty }}
                                            </td>
                                            <td>€ {{ $item->price }}</td>
                                        </tr>

                                    @endforeach

                                    <tr>
                                        <td class="text-right" colspan="5">
                                            <h4 class="mr-3">Total:</h4>
                                            <h4>{{ Cart::subtotal() }} €</h4>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                    <hr class="mb-4">

                    <button class="btn my-custom-button prevBtn-2 float-left" type="button"><i class="fas fa-angle-left mr-2"></i>Shipping</button>
                    <form action="{{ route('order.store') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn my-custom-button btn-lg float-right">Submit Order</button>
                    </form>
                </div>
            </div>

            <div class="row setup-content-2 text-center" id="step-4">
                <div class="col-md-12 mb-4">
                    <h2 class="my-4">Congrats! Your order has been accepted!</h2>
                    <hr class="mb-4">
                    <a href="/" class="btn btn-lg my-custom-button">Return to store</a>
                </div>
            </div>

        </form>

    </div>

@endsection