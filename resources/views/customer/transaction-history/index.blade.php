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
                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em
                                        class="icon ni ni-arrow-left"></em></a>
                                <input type="text"
                                    class="form-control form-control-sm border-transparent form-focus-none"
                                    placeholder="Quick search by user">
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
                                        <div class="number">{{ $t->amount }} <span
                                                class="currency currency-btc">{{ $t->abbr }}</span></div>
                                        <div class="number-sm">{{ number_format($t->price, 2) }} <span
                                                class="currency currency-usd">USD</span></div>
                                    </div>
                                </div>
                                <div class="tranx-col">
                                    <div class="d-flex">
                                        <div>
                                            <a href="{{ route('customer.transaction-history.detail', $t->id) }}" class="btn btn-icon btn-trigger" data-bs-toggle="tooltip" title="View Full Detail">
                                                <em class="icon ni ni-eye"></em>
                                            </a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-icon btn-trigger" data-bs-toggle="tooltip" title="Download Detail">
                                                <em class="icon ni ni-download"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .nk-tranx-item -->
                        @endforeach
                        <div class="card-inner">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul><!-- .pagination -->
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </div>
@endsection
