<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Home - Cryptobot</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets2/css/dashlite.css?ver=3.1.2">
    <link id="skin-default" rel="stylesheet" href="./assets2/css/theme.css?ver=3.1.2">
</head>

<body class="nk-body bg-white npc-landing">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <header class="header has-header-main-s1 bg-lighter" id="home">
                <div class="header-main header-main-s1 is-sticky is-transparent">
                    <div class="container header-container">
                        <div class="header-wrap">
                            <div class="header-logo">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="header-toggle">
                                <button class="menu-toggler" data-target="mainNav">
                                    <em class="menu-on icon ni ni-menu"></em>
                                    <em class="menu-off icon ni ni-cross"></em>
                                </button>
                            </div><!-- .header-nav-toggle -->
                            <nav class="header-menu" data-content="mainNav">
                                <ul class="menu-list ms-lg-auto">
                                    <li class="menu-item"><a href="#home" class="menu-link nav-link">Home</a></li>
                                    <li class="menu-item"><a href="#service" class="menu-link nav-link">Service</a></li>
                                    <li class="menu-item"><a href="#feature" class="menu-link nav-link">Features</a>
                                    </li>
                                    <li class="menu-item"><a href="#reviews" class="menu-link nav-link">Reviews</a></li>
                                </ul>
                                <ul class="menu-list ms-lg-auto g-3 mx-2">
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="menu-item">
                                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg"><em
                                                        class="ni ni-user"></em>&nbsp;&nbsp;Login</a>
                                            </li>
                                        @endif
                                        @if (Route::has('register'))
                                            <li class="menu-item">
                                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg"><em
                                                        class="ni ni-signin"></em>&nbsp;&nbsp;Sign Up</a>
                                            </li>
                                        @endif
                                    @endguest
                                    @auth
                                        @if (Auth::user()->email == 'admin@admin.com')
                                            <li class="menu-item">
                                                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg">
                                                    <em class="ni ni-home"></em>
                                                    &nbsp;&nbsp;Dashboard
                                                </a>
                                            </li>
                                        @else
                                            <li class="menu-item">
                                                <a href="{{ route('customer.dashboard') }}" class="btn btn-primary btn-lg">
                                                    <em class="ni ni-home"></em>
                                                    &nbsp;&nbsp;Dashboard
                                                </a>
                                            </li>
                                        @endif
                                    @endauth
                                </ul>
                            </nav><!-- .nk-nav-menu -->
                        </div><!-- .header-warp-->
                    </div><!-- .container-->
                </div><!-- .header-main-->
                <div class="header-content my-auto py-5">
                    <div class="container">
                        <div class="row flex-lg-row-reverse  justify-content-between g-gs">
                            <div class="col-lg-6 mb-n3 mb-lg-0">
                                <div class="header-image header-image-s2">
                                    <img src="./images/header/gfx-b.png" alt="">
                                </div><!-- .header-image -->
                            </div><!-- .col- -->
                            <div class="col-lg-5 col-md-10 mt-5">
                                <div class="header-caption mt-5">
                                    <h1 class="header-title">Buy &amp; Sell Cryptocurrencies. <span
                                            class="text-warning">10M+</span> Users Chose Us.</h1>
                                    <div class="header-text">
                                        <p>Buy &amp; Sell more 20+ cryptocurrencies with our secure platform. Use
                                            our easy-to-use crypto dashboard and earn huge returns!</p>
                                    </div>
                                </div><!-- .header-caption -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .header-content -->
            </header><!-- .header -->
            <section class="section section-service pb-0" id="service">
                <div class="container">
                    <div class="section-content">
                        <div class="row justify-content-center text-center g-gs">
                            <div class="col-9 col-sm-7 col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                                {
                                                    "symbol": "BITSTAMP:BTCUSD",
                                                    "width": 350,
                                                    "colorTheme": "light",
                                                    "isTransparent": false,
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                    <div class="col-12">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                                {
                                                    "symbol": "BINANCE:ETHUSD",
                                                    "width": 350,
                                                    "colorTheme": "light",
                                                    "isTransparent": false,
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                    <div class="col-12">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                                {
                                                    "symbol": "BINANCE:BNBUSD",
                                                    "width": 350,
                                                    "colorTheme": "light",
                                                    "isTransparent": false,
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                    <div class="col-12">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                                {
                                                    "symbol": "BITSTAMP:XRPUSD",
                                                    "width": 350,
                                                    "colorTheme": "light",
                                                    "isTransparent": false,
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-9 col-sm-7 col-md-8">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                        {
                                            "feedMode": "market",
                                            "market": "crypto",
                                            "colorTheme": "light",
                                            "isTransparent": false,
                                            "displayMode": "regular",
                                            "width": 750,
                                            "height": 830,
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div><!-- .container -->
            </section><!-- .section -->
            <section class="section section-feature pb-0 bg-lighter" id="feature">
                <div class="container">
                    <div class="row flex-row-reverse align-items-center justify-content-between g-gs">
                        <div class="col-lg-5">
                            <div class="img-block img-block-s1 right">
                                <img src="./images/gfx/b.png" alt="img">
                            </div><!-- .img-block -->
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="text-block">
                                <h2 class="title">Some unique features and awesome experience</h2>
                                <div class="g-gs">
                                    <div class="service service-s3">
                                        <div class="service-icon styled-icon styled-icon-s3 text-primary">
<img src="{{ asset('images/easy.png') }}" alt="">
                                        </div>
                                        <div class="service-text">
                                            <h4 class="title">Easy to manage</h4>
                                            <p>Our crypto dashboard is very easy to manage.</p>
                                        </div>
                                    </div><!-- .service -->
                                    <div class="service service-s3">
                                        <div class="service-icon styled-icon styled-icon-s3 text-success">
                                            <svg x="0px" y="0px" viewBox="0 0 512 512" style="fill:currentColor"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M346.8,337.2h-200c-2.1,0-4.2,0.8-5.7,2.3l-96,96l11.3,11.3l93.7-93.7H338c-1.7,9.5-6.9,24-23.2,24h-88v16h88
   c31.6,0,40-31.4,40-48C354.8,340.8,351.2,337.2,346.8,337.2z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M448.5,283.5c-3.1-3.1-8.2-3.1-11.3,0l-72,72l11.3,11.3l65.7-65.7c10.8,14.4,8.6,34.7-5,46.4l-93.7,93.7H178.8
   c-2.1,0-4.2,0.8-5.7,2.3l-56,56l11.3,11.3l53.7-53.7h164.7c2.1,0,4.2-0.8,5.7-2.3l96-96C478.3,329,461.5,296.5,448.5,283.5z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M322.8,249.2c-7.5,0-14.4,2.6-19.8,6.9c-6.4-13.5-20.2-22.9-36.2-22.9s-29.8,9.4-36.2,22.9c-5.5-4.3-12.3-6.9-19.8-6.9
   c-17.7,0-32,14.3-32,32s14.3,32,32,32c10.8,0,20.3-5.3,26.1-13.5c7.3,8.3,18,13.5,29.9,13.5c11.9,0,22.6-5.2,29.9-13.5
   c5.8,8.2,15.3,13.5,26.1,13.5c17.7,0,32-14.3,32-32C354.8,263.5,340.5,249.2,322.8,249.2z M210.8,297.2c-8.8,0-16-7.2-16-16
   s7.2-16,16-16s16,7.2,16,16S219.7,297.2,210.8,297.2z M266.8,297.2c-13.3,0-24-10.7-24-24s10.7-24,24-24s24,10.7,24,24
   S280.1,297.2,266.8,297.2z M322.8,297.2c-8.8,0-16-7.2-16-16s7.2-16,16-16s16,7.2,16,16S331.7,297.2,322.8,297.2z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M464.5,107.5l-40-40l-11.3,11.3l26.3,26.3H330.8c-0.2,0-0.4,0-0.7,0c-8.7,0.2-15.5,7.3-15.3,16v48h16v-48h108.7
   l-26.3,26.3l11.3,11.3l40-40C467.6,115.7,467.6,110.6,464.5,107.5z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M272.5,3.5c-3.1-3.1-8.2-3.1-11.3,0l-40,40l11.3,11.3l26.3-26.3v124.7h16V28.5l26.3,26.3l11.3-11.3L272.5,3.5z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="314.8" y="185.2" width="16" height="48" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="202.8" y="185.2" width="16" height="48" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="258.8" y="169.2" width="16" height="48" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M202.8,105.2H94.1l26.3-26.3l-11.3-11.3l-40,40c-3.1,3.1-3.1,8.2,0,11.3l40,40l11.3-11.3l-26.3-26.3h108.7v48h16v-48
   c0-0.2,0-0.4,0-0.7C218.6,111.9,211.5,105,202.8,105.2z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="service-text">
                                            <h4 class="title">Instant Sale</h4>
                                            <p>Place your cryptocurrency for sale, and have us sell it for you within few hours.</p>
                                        </div>
                                    </div><!-- .service -->
                                </div>
                            </div><!-- .text-block -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .section -->
            <section class="section section-testimonial pb-0" id="reviews">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-md-8 col-10">
                            <div class="section-head">
                                <h2 class="title">This is what our esteemed clients have to say for us</h2>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row g-gs justify-content-center">
                        <div class="col-lg-6">
                            <div class="card card-shadow round-xl">
                                <div class="card-inner card-inner-lg">
                                    <div class="review review-s2">
                                        <div class="review-portrait review-portrait-s1">
                                            <div class="portrait portrait-s1">
                                                <img src="./images/client/client-a.png" alt="">
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <div class="review-rating rating rating-sm">
                                                <ul class="rating-stars">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="review-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. </p>
                                                <h6 class="review-name text-dark">Samuel Mishin</h6>
                                            </div>
                                        </div>
                                    </div><!-- .review -->
                                </div>
                            </div><!-- .testimonial-block -->
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="card card-shadow round-xl">
                                <div class="card-inner card-inner-lg">
                                    <div class="review review-s2">
                                        <div class="review-portrait review-portrait-s1">
                                            <div class="portrait portrait-s1">
                                                <img src="./images/client/client-b.png" alt="">
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <div class="review-rating rating rating-sm">
                                                <ul class="rating-stars">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                </ul>
                                            </div>
                                            <div class="review-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. </p>
                                                <h6 class="review-name text-dark">Samuel Mishin</h6>
                                            </div>
                                        </div><!-- .review -->
                                    </div>
                                </div>
                            </div><!-- .testimonial-block -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .section -->
            <section class="section section-cta">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="text-block is-compact">
                                <div class="img-block h-150px mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                        <path
                                            d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z"
                                            transform="translate(0 -1)" fill="#f6faff" />
                                        <rect x="18" y="32" width="84" height="50" rx="4"
                                            ry="4" fill="#fff" />
                                        <rect x="26" y="44" width="20" height="12" rx="1"
                                            ry="1" fill="#e5effe" />
                                        <rect x="50" y="44" width="20" height="12" rx="1"
                                            ry="1" fill="#e5effe" />
                                        <rect x="74" y="44" width="20" height="12" rx="1"
                                            ry="1" fill="#e5effe" />
                                        <rect x="38" y="60" width="20" height="12" rx="1"
                                            ry="1" fill="#e5effe" />
                                        <rect x="62" y="60" width="20" height="12" rx="1"
                                            ry="1" fill="#e5effe" />
                                        <path
                                            d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z"
                                            transform="translate(0 -1)" fill="#798bff" />
                                        <path
                                            d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z"
                                            transform="translate(0 -1)" fill="#6576ff" />
                                        <path
                                            d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z"
                                            transform="translate(0 -1)" fill="none" stroke="#6576ff"
                                            stroke-miterlimit="10" stroke-width="2" />
                                        <line x1="40" y1="22" x2="57" y2="22"
                                            fill="none" stroke="#fffffe" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="27" x2="57" y2="27"
                                            fill="none" stroke="#fffffe" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="32" x2="50" y2="32"
                                            fill="none" stroke="#fffffe" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5"
                                            fill="none" stroke="#9cabff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5"
                                            fill="none" stroke="#9cabff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5"
                                            fill="none" stroke="#9cabff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5"
                                            fill="none" stroke="#9cabff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff"
                                            stroke-miterlimit="10" />
                                        <circle cx="24" cy="23" r="2.5" fill="none"
                                            stroke="#9cabff" stroke-miterlimit="10" />
                                    </svg>
                                </div>
                                <h2 class="title">Get Started with Dashlite</h2>
                                <p class="lead">Over 60 million people have chosen Dashlite to power the place on the
                                    web they call “home” — join the family.</p>
                                <ul class="btns-inline justify-center">
                                    <li>
                                        <a href="#" target="_blank" class="btn btn-xl btn-primary">Get
                                            Started.</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- ,col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .section -->
            <footer class="footer bg-lighter" id="footer">
                <div class="container">
                    <div class="row g-3 align-items-center justify-content-md-between py-4 py-md-5">
                        <div class="col-md-3">
                            <div class="footer-logo">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .footer-logo -->
                        </div><!-- .col -->
                        <div class="col-md-9 d-flex justify-content-md-end">
                            <ul class="link-inline gx-4">
                                <li><a href="#">How it works</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul><!-- .footer-nav -->
                        </div><!-- .col -->
                    </div>
                    <hr class="hr border-light mb-0 mt-n1">
                    <div class="row g-3 align-items-center justify-content-md-between py-4">
                        <div class="col-md-8">
                            <div class="text-base">Copyright &copy; 2022 Dashlite. Template Made by <a
                                    class="text-base fw-bold" href="#">Softnio</a></div>
                        </div><!-- .col -->
                        <div class="col-md-4 d-flex justify-content-md-end">
                            <ul class="social">
                                <li><a href="#"><em class="icon ni ni-twitter"></em></a></li>
                                <li><a href="#"><em class="icon ni ni-facebook-f"></em></a></li>
                                <li><a href="#"><em class="icon ni ni-instagram"></em></a></li>
                                <li><a href="#"><em class="icon ni ni-pinterest"></em></a></li>
                            </ul><!-- .footer-icon -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </footer><!-- .footer -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets2/js/bundle.js?ver=3.1.2"></script>
    <script src="./assets2/js/scripts.js?ver=3.1.2"></script>
</body>

</html>
