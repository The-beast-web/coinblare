@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
    <div class="nk-content nk-content-fluid mt-5 d-none" id="market">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="components-preview wide-sm mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title fw-normal">Account Withdrawal</h4>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-two-factor-auth">
                                <div class="card-inner">
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step">
                                                <ul class="row g-2">
                                                    <div class="col-12">
                                                        <div class="buysell-field form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label"
                                                                    for="withdraw-amount">Amount</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="number"
                                                                    class="form-control form-control-lg form-control-number text_field"
                                                                    id="withdraw-amount" name="bs-amount"
                                                                    placeholder="0.055960">
                                                                <div class="form-dropdown">
                                                                    <div class="text">NGN</div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .buysell-field -->
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Withdrawal Method</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2" id="myselection"
                                                                    data-placeholder="Select Payment Method">
                                                                    <option value="Localbank">Local Bank</option>
                                                                    <option value="Debitcard">Debit / Credit Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2 myDiv default" id="showLocalbank">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Account
                                                                    Number</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="" id="acc-no"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Enter Your Bank Account Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Account
                                                                    Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="" id="acc-name"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Enter Your Bank Account Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Bank</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" id="acc-bank"
                                                                        data-placeholder="Select Your Bank">
                                                                        <option value="">Default Option</option>
                                                                        <option value="first bank">First Bank</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2 myDiv" id="showDebitcard">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Card Number</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="" id="card-no"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Enter Your Bank Account Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">CVV</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="" id="card-cvv"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Enter Your Bank Account Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Expiry Date</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" name="" id="card-exp"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Enter Your Bank Account Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-primary p-2"
                                                                id="withdraw">
                                                                <span class="spinner-border spinner-border-sm d-none"></span>
                                                                <span id="wit">Withdraw</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
@endsection
