<div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/crypto/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <span class="nio-version">Crypto</span>
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-widget d-none d-xl-block">
                    <div class="user-account-info between-center">
                        <div class="user-account-main">
                            <h6 class="overline-title-alt">Available Balance</h6>
                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                        </div>
                        <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                    </div>
                    <ul class="user-account-data gy-1">
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">Profits (7d)</span>
                            </div>
                            <div class="user-account-value">
                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                <span class="text-success ms-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                            </div>
                        </li>
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">Deposit in orders</span>
                            </div>
                            <div class="user-account-value">
                                <span class="sub-text">0.005400 <span class="currency currency-btc">BTC</span></span>
                            </div>
                        </li>
                    </ul>
                    <div class="user-account-actions">
                        <ul class="g-3">
                            <li><a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                            <li><a href="#" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                        </ul>
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-menu">
                    <!-- Menu -->
                    <ul class="nk-menu">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Menu</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('customer.dashboard') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('customer.wallets') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                <span class="nk-menu-text">Wallets</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('customer.buy-sell') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                <span class="nk-menu-text">Buy / Sell</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('customer.transaction-history') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                <span class="nk-menu-text">Transaction History</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="html/crypto/profile.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                <span class="nk-menu-text">My Profile</span>
                            </a>
                        </li>
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">User</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="html/index.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                <span class="nk-menu-text">Main Dashboard</span>
                            </a>
                        </li>
                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->
            </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-body -->
    </div><!-- .nk-sidebar-element -->
</div>