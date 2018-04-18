@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/checkout.css">
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

        <form role="form" action="">
            <div class="row setup-content-2" id="step-1">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center my-4">Basket</h2>

                    <div class="table-responsive">
                        <table class="table mt-4">
                            <tbody>
                            <tr class="first-product">
                                <td class="d-none d-sm-block">
                                    <img src="https://www.lanciottideverzi.com/images/articoli/max/205P3_antik_blu_1_2.jpg"
                                         width="100" height="100" alt="..."/>
                                </td>
                                <td>
                                    <h6>Derby</h6>
                                    <br>
                                    <small class="d-none d-sm-block float-left">Black</small>
                                </td>
                                <td>€ 190</td>
                                <td>
                                    <input type="number" class="form-control quantity-input" value="1">
                                </td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-info mt-1"><i class="fas fa-sync-alt"></i></button>
                                    <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-sm-block">
                                    <img src="https://www.lanciottideverzi.com/images/articoli/max/205P3_antik_blu_1_2.jpg"
                                         width="100" height="100" alt="..."/>
                                </td>
                                <td>
                                    <h6>Derby</h6>
                                    <br>
                                    <small class="d-none d-sm-block float-left">Black</small>
                                </td>
                                <td>€ 190</td>
                                <td>
                                    <input type="number" class="form-control quantity-input" value="1">
                                </td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-info mt-1"><i class="fas fa-sync-alt"></i></button>
                                    <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-sm-block">
                                    <img src="https://www.lanciottideverzi.com/images/articoli/max/205P3_antik_blu_1_2.jpg"
                                         width="100" height="100" alt="..."/>
                                </td>
                                <td>
                                    <h6>Derby</h6>
                                    <br>
                                    <small class="d-none d-sm-block float-left">Black</small>
                                </td>
                                <td>€ 190</td>
                                <td>
                                    <input type="number" class="form-control quantity-input" value="1">
                                </td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-info mt-1"><i class="fas fa-sync-alt"></i></button>
                                    <button type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="5">
                                    <h4 class="mr-3">Total:</h4>
                                    <h4>570 €</h4>
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

                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="">
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
                        <hr class="mb-4">

                        <button class="btn my-custom-button prevBtn-2 float-left" type="button"><i class="fas fa-angle-left mr-2"></i>Back to Basket</button>
                        <button class="btn my-custom-button nextBtn-2 float-right" type="button">Payment<i class="fas fa-angle-right ml-2"></i></button>
                </div>
            </div>

            <div class="row setup-content-2" id="step-3">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center my-4">Payment</h2>

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
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
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

                    <hr class="mb-4">

                    <button class="btn my-custom-button prevBtn-2 float-left" type="button"><i class="fas fa-angle-left mr-2"></i>Shipping</button>
                    <button class="btn my-custom-button btn-lg nextBtn-2 float-right" type="button">Submit Order</button>
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