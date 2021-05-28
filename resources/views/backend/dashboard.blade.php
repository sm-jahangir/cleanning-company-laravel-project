@extends('layouts.backend.app')
@section('MainBackendContent')
    
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Sales Overview</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to DashLite Dashboard Template.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#"
                                                    class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                    data-toggle="dropdown"><em
                                                        class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                            class="d-none d-md-inline">Last</span> 30
                                                        Days</span><em
                                                        class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 30 Days</span></a>
                                                        </li>
                                                        <li><a href="#"><span>Last 6 Months</span></a>
                                                        </li>
                                                        <li><a href="#"><span>Last 1 Years</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="#"
                                                class="btn btn-primary"><em
                                                    class="icon ni ni-reports"></em><span>Reports</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-6">
                            <div class="row g-gs">
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start mb-2">
                                                <div class="card-title">
                                                    <h6 class="title">Sales Revenue</h6>
                                                    <p>In last 30 days revenue from subscription.</p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help-fill"
                                                        data-toggle="tooltip" data-placement="left"
                                                        title="Revenue from subscription"></em>
                                                </div>
                                            </div>
                                            <div
                                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                    <div class="nk-sale-data">
                                                        <span class="amount">14,299.59 <span
                                                                class="change down text-danger"><em
                                                                    class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                        <span class="sub-title">This Month</span>
                                                    </div>
                                                    <div class="nk-sale-data">
                                                        <span class="amount">7,299.59 <span
                                                                class="change up text-success"><em
                                                                    class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                        <span class="sub-title">This Week</span>
                                                    </div>
                                                </div>
                                                <div class="nk-sales-ck sales-revenue">
                                                    <canvas class="sales-bar-chart"
                                                        id="salesRevenue"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-6 col-xxl-12">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Active Subscriptions</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill"
                                                                data-toggle="tooltip"
                                                                data-placement="left"
                                                                title="Total active subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">9.69K</span>
                                                            <span class="sub-title"><span
                                                                    class="change down text-danger"><em
                                                                        class="icon ni ni-arrow-long-down"></em>1.93%</span>since
                                                                last month</span>
                                                        </div>
                                                        <div class="nk-sales-ck">
                                                            <canvas class="sales-bar-chart"
                                                                id="activeSubscription"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Avg Subscriptions</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill"
                                                                data-toggle="tooltip"
                                                                data-placement="left"
                                                                title="Daily Avg. subscription"></em>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                        <div class="nk-sale-data">
                                                            <span class="amount">346.2</span>
                                                            <span class="sub-title"><span
                                                                    class="change up text-success"><em
                                                                        class="icon ni ni-arrow-long-up"></em>2.45%</span>since
                                                                last week</span>
                                                        </div>
                                                        <div class="nk-sales-ck">
                                                            <canvas class="sales-bar-chart"
                                                                id="totalSubscription"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->

                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection