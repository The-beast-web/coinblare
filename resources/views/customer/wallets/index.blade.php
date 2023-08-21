@extends('customer.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
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
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <li class="opt-menu-md dropdown">
                                <a href="#" class="btn btn-dim btn-outline-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                <div class="dropdown-menu  dropdown-menu-xs dropdown-menu-end">
                                    <ul class="link-list-plain sm">
                                        <li><a href="#">Display</a></li>
                                        <li><a href="#">Show</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="btn btn-primary"><span>Send</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                            <li><a href="#" class="btn btn-warning"><span>Deposit</span> <em class="icon ni ni-arrow-long-up"></em></a></li>
                            <li><a href="#" class="btn btn-dim btn-outline-light"><span>Withdraw</span> <em class="icon ni ni-arrow-long-down"></em></a></li>
                        </ul>
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
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card card-bordered is-dark">        
                            <div class="nk-wgw">
                                <div class="nk-wgw-inner">
                                    <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
                                        <div class="nk-wgw-icon is-default">
                                            <em class="icon ni ni-sign-kobo"></em>
                                        </div>
                                        <h5 class="nk-wgw-title title">NioWallet</h5>
                                    </a>
                                    <div class="nk-wgw-balance">
                                        <div class="amount">40.509505<span class="currency currency-nio">NIO</span></div>
                                        <div class="amount-sm">8,924.63<span class="currency currency-usd">USD</span></div>
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
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card card-bordered">
                            <div class="nk-wgw">
                                <div class="nk-wgw-inner">
                                    <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
                                        <div class="nk-wgw-icon">
                                            <em class="icon ni ni-sign-eth"></em>
                                        </div>
                                        <h5 class="nk-wgw-title title">Ethereum Wallet</h5>
                                    </a>
                                    <div class="nk-wgw-balance">
                                        <div class="amount">0.452058<span class="currency currency-eth">ETH</span></div>
                                        <div class="amount-sm">1,583.25<span class="currency currency-usd">USD</span></div>
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
                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                        <div class="card card-bordered">
                            <div class="nk-wgw">
                                <div class="nk-wgw-inner">
                                    <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
                                        <div class="nk-wgw-icon">
                                            <em class="icon ni ni-sign-btc"></em>
                                        </div>
                                        <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                    </a>
                                    <div class="nk-wgw-balance">
                                        <div class="amount">4.434953<span class="currency currency-btc">BTC</span></div>
                                        <div class="amount-sm">28,247.63<span class="currency currency-usd">USD</span></div>
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
                </div><!-- .row -->
            </div>
        </div>
    </div>
</div>
@endsection