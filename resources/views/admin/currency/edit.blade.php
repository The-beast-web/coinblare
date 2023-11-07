@extends('admin.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="components-preview wide-sm mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Edit Currency</h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <form class="nk-stepper stepper-init is-alter" action="{{ route('admin.currency.edit.process', $currency->id) }}"
                                method="POST" id="stepper-two-factor-auth">
                                @csrf
                                <div class="card-inner">
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step">
                                                <ul class="row g-3">
                                                    <div class="col-12">
                                                        <div class="buysell-field form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label" style="font-size: 23px;"
                                                                    for="buysell-amount">Country</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-number"
                                                                    id="buysell-amount" name="country" placeholder="Nigeria"
                                                                    autocomplete="off" value="{{ old('country', $currency->country) }}">
                                                                <div class="form-dropdown">
                                                                    <div class="text"><em class="ni ni-flag"></em></div>
                                                                </div>
                                                            </div>
                                                            @error('country')
                                                                <i class="text-danger">{{ $message }}</i>
                                                            @enderror
                                                        </div><!-- .buysell-field -->
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="buysell-field form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label" style="font-size: 23px;"
                                                                    for="buysell-amount">Currency</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-number"
                                                                    id="buysell-amount" name="currency" placeholder="Nigerian Naira"
                                                                    autocomplete="off" value="{{ old('currency', $currency->currency) }}">
                                                                <div class="form-dropdown">
                                                                    <div class="text"><em class="ni ni-coin"></em></div>
                                                                </div>
                                                            </div>
                                                            @error('currency')
                                                                <i class="text-danger">{{ $message }}</i>
                                                            @enderror
                                                        </div><!-- .buysell-field -->
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="buysell-field form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label" style="font-size: 23px;"
                                                                    for="buysell-amount">Currency Abbr</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-number"
                                                                    id="buysell-amount" name="currency_abbr" placeholder="NGN"
                                                                    autocomplete="off" value="{{ old('currency_abbr', $currency->currency_abbr) }}">
                                                                <div class="form-dropdown">
                                                                    <div class="text">ABC</div>
                                                                </div>
                                                            </div>
                                                            @error('currency_abbr')
                                                                <i class="text-danger">{{ $message }}</i>
                                                            @enderror
                                                        </div><!-- .buysell-field -->
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                            <li class="step-next">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                <a href="{{ route('admin.currency.index') }}" class="btn btn-warning">Back</a>
                                            </li>
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