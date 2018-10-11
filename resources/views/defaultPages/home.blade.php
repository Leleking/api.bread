

@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="/assets/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="/assets/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="/assets/examples/css/dashboard/ecommerce.css">
@endsection
@section('content')
<div class="page">
    <div class="page-content container-fluid">
      <div class="row">
        <!-- First Row -->
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-xs btn-warning">
                <i class="icon wb-shopping-cart"></i>
              </button>
              <span class="ml-15 font-weight-400">ORDERS</span>
              <div class="content-text text-center mb-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
            </i>
                <span class="font-size-40 font-weight-100">{{$orderCount}}</span>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-xs btn-danger">
                <i class="icon wb-user"></i>
              </button>
              <span class="ml-15 font-weight-400">INCOME</span>
              <div class="content-text text-center mb-0">
                <i class="text-success icon wb-triangle-down font-size-20">
            </i>
                <span class="font-size-40 font-weight-100">{{$income}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-xs btn-success">
                <i class="icon wb-eye"></i>
              </button>
              <span class="ml-15 font-weight-400">Pending</span>
              <div class="content-text text-center mb-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
            </i>
                <span class="font-size-40 font-weight-100">{{count($orderPending)}}</span>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-xs btn-primary">
                <i class="icon wb-user"></i>
              </button>
              <span class="ml-15 font-weight-400">CUSTOMERS</span>
              <div class="content-text text-center mb-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
            </i>
                <span class="font-size-40 font-weight-100">{{count(App\user::where('status',1)->where('isAdmin',0)->get())}}</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End First Row -->

        <!-- second Row -->
        <div class="col-12" id="ecommerceChartView">
          <div class="card card-shadow">
            <div class="card-header card-header-transparent py-20">
              <div class="btn-group dropdown">
                <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                <div class="dropdown-menu animate" role="menu">
                  <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">profit</a>
                </div>
              </div>
              <ul class="nav nav-pills nav-pills-rounded chart-action">
                <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
              </ul>
            </div>
            <div class="widget-content tab-content bg-white p-20">
              <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
              <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
              <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
            </div>
          </div>
        </div>
        <!-- End Second Row -->

        <!-- Third Row -->
        <!-- Third Left -->
        <div class="col-lg-12" id="ecommerceRecentOrder">
          <div class="card card-shadow table-row">
            <div class="card-header card-header-transparent py-20">
              <div class="btn-group dropdown">
                <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">RECENT ORDER</a>
                <div class="dropdown-menu animate" role="menu">
                  <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">profit</a>
                </div>
              </div>
            </div>
            <div class="card-block bg-white table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Purchased On</th>
                    <th>Status</th>
                    <th>Tracking No#</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($order as $orders)
                  <tr>
                    <td>
                     
                    </td>
                    <td>{{$orders->product->name}}</td>
                    <td>{{$orders->user->name}}</td>
                    <td>{{Carbon\carbon::parse($orders->created_at)->format('l jS \of F Y h:i A')}}</td>
                    <td>
                    @if(!$orders->status) <span class="badge badge-info font-weight-100"> Pending @elseif($orders->status == 1) <span class="badge badge-success font-weight-100"> Paid @else  <span class="badge badge-danger font-weight-100"> Return @endif</span>
                    </td>
                    <td>#98BC85SD84</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$order->links()}}
            </div>
          </div>
        </div>
        <!-- End Third Left -->

      
        <!-- End Third Row -->
      </div>
    </div>
  </div>
  <!-- End Page -->


    @endsection
@section('js')
<script src="/assets/vendor/chartist/chartist.min.js"></script>
<script src="/assets/vendor/aspieprogress/jquery-asPieProgress.js"></script>
<script src="/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
<script src="/assets/js/Plugin/aspieprogress.js"></script>
<script src="/assets/examples/js/dashboard/ecommerce.js"></script>
@endsection

   
   