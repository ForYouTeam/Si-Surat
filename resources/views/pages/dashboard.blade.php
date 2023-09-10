@extends('layout.base')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                <h4 class="text-danger">
                    <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                </h4>
                </div>
                <div class="float-right">
                <p class="card-text text-dark">Visitors</p>
                <h4 class="bold-text">65,650</h4>
                </div>
            </div>
            <p class="text-muted">
                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth
            </p>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                <h4 class="text-warning">
                    <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                </h4>
                </div>
                <div class="float-right">
                <p class="card-text text-dark">Orders</p>
                <h4 class="bold-text">656</h4>
                </div>
            </div>
            <p class="text-muted">
                <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Product-wise sales
            </p>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                <h4 class="text-success">
                    <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                </h4>
                </div>
                <div class="float-right">
                <p class="card-text text-dark">Revenue</p>
                <h4 class="bold-text">$65656</h4>
                </div>
            </div>
            <p class="text-muted">
                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Weekly Sales
            </p>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
            <div class="clearfix">
                <div class="float-left">
                <h4 class="text-primary">
                    <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                </h4>
                </div>
                <div class="float-right">
                <p class="card-text text-dark">Followers</p>
                <h4 class="bold-text">+62,500</h4>
                </div>
            </div>
            <p class="text-muted">
                <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
            </p>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="card-deck">
        <div class="card col-lg-12 px-0 mb-4">
        <div class="card-body">
            <h5 class="card-title">Last Billings</h5>
            <div class="table-responsive">
            <table class="table center-aligned-table">
                <thead>
                <tr class="text-primary">
                    <th>Order No</th>
                    <th>Product Name</th>
                    <th>Purchased On</th>
                    <th>Shipping Status</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>034</td>
                    <td>Iphone 7</td>
                    <td>12 May 2017</td>
                    <td>Dispatched</td>
                    <td>Credit card</td>
                    <td><label class="badge badge-success">Approved</label></td>
                    <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a>
                        <a href="#" class="btn btn-outline-warning btn-sm">Cancel</a>
                    </td>
                </tr>
                <tr class="">
                    <td>035</td>
                    <td>Galaxy S8</td>
                    <td>15 May 2017</td>
                    <td>Dispatched</td>
                    <td>Internet banking</td>
                    <td><label class="badge badge-warning">Pending</label></td>
                    <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                    <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                </tr>
                <tr class="">
                    <td>036</td>
                    <td>Amazon Echo</td>
                    <td>17 May 2017</td>
                    <td>Dispatched</td>
                    <td>Credit card</td>
                    <td><label class="badge badge-success">Approved</label></td>
                    <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                    <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                </tr>
                <tr class="">
                    <td>037</td>
                    <td>Google Pixel</td>
                    <td>17 May 2017</td>
                    <td>Dispatched</td>
                    <td>Cash on delivery</td>
                    <td><label class="badge badge-danger">Rejected</label></td>
                    <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                    <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                </tr>
                <tr class="">
                    <td>038</td>
                    <td>Mac Mini</td>
                    <td>19 May 2017</td>
                    <td>Dispatched</td>
                    <td>Debit card</td>
                    <td><label class="badge badge-success">Approved</label></td>
                    <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                    <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection