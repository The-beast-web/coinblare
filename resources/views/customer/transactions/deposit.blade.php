@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="components-preview wide-sm mx-auto">
                <div class="nk-block-head nk-block-head-lg wide-sm">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Account Deposit</h2>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="card card-bordered">
                        <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-two-factor-auth">
                            <div class="card-inner">
                                <div class="nk-stepper-content">
                                    <div class="nk-stepper-steps stepper-steps">
                                        <div class="nk-stepper-step">
                                            <h5 class="title mb-3">Chooose A Payment Method</h5>
                                            <ul class="row g-3">
                                                <div class="col-12">
                                                    <div class="buysell-field form-group">
                                                        <div class="form-label-group">
                                                            <label class="form-label" style="font-size: 23px;" for="buysell-amount">Amount</label>
                                                        </div>
                                                        <div class="form-control-group">
                                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                                id="buysell-amount" name="bs-amount" placeholder="0.055960">
                                                            <div class="form-dropdown">
                                                                <div class="text">BTC</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .buysell-field -->
                                                </div>
                                                <li class="col-6">
                                                    <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                        <input type="radio" class="custom-control-input" checked name="two-FA-method" id="two-FA-app" value="two-FA-app" required>
                                                        <label class="custom-control-label" for="two-FA-app">
                                                            <span class="d-flex flex-column text-center">
                                                                <span class="icon-wrap xl text-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                                        <rect x="7" y="10" width="76" height="50" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="32" y="69" width="28" height="7" rx="1.5" ry="1.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="40" y1="60" x2="40" y2="69" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="52" y1="60" x2="52" y2="69" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="42" y1="24" x2="70" y2="24" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="42" y1="30" x2="70" y2="30" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="42" y1="36" x2="70" y2="36" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="24" y="23" width="12" height="14" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="69" y="50" width="18" height="30" rx="3" ry="3" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="78.09" y1="75.56" x2="78.09" y2="75.56" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="3" y="46" width="24" height="34" rx="3" ry="3" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="14.69" y1="76.66" x2="14.69" y2="76.66" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="13.5" y1="49.5" x2="16.5" y2="49.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" />
                                                                        <line x1="3.5" y1="73.5" x2="26.5" y2="73.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                                <span class="lead-text mb-1 mt-3">Paystack</span>                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="col-6">
                                                    <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                        <input type="radio" class="custom-control-input" name="two-FA-method" id="two-FA-SMS" value="two-FA-SMS" required>
                                                        <label class="custom-control-label" for="two-FA-SMS">
                                                            <span class="d-flex flex-column text-center">
                                                                <span class="icon-wrap xl text-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                                        <rect x="3.5" y="14" width="36" height="62" rx="2" ry="2" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="3.5" y1="22" x2="39.5" y2="22" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="3.5" y1="64" x2="39.5" y2="64" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="20.5" y1="18" x2="25.5" y2="18" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="17.17" y1="18" x2="17.17" y2="18" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <circle cx="21.5" cy="70" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="7.5" y="25" width="28" height="35" fill="#eff1ff" />
                                                                        <rect x="10.5" y="40" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="16.5" y="40" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="22.5" y="40" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="28.5" y="40" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="50.5" y="14" width="36" height="62" rx="2" ry="2" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="50.5" y1="22" x2="86.5" y2="22" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="50.5" y1="64" x2="86.5" y2="64" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="67.5" y1="18" x2="72.5" y2="18" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <line x1="64.45" y1="17.86" x2="64.45" y2="17.86" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <circle cx="68.5" cy="70" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <rect x="54.5" y="25" width="28" height="35" fill="#eff1ff" />
                                                                        <rect x="57.5" y="39" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="63.5" y="39" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="69.5" y="39" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <rect x="75.5" y="39" width="4" height="6" rx="2" ry="2" fill="#c4cefe" />
                                                                        <ellipse cx="45.51" cy="44" rx="15.18" ry="15" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        <ellipse cx="45.51" cy="44" rx="11.13" ry="11" fill="#e3e7fe" />
                                                                        <path d="M46,50.92s5.5-2.77,5.5-6.92V39.16L46,37.08l-5.5,2.08V44C40.5,48.15,46,50.92,46,50.92Z" fill="#6576ff" />
                                                                        <polyline points="48.04 42 44.56 46 42.98 44.18" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    </svg>
                                                                </span>
                                                                <span class="lead-text mb-1 mt-3">Flutterwave</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                        <li class="step-next"><button type="button" class="btn btn-primary" disabled id="continue-buy">Continue</button></li>
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
@endsection