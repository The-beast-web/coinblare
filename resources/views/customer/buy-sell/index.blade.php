@extends('customer.layout.master')

@section('content')
    @include('customer.layout.preloader')
    <div class="nk-content nk-content-fluid d-none mt-5 mb-5" id="market">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#buy">Buy
                                    {{ request()->session()->get('crypto_abbr') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sell">Sell
                                    {{ request()->session()->get('crypto_abbr') }}</a>
                            </li>
                        </ul>
                    </div><!-- .buysell-nav -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="buy">
                            <div class="buysell-title text-center">
                                <h3 class="title text-capitalize" style="font-family: Georgia;">Buy
                                    {{ request()->session()->get('crypto') }}</h3>
                            </div><!-- .buysell-title -->
                            <div class="buysell-block">
                                <form action="{{ route('customer.buy_coin') }}" id="purchase_form" method="POST" class="buysell-form">
                                    @csrf
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Amount to Buy</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="buysell-amount" name="amount_buy" placeholder="0.055960">
                                            <div class="form-dropdown">
                                                <div class="text">{{ request()->session()->get('crypto_abbr') }}</div>
                                            </div>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="submit" class="btn btn-lg btn-block btn-primary" disabled id="continue-buy">Buy <span
                                                id="buy-amount" class="d-none mx-1"
                                                style="width:auto;"></span>{{ request()->session()->get('crypto_abbr') }}</button>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action mt-4">
                                        <a href="{{ route('customer.buy-sell-select') }}"
                                            class="btn btn-lg btn-block btn-warning"><em class="ni ni-arrow-left"></em>
                                            Back</a>
                                    </div><!-- .buysell-field -->
                                </form><!-- .buysell-form -->
                            </div><!-- .buysell-block -->
                        </div>
                        <div class="tab-pane" id="sell">
                            <div class="buysell-title text-center">
                                <h3 class="title text-capitalize" style="font-family: Georgia;">Sell
                                    {{ request()->session()->get('crypto') }}</h3>
                            </div><!-- .buysell-title -->
                            <div class="buysell-block">
                                <form action="{{ route('customer.sell_coin') }}" id="sell-form" method="POST" class="buysell-form">
                                    @csrf
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Amount to Sell</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="sell-coin" name="sell_amount" placeholder="0.055960">
                                            <div class="form-dropdown">
                                                <div class="text">{{ request()->session()->get('crypto_abbr') }}</div>
                                            </div>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Price</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="number" class="form-control form-control-lg form-control-number"
                                                id="sell-amount" name="sell_price" value="" placeholder="1000">
                                            <div class="form-dropdown">
                                                <div class="text">USD</div>
                                            </div>
                                        </div>
                                        <div class="form-note-group">
                                            <span class="buysell-min form-note-alt">Service Fee :
                                                <span id="commission-sell">0</span> USD
                                            </span>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="buysell-pm-list">
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="payment_method"
                                                        id="pm-crypto" value="cryptobot" checked>
                                                    <label class="buysell-pm-label" for="pm-crypto">
                                                        <span class="pm-name">Cryptobot
                                                            {{ request()->session()->get('crypto') }} Wallet</span>
                                                    </label>
                                                </li>
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="payment_method"
                                                        id="pm-external" value="external">
                                                    <label class="buysell-pm-label" for="pm-external">
                                                        <span class="pm-name">External Wallet</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <button type="submit" class="btn btn-lg btn-block btn-primary" id="continue"
                                            disabled>Continue to Sell</button>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-action">
                                        <a href="{{ route('customer.buy-sell') }}"
                                            class="btn btn-lg btn-block btn-warning"><em class="ni ni-arrow-left"></em>
                                            Back</a>
                                    </div><!-- .buysell-field -->
                                </form><!-- .buysell-form -->
                            </div><!-- .buysell-block -->
                        </div>
                    </div>
                </div><!-- .buysell -->
            </div>
        </div>
    </div>
@endsection
@push('buy-coin')
    {!! $validator->selector('#purchase_form') !!}

    <script>
        $(document).ready(function() {

            $('#purchase_form').on('submit', function(e) {

                e.preventDefault();

                form = $(this);

                if (form.valid()) {

                    var f = form.find(':submit');

                    var button = f.html();

                    f.attr("disabled", "disabled")
                        .html(
                            '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
                        );

                    // $(form).ajaxSubmit();
                    $.ajax({
                        url: form.attr('action'),
                        type: "POST",
                        data: form.serialize(),
                        success: function(result) {

                            console.log(result);

                            f.removeAttr("disabled").html(button);

                            window.location.replace(result.redirect_url);

                        },
                        error: function(xhr, status, error) {

                            f.removeAttr("disabled").html(button);

                            $.each(xhr.responseJSON.errors, function(key, item) {
                                $('input[name = ' + key + ']')
                                    .removeClass('is-valid')
                                    .addClass('is-invalid')
                                    .after('<div class="invalid-feedback">' + item +
                                        '</div>');

                            });

                        }
                    });
                }
            });
        });

        $(document).ready(function() {

$('#sell-form').on('submit', function(e) {

    e.preventDefault();

    form = $(this);

    if (form.valid()) {

        var f = form.find(':submit');

        var button = f.html();

        f.attr("disabled", "disabled")
            .html(
                '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
            );

        // $(form).ajaxSubmit();
        $.ajax({
            url: form.attr('action'),
            type: "POST",
            data: form.serialize(),
            success: function(result) {

                console.log(result);

                f.removeAttr("disabled").html(button);

                window.location.replace(result.redirect_url);

            },
            error: function(xhr, status, error) {

                f.removeAttr("disabled").html(button);

                $.each(xhr.responseJSON.errors, function(key, item) {
                    $('input[name = ' + key + ']')
                        .removeClass('is-valid')
                        .addClass('is-invalid')
                        .after('<div class="invalid-feedback">' + item +
                            '</div>');

                });

            }
        });
    }
});
});
    </script>
@endpush
