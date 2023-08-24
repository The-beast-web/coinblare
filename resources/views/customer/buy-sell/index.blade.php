@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
    <div class="nk-content nk-content-fluid method d-none mt-5" id="market">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="components-preview wide-lg mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Choose Cryptocurrency To Trade</h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-two-factor-auth"
                                data-step-current="first" novalidate="novalidate" style="display: block;">
                                <div class="card-inner">
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step active">
                                                <h5 class="title mb-3">Available Cryptocurrencies</h5>
                                                <p class="sub-text">Select the currency you want to trade and click the "continue" button</p>
                                                <ul class="row g-3 justify-content-center">
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="bitcoin" value="Bitcoin"
                                                                required="">
                                                            <label class="custom-control-label" for="bitcoin">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/bitcoin.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Bitcoin</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="ether" value="Ethereum"
                                                                required="">
                                                            <label class="custom-control-label" for="ether">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/ethereum.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Ethereum</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="tether" value="Tether"
                                                                required="">
                                                            <label class="custom-control-label" for="tether">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/tether.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Tether</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="binance" value="Binance Coin"
                                                                required="">
                                                            <label class="custom-control-label" for="binance">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/binance.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Binance Coin</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="xrp" value="XRP"
                                                                required="">
                                                            <label class="custom-control-label" for="xrp">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/xrp.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">XRP</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="usdollar" value="U.S. Dollar Coin"
                                                                required="">
                                                            <label class="custom-control-label" for="usdollar">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/usdcoin.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">U.S. Dollar Coin</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="dogecoin" value="Dogecoin"
                                                                required="">
                                                            <label class="custom-control-label" for="dogecoin">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/dogecoin.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Dogecoin</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="cardano" value="Cardano"
                                                                required="">
                                                            <label class="custom-control-label" for="cardano">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/cardano.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Cardano</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="solana" value="Solana"
                                                                required="">
                                                            <label class="custom-control-label" for="solana">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/solana.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Solana</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="tron" value="TRON (TRX)"
                                                                required="">
                                                            <label class="custom-control-label" for="tron">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/tron.webp') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">TRON (TRX)</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full checked">
                                                            <input type="radio" class="custom-control-input"
                                                                name="tranx_coin" id="litecoin" value="Litecoin"
                                                                required="">
                                                            <label class="custom-control-label" for="litecoin">
                                                                <span class="d-flex flex-column text-center mt-5">
                                                                    <span class="icon-wrap xl text-primary">
                                                                        <img src="{{ asset('images/coin/litcoin.png') }}"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Litecoin</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                            <li class="step-next" style="display: block;"><button type="button"
                                                    class="btn btn-primary eg-toastr-default"
                                                    id="bs-btn">Continue</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
    <div class="nk-content nk-content-fluid d-none mt-4" id="buy-sell">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#buy">Buy Coin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sell">Sell Coin</a>
                            </li>
                        </ul>
                    </div><!-- .buysell-nav -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="buy">
                            <div class="buysell-title text-center">
                                <h3 class="title">Buy <span id="message-buy"></span></h3>
                            </div><!-- .buysell-title -->
                            <div class="buysell-block">
                                <form action="#" class="buysell-form">
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Amount to Buy</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="buysell-amount" name="bs-amount" placeholder="0.055960">
                                            <div class="form-dropdown">
                                                <div class="text">BTC</div>
                                            </div>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="button" class="btn btn-lg btn-block btn-primary" id="continue-buy"
                                            disabled>Continue to Buy</button>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="button" class="btn btn-lg btn-block btn-warning back"
                                            ><em class="ni ni-arrow-left"></em> Back</button>
                                    </div><!-- .buysell-field -->
                                </form><!-- .buysell-form -->
                            </div><!-- .buysell-block -->
                        </div>
                        <div class="tab-pane" id="sell">
                            <div class="buysell-title text-center">
                                <h3 class="title">Sell <span id="message-sell"></span></h3>
                            </div><!-- .buysell-title -->
                            <div class="buysell-block">
                                <form action="#" class="buysell-form">
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Amount to Sell</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="sell-coin" name="bs-amount" placeholder="0.055960">
                                            <div class="form-dropdown">
                                                <div class="text">BTC</div>
                                            </div>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Price</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="sell-amount" name="bs-amount" placeholder="0.055960">
                                            <div class="form-dropdown">
                                                <div class="text">NGN</div>
                                            </div>
                                        </div>
                                        <div class="form-note-group">
                                            <span class="buysell-min form-note-alt">Minimum: 10.00 USD</span>
                                            <span class="buysell-min form-note-alt">Service Fee : <em
                                                    class="ni ni-sign-kobo"></em><span
                                                    id="commission-sell">0</span></span>
                                            <span class="buysell-rate form-note-alt"><span id="coin-sell">0</span> BTC =
                                                <span id="naira-sell">0</span> NGN</span>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="buysell-pm-list">
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="sell"
                                                        id="pm-crypto" value="cryptobot" checked>
                                                    <label class="buysell-pm-label" for="pm-crypto">
                                                        <span class="pm-name">Cryptobot Wallet</span>
                                                    </label>
                                                </li>
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="sell"
                                                        id="pm-external" value="external">
                                                    <label class="buysell-pm-label" for="pm-external">
                                                        <span class="pm-name">External</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="button" class="btn btn-lg btn-block btn-primary" id="continue"
                                            disabled>Continue to Sell</button>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="button" class="btn btn-lg btn-block btn-warning back"
                                            ><em class="ni ni-arrow-left"></em> Back</button>
                                    </div><!-- .buysell-field -->
                                </form><!-- .buysell-form -->
                            </div><!-- .buysell-block -->
                        </div>
                    </div>
                </div><!-- .buysell -->
            </div>
        </div>
    </div>
    <!-- @@ Buy Coin Modal @e -->
    <div class="modal fade zoom" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">Sell <span id="modal"></span></h5>
                        <div class="nk-block-text">
                            <div class="caption-text">You are about to sell <strong id="cost">0.5968</strong> BTC
                            </div>
                            <span class="sub-text-sm">Exchange rate: 1 BTC = 9,804.00 USD</span>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="text-center">
                            <div id="qr-code"></div>
                        </div>
                        <div class="nk-refwg-url mt-3 mb-1">
                            <div class="form-control-wrap">
                                <div class="form-clip clipboard-init mt-2" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                <input type="text" readonly class="form-control copy-text p-3" id="refUrl" value="gksuTUiau373Bskaqouwix83jh">
                            </div>
                        </div>
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a class="btn btn-primary btn-lg" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    href="#proof">I have paid</a>
                            </div>
                            <div class="pt-3">
                                <a href="#" data-bs-dismiss="modal" class="link link-danger">Cancel</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <div class="modal fade zoom" tabindex="-1" role="dialog" id="proof">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">I have paid</h5>
                    </div>
                    <div class="nk-block">
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Your Wallet Address</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Enter your wallet address">
                                </div>
                            </div>
                        </form>
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a class="btn btn-primary btn-lg" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    href="#confirm-coin">Submit</a>
                            </div>
                            <div class="pt-3">
                                <a href="#" data-bs-dismiss="modal" class="link link-danger">Cancel</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- @@ Confirm Coin Modal @e -->
    <div class="modal fade zoom" tabindex="-1" role="dialog" id="confirm-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Successfully submitted!</h4>
                        <div class="nk-modal-text">
                            <p class="caption-text">Your trade will be made public once your payment is approved.</p>

                            <p class="sub-text-sm">The quickest approval time is 5 mins while the slowest is 3 days.</p>
                        </div>
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group gx-4">
                                <li><a href="{{ route('customer.dashboard') }}"
                                        class="btn btn-lg btn-mw btn-primary">OK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <div class="modal fade zoom" tabindex="-1" role="dialog" id="external-success">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Successfully submitted!</h4>
                        <div class="nk-modal-text">
                            <p class="caption-text">Your trade has been published and <span class="btc"></span> <span
                                    class="coin"></span> <span id="coin-name"></span> has been deducted from your <span id="coin-wallet"></span>
                                wallet.</p>
                        </div>
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group gx-4">
                                <li><a href="{{ route('customer.dashboard') }}"
                                        class="btn btn-lg btn-mw btn-primary">OK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    @push('script')
<script>
    $("#qr-code").barcode("stringtogenerate","code39");
</script>
@endpush
@endsection

