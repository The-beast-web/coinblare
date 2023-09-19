@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub"><span>Account Wallet</span> </div><!-- .nk-block-head-sub -->
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Wallets</h2>
                        <div class="nk-block-des">
                            <p>Here is the list of your wallets!</p>
                        </div>
                    </div>
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title title">Crypto Wallets</h5>
                    </div>
                </div>
                <div class="row g-gs">
                    @foreach ($wallet as $wall)
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card card-bordered">
                            <div class="nk-wgw">
                                <div class="nk-wgw-inner">
                                    <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
                                        <div class="nk-wgw-icon">
                                            <em class="{{ $wall->wallet_symbol }}"></em>
                                        </div>
                                        <h5 class="nk-wgw-title title text-capitalize">{{ $wall->crypto_wallet }} Wallet</h5>
                                    </a>
                                    <div class="nk-wgw-balance">
                                        <div class="amount">{{ round($wall->balance_in_crypto, 3) }}<span class="currency currency-btc">{{ $wall->abbr }}</span></div>
                                        <div class="amount-sm">{{ number_format($wall->balance_in_currency, 2) }}<span class="currency currency-usd">USD</span></div>
                                    </div>
                                </div>
                                <div class="nk-wgw-actions">
                                    <ul>
                                        <li><a href="#"><em class="icon ni ni-arrow-up-right"></em> <span>Send</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-arrow-down-left"></em><span>Receive</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    @endforeach
                </div><!-- .row -->
            </div>
        </div>
    </div>
</div>
@endsection