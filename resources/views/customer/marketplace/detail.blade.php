@extends('customer.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Marketplace Match</h3>
                        <div class="nk-block-des text-soft">
                            <p>0.002 BTC for N20,000</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('customer.list') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                        <a href="{{ route('customer.list') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-xl-4">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="user-card user-card-s2">
                                        <div class="user-avatar lg bg-primary">
                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <h5>Francis Mitcham</h5>
                                            <span class="sub-text">info@softnio.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="profile-stats">
                                                <span class="amount">23</span>
                                                <span class="sub-text">Total Sales</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="profile-stats">
                                                <span class="amount">20</span>
                                                <span class="sub-text">Complete</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="profile-stats">
                                                <span class="amount">3</span>
                                                <span class="sub-text">Unsold</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <h6 class="overline-title mb-2">Short Details</h6>
                                    <div class="row g-3">
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Billing Email:</span>
                                            <span>billing@softnio.com</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Billing Address:</span>
                                            <span>551 Swanston Street, Melbourne <br /> Victoria 3053 Australia</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Language:</span>
                                            <span>English, France</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Last Login:</span>
                                            <span>15 Feb, 2019 01:02 PM</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">KYC Status:</span>
                                            <span class="lead-text text-success">Approved</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Register At:</span>
                                            <span>Nov 24, 2019</span>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-xl-8">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="overline-title-alt mb-2 mt-2">In Offer</div>
                                    <div class="profile-balance">
                                        <div class="profile-balance-group gx-4">
                                            <div class="profile-balance-sub">
                                                <div class="profile-balance-amount">
                                                    <div class="number">0.02 <small class="currency currency-usd">BTC</small></div>
                                                </div>
                                                <div class="profile-balance-subtitle">Unit Offer</div>
                                            </div>
                                            <div class="profile-balance-sub">
                                                <span class="profile-balance-plus text-soft"><em class="icon ni ni-minus"></em></span>
                                                <div class="profile-balance-amount">
                                                    <div class="number">20,000 NGN</div>
                                                </div>
                                                <div class="profile-balance-subtitle">Unit Price</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <h6 class="lead-text mb-3">Payment Methods</h6>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6 col-xl-12">
                                            <div class="form-pm-group">
                                                <ul class="buysell-pm-list">
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method"
                                                            id="pm-paypal" checked>
                                                        <label class="buysell-pm-label" for="pm-paypal">
                                                            <span class="pm-name">Account Balance</span>
                                                        </label>
                                                    </li>
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method"
                                                            id="pm-bank">
                                                        <label class="buysell-pm-label" for="pm-bank">
                                                            <span class="pm-name">Paystack</span>
                                                        </label>
                                                    </li>
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="bs-method"
                                                            id="pm-card" />
                                                        <label class="buysell-pm-label" for="pm-card">
                                                            <span class="pm-name">Flutterwave</span> </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-12 col-lg-6 col-xl-12">
                                            <button class="h-100 w-100 btn-dim btn btn-outline-primary border border-dashed round-sm p-4 d-flex align-items-center justify-content-center">
                                                <span class="text-soft">Proceed to buy 0.02 BTC for N20,000</span>
                                            </button>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
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