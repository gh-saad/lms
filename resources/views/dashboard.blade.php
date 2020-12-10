@extends('layouts.loggedinapp')

@section('title')
Dashboard
@endsection
@section('content')
<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
        @include('includes.sidebar')
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Admin Dashboard</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Dashboard summery Start Here -->
        <div class="row gutters-20">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-green ">
                                <i class="flaticon-classmates text-green"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Students</div>
                                <div class="item-number"><span class="counter" data-num="500">500</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-blue">
                                <i class="flaticon-multiple-users-silhouette text-blue"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Teachers</div>
                                <div class="item-number"><span class="counter" data-num="50">50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-yellow">
                                <i class="flaticon-couple text-orange"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Messages</div>
                                <div class="item-number"><span class="counter" data-num="830">830</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="dashboard-summery-one mg-b-20">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item-icon bg-light-red">
                                <i class="flaticon-money text-red"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-content">
                                <div class="item-title">Earnings</div>
                                <div class="item-number"><span>Rs. </span><span class="counter" data-num="0">0</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dashboard summery End Here -->
        <!-- Dashboard Content Start Here -->
        <div class="row gutters-20">
            <div class="col-12 col-xl-8 col-6-xxxl">
                <div class="card dashboard-card-one pd-b-20">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Earnings</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="earning-report">
                            <div class="item-content">
                                <div class="single-item pseudo-bg-blue">
                                    <h4>Total Collections</h4>
                                    <span>75,000</span>
                                </div>
                                <div class="single-item pseudo-bg-red">
                                    <h4>Fees Collection</h4>
                                    <span>15,000</span>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="date-dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">Jan 20, 2019</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.html#">Jan 20, 2019</a>
                                    <a class="dropdown-item" href="index.html#">Jan 20, 2021</a>
                                    <a class="dropdown-item" href="index.html#">Jan 20, 2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="earning-chart-wrap">
                            <canvas id="earning-line-chart" width="660" height="320"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-3-xxxl">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Invoices</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="index3.html#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index3.html#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="index3.html#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="index3.html#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-box-wrap">
                                    <form class="search-form-box">
                                        <div class="row gutters-8">
                                            <div class="col-lg-4 col-12 form-group">
                                                <input type="text" placeholder="Search by Exam ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Subject ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="dd/mm/yyyy"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-2 col-12 form-group">
                                                <button type="submit"
                                                    class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive result-table-box">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox"
                                                                class="form-check-input checkAll">
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Due Date</th>
                                                    <th>Amount</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Class Test</td>
                                                    <td>Paid</td>
                                                    <td>22/02/2019</td>
                                                    <td>22/03/2019</td>
                                                    <td>Rs. 2000</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="index3.html#" class="dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="index3.html#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-12 col-xl-7 col-4-xxxl">
                <div class="card dashboard-card-four pd-b-20">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Event Calender</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="calender-wrap">
                            <div id="fc-calender" class="fc-calender"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-xl-5 col-4-xxxl">
                <div class="card dashboard-card-six pd-b-20">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-17">
                            <div class="item-title">
                                <h3>Notice Board</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="index.html#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="index.html#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="notice-box-wrap">
                            <div class="notice-list">
                                <div class="post-date bg-skyblue">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag mene esom text of the
                                        printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-yellow">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-pink">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag meneesom.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-skyblue">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag mene esom text of the
                                        printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-yellow">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-pink">16 June, 2019</div>
                                <h6 class="notice-title"><a href="index.html#">Great School manag meneesom.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media End Here -->
        <!-- Footer Area Start Here -->
        @include('includes.footer')
        <!-- Footer Area End Here -->
    </div>
</div>
@endsection


