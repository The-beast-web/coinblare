@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
<div class="nk-content nk-content-fluid mt-5 d-none" id="market">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">My Sales</h3>
                        <div class="nk-block-des text-soft">
                            <p>You have total 937 orders.</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner p-0">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Cryptocurrency</span>
                                            </span>
                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-md-none">Date</span>
                                                <span class="d-none d-md-block">
                                                    <span>Unit</span>
                                                    <span>Bought By</span>
                                                </span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-amount is-alt">
                                            <span class="tb-tnx-total">Price</span>
                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                        </th>
                                        <th class="tb-tnx-action">
                                            <span>&nbsp;</span>
                                        </th>
                                    </tr><!-- tb-tnx-item -->
                                </thead>
                                <tbody>
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4947</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-05-2019</span>
                                                <span class="date">10-13-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status">
                                                <span class="badge badge-dot bg-warning">Due</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4904</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Maintenance Year Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">06-19-2019</span>
                                                <span class="date">06-26-2019</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4829</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Year Subscrition</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">10-04-2018</span>
                                                <span class="date">10-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$599.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4830</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Anniversary Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-04-2018</span>
                                                <span class="date">14-12-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$399.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4840</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Enterprize Coverage Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">Cancel</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4844</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Manual Subscription Adjustments</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4847</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Automatic Subscription Adjustments</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4748</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Tiered Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4748</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Tiered Subscription</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <a href="#"><span>4748</span></a>
                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">Flexible Subscription Plan</span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">12-08-2018</span>
                                                <span class="date">13-22-2018</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">$99.00</span>
                                            </div>
                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a href="#">View</a></li>
                                                        <li><a href="#">Edit</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><!-- tb-tnx-item -->
                                </tbody>
                            </table>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul><!-- .pagination -->
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
@endsection