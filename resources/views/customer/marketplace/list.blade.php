@extends('customer.layout.master')

@section('content')
    @include('customer.layout.preloader')
    <div class="nk-content nk-content-fluid mt-5 mb-5 d-none" id="market">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Marketplace Match</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Best Available Offer</p>
                                </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('customer.buy-sell') }}"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="{{ route('customer.buy-sell')}}"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xl-12">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="overline-title-alt mb-2 mt-2">In Offer</div>
                                        <div class="profile-balance">
                                            <div class="profile-balance-group gx-4">
                                                <div class="profile-balance-sub">
                                                    <div class="profile-balance-amount">
                                                        <div class="number"> <small class="currency currency-usd">{{ request()->session()->get('amount') }} {{ $crypto->abbr }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Unit Offer</div>
                                                </div>
                                                <div class="profile-balance-sub">
                                                    <span class="profile-balance-plus text-soft"><em
                                                            class="icon ni ni-minus"></em></span>
                                                    <div class="profile-balance-amount">
                                                        <div class="number"><em class="ni ni-sign-dollar"></em>{{ number_format($price) }}</div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Unit Price</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <h6 class="lead-text mb-3">Payment Methods</h6>
                                        <form action="{{ route('customer.payment') }}" method="POST">
                                            @csrf
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6 col-xl-12">
                                                <div class="form-pm-group">
                                                    <ul class="buysell-pm-list">
                                                        <li class="buysell-pm-item">
                                                            <input class="buysell-pm-control" checked type="radio"
                                                                name="bs-method" id="pm-bank" value="Paystack">
                                                            <label class="buysell-pm-label" for="pm-bank">
                                                                <span class="pm-name">Paystack</span>
                                                            </label>
                                                        </li>
                                                        <li class="buysell-pm-item">
                                                            <input class="buysell-pm-control" type="radio"
                                                                name="bs-method" id="pm-card" value="Flutterwave">
                                                            <label class="buysell-pm-label" for="pm-card">
                                                                <span class="pm-name">Flutterwave</span> </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-12 col-lg-6 col-xl-12">
                                                <button
                                                    class="h-100 w-100 btn-dim btn btn-outline-primary border border-dashed round-sm p-4 d-flex align-items-center justify-content-center">
                                                    <span class="text-soft">Proceed to buy {{ request()->session()->get('amount') }} {{ $crypto->abbr }} for {{ number_format($price) }} USD</span>
                                                </button>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        </form>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
