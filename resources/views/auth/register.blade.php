@extends('auth.master')

@section('content')
    @include('customer.layout.preloader')
    <div class="nk-content d-none" id="market">
        <div class="nk-block nk-block-middle nk-auth-body wide-xs">
            <div class="brand-logo pb-4 text-center">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x"
                        alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Register</h4>
                            <div class="nk-block-des">
                                <p>Create New Dashlite Account</p>
                            </div>
                        </div>
                    </div>
                    <form id="register-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control form-control-lg required"
                                    id="name" placeholder="Enter your name" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <div class="form-control-wrap">
                                <input type="text" name="email" class="form-control form-control-lg required"
                                    id="email" placeholder="Enter your email address" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Passcode</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password" class="form-control form-control-lg required"
                                    id="password" placeholder="Enter your passcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password-confirm">Confirm Passcode</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                    data-target="password-confirm">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" name="password_confirmation"
                                    class="required form-control form-control-lg" id="password-confirm"
                                    placeholder="Enter your passcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input required" id="checkbox">
                                <label class="custom-control-label" for="checkbox">I agree to Dashlite <a
                                        href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="register" type="button" class="btn btn-lg btn-primary" disabled> <span
                                    id="load" class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span> <span id="reg">Register</span></button>
                        </div>
                    </form>
                    <div class="form-note-s2 text-center pt-4"> Already have an account?
                        <a href="{{ route('login') }}">
                            <strong>Sign in instead</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="alert alert-warning alert-dismissible fade show mx-3 d-none" id="error-alert" role="alert"
                    style="position: fixed; top: 10px;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <strong>Hey!</strong> Please fill in all the fields.
                </div>
            </div>
        </div>
        <div class="nk-footer nk-auth-footer-full">
            <div class="container wide-lg">
                <div class="row g-3">
                    <div class="col-lg-6 order-lg-last">
                        <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                    data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/english.png" alt=""
                                                    class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/spanish.png" alt=""
                                                    class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/french.png" alt=""
                                                    class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/turkey.png" alt=""
                                                    class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="nk-block-content text-center text-lg-left">
                            <p class="text-soft">&copy; 2022 Dashlite. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            $('#checkbox').on('click', function() {
                if ($('#checkbox').is(':checked')) {
                    $('#register').prop('disabled', false);
                } else {
                    $('#register').prop('disabled', true);
                }
            });

            $('#register').on('click', function() {
                if ($('#name').val() !== "" && $('#email').val() !== "" && $('#password').val() !== "" && $(
                        '#password-confirm').val() !== "") {
                    $('#load').removeClass('d-none');
                    $('#reg').html('Loading...');
                    $(this).prop('disabled', true);
                    $('#register-form').submit();
                } else {
                    $('#error-alert').removeClass('d-none');
                    setTimeout(function() {
                        $('#error-alert').addClass('d-none');
                    }, 3000);
                }
            });

            /* Name Validation */
            $('#name').on('focus', function() {
                if (!$(this).hasClass('is-valid')) {
                    $(this).addClass('is-invalid');
                }
            })
            $('#name').on('keydown, keyup', function() {
                if ($(this).val() !== "") {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                }
            });
            /* Email Validation */
            $('#email').on('focus', function() {
                if (!$(this).hasClass('is-valid')) {
                    $(this).addClass('is-invalid');
                }
            });
            $('#email').on('keydown, keyup', function() {
                if ($(this).val() !== "") {
                    $(this).addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                }
                if (!regex.test($(this).val())) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });
            /* Password Validation */
            $('#password').on('focus', function() {
                if (!$(this).hasClass('border-success')) {
                    $(this).addClass('error');
                }
            });
            $('#password').on('keydown. keyup', function() {
                if ($(this).val() !== "") {
                    $(this).addClass('border-success');
                } else {
                    $(this).removeClass('border-success');
                    $(this).addClass('error');
                }
                if ($(this).val().length < 8) {
                    $(this).removeClass('border-success');
                    $(this).addClass('error');
                }
            });
            $('#password-confirm').on('focus', function() {
                if (!$(this).hasClass('border-success')) {
                    $(this).addClass('error');
                }
            });
            $('#password-confirm').on('keydown, keyup', function() {
                if (!$(this).val().match($('#password').val())) {
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                    $(this).addClass('border-success');
                }
            });
        });
    </script>
@endpush
