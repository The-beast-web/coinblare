@extends('customer.layout.master')

@section('content')
@include('customer.layout.preloader')
    <div class="nk-content nk-content-fluid mt-5 d-none" id="market">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Marketplace</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 95 matches.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-xl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="project">
                                        <div class="project-head">
                                            <a href="html/apps-kanban.html" class="project-title">
                                                <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                <div class="project-info">
                                                    <h6 class="title">Harrison Ehiogu</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="project-progress">
                                            <div class="project-progress-details">
                                                <div class="project-progress-task"><span>0.002 BTC</span></div>
                                                <div class="project-progress-percent"><em
                                                        class="ni ni-sign-kobo"></em>{{ number_format(20000) }}</div>
                                            </div>
                                        </div>
                                        <div class="project-meta mt-5">
                                            <span class="badge badge-dim bg-warning"><em
                                                    class="icon ni ni-clock"></em><span>5 Days ago</span></span>
                                        </div>
                                        <div class="text-center mt-5">
                                            <a href="{{ route('customer.detail') }}"
                                                class="btn btn-dim btn-outline-light"><em
                                                    class="ni ni-eye-fill"></em>&nbsp;&nbsp;View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="project">
                                        <div class="project-head">
                                            <a href="html/apps-kanban.html" class="project-title">
                                                <div class="user-avatar sq bg-purple"><span>JS</span></div>
                                                <div class="project-info">
                                                    <h6 class="title">Jon Snow</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="project-progress">
                                            <div class="project-progress-details">
                                                <div class="project-progress-task"><span>0.002 BTC</span></div>
                                                <div class="project-progress-percent"><em
                                                        class="ni ni-sign-kobo"></em>{{ number_format(13000) }}</div>
                                            </div>
                                        </div>
                                        <div class="project-meta mt-5">
                                            <span class="badge badge-dim bg-warning"><em
                                                    class="icon ni ni-clock"></em><span>5 Days ago</span></span>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-dim btn-outline-light"><em
                                                    class="ni ni-eye-fill"></em>&nbsp;&nbsp;View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="project">
                                        <div class="project-head">
                                            <a href="html/apps-kanban.html" class="project-title">
                                                <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                <div class="project-info">
                                                    <h6 class="title">Harrison Ehiogu</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="project-progress">
                                            <div class="project-progress-details">
                                                <div class="project-progress-task"><span>0.002 BTC</span></div>
                                                <div class="project-progress-percent"><em
                                                        class="ni ni-sign-kobo"></em>{{ number_format(20000) }}</div>
                                            </div>
                                        </div>
                                        <div class="project-meta mt-5">
                                            <span class="badge badge-dim bg-warning"><em
                                                    class="icon ni ni-clock"></em><span>5 Days ago</span></span>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-dim btn-outline-light"><em
                                                    class="ni ni-eye-fill"></em>&nbsp;&nbsp;View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
