@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><span>Account Setting</span></div>
                    <h2 class="nk-block-title fw-normal">My Profile</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em></span></p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <ul class="nk-nav nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#persona">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notifications">Notifications</a>
                </li>
            </ul><!-- .nk-menu -->
            <!-- NK-Block @s -->
<div class="tab-content">
    <div class="tab-pane active" id="persona">
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Personal Information</h5>
                    <div class="nk-block-des">
                        <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-data data-list">
                <div class="data-head">
                    <h6 class="overline-title">Basics</h6>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Full Name</span>
                        <span class="data-value">Abu Bin Ishtiyak</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- .data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Display Name</span>
                        <span class="data-value">Ishtiyak</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- .data-item -->
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Email</span>
                        <span class="data-value">info@softnio.com</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                </div><!-- .data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Phone Number</span>
                        <span class="data-value text-soft">Not add yet</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- .data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Date of Birth</span>
                        <span class="data-value">29 Feb, 1986</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- .data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                    <div class="data-col">
                        <span class="data-label">Address</span>
                        <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- .data-item -->
            </div><!-- .nk-data -->
            <div class="nk-data data-list">
                <div class="data-head">
                    <h6 class="overline-title">Preferences</h6>
                </div>
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Language</span>
                        <span class="data-value">English (United State)</span>
                    </div>
                    <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">Change Language</a></div>
                </div><!-- .data-item -->
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Dark Mode</span>
                    </div>
                    <div class="data-col data-col-end"><a class="dark-switch" href="#"></a></div>
                </div><!-- .data-item -->
            </div><!-- .nk-data -->
        </div>
    </div>
    <div class="tab-pane" id="security">
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Security Settings</h5>
                    <div class="nk-block-des">
                        <p>These settings are helps you keep your account secure.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="card card-bordered">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>Save my Activity Logs</h6>
                                <p>You can save your all activity logs including unusual activity detected.</p>
                            </div>
                            <div class="nk-block-actions">
                                <ul class="align-center gx-3">
                                    <li class="order-md-last d-inline-flex">
                                        <div class="custom-control custom-switch me-n2">
                                            <input type="checkbox" class="custom-control-input" id="activity-log">
                                            <label class="custom-control-label" for="activity-log"></label>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#recent-activity" class="link link-sm link-primary">See Recent Activity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>Security Pin Code</h6>
                                <p>You can set your pin code, we will ask you on your withdraw and transfer funds.</p>
                            </div>
                            <div class="nk-block-actions">
                                <div class="custom-control custom-switch me-n2">
                                    <input type="checkbox" class="custom-control-input" id="security-pin">
                                    <label class="custom-control-label" for="security-pin"></label>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>Change Password</h6>
                                <p>Set a unique password to protect your account.</p>
                            </div>
                            <div class="nk-block-actions flex-shrink-sm-0">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                    <li class="order-md-last">
                                        <a href="#" class="btn btn-primary">Change Password</a>
                                    </li>
                                    <li>
                                        <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>2FA Authentication <span class="badge bg-success">Enabled</span></h6>
                                <p>Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app. </p>
                            </div>
                            <div class="nk-block-actions">
                                <a href="#" class="btn btn-primary">Disable</a>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
    <div class="tab-pane" id="notifications">
        <div class="nk-block">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Security Alerts</h5>
                    <div class="nk-block-des">
                        <p>You will get only those email notification what you want.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block-content">
                <div class="gy-3">
                    <div class="g-item">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="unusual-activity">
                            <label class="custom-control-label" for="unusual-activity">Email me whenever encounter unusual activity</label>
                        </div>
                    </div>
                    <div class="g-item">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="new-browser">
                            <label class="custom-control-label" for="new-browser">Email me if new browser is used to sign in</label>
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block-contnet -->
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-head-content">
                    <h6 class="nk-block-title">News</h6>
                    <div class="nk-block-des">
                        <p>You will get only those email notification what you want.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block-content">
                <div class="gy-3">
                    <div class="g-item">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="latest-sale">
                            <label class="custom-control-label" for="latest-sale">Notify me by email about sales and latest news</label>
                        </div>
                    </div>
                    <div class="g-item">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="feature-update">
                            <label class="custom-control-label" for="feature-update">Email me about new features and updates</label>
                        </div>
                    </div>
                    <div class="g-item">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="account-tips">
                            <label class="custom-control-label" for="account-tips">Email me about tips on using account</label>
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block-content -->
        </div><!-- .nk-block -->
    </div>
</div>
            <!-- NK-Block @e -->
            <!-- //  Content End -->
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Display Name</label>
                                    <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth</label>
                                    <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your BirthDay">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="latest-sale">
                                    <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Address Line 2</label>
                                    <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">Country</label>
                                    <select class="form-select js-select2" id="address-county" data-ui="lg">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
<div class="modal fade" role="dialog" id="security-pin-modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Security PIN</h5>
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="pin-code">Your Security PIN</label>
                                    <input type="password" class="form-control form-control-lg" id="pin-code"  placeholder="Enter 6 digit security pin">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="button" disabled id="set-pin" class="btn btn-lg btn-primary">Update Address</button>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
@endsection