@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none mb-5" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Your Transaction History</h2>
                        <div class="nk-block-des">
                            <p>See full list of your transactions in your account</p>
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-sm">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h6 class="nk-block-title">All Transactions</h6>
                        </div>
                    </div>
                    <div class="search-wrap search-wrap-extend" data-search="search">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by user">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div><!-- .search-wrap -->
                </div><!-- .nk-block-head -->
                <div class="tranx-list tranx-list-stretch card card-bordered">
                    @foreach ($tranx as $t)
                                            <div class="tranx-item">
                            <div class="tranx-col">
                                <div class="tranx-info">
                                    <div class="tranx-data">
                                        <div class="tranx-label text-capitalize">{{ $t->tranx_type }}</div>
                                        <div class="tranx-date">{{ $t->created_at->toFormattedDateString() }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tranx-col">
                                <div class="tranx-amount">
                                    <div class="number">{{ $t->amount }} <span class="currency currency-btc">{{ $t->abbr }}</span></div>
                                    <div class="number-sm">{{ number_format($t->price, 2) }} <span class="currency currency-usd">USD</span></div>
                                </div>
                            </div>
                        </div><!-- .nk-tranx-item -->    
                    @endforeach

                </div><!-- .card -->
            </div>
        </div>
    </div>
</div> 
@endsection