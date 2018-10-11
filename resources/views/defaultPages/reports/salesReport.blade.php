@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/assets/vendor/morris/morris.css">


@endsection
@section('content')
<div class="page">
    @include('layouts.partials.templates.pageHeader')
     

      <div class="page-content container-fluid">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body">
            <div class="row row-lg">
              <div class="col-lg-6">
              <!-- Example Donut -->
                <div class="example-wrap">
                  <h4 class="example-title">Donut</h4>
                  <p>Donut chart showing in-store sales,payment on delivery, and order with mobile money sales</p>
                  <div class="example">
                    <div id="exampleMorrisDonut"></div>
                  </div>
                </div>
                <!-- End Example Donut -->
              </div>

              <div class="col-lg-6">
              <div class="panel">
          <div class="panel-body">
            <form class="page-search-form" role="search">
            <div class="row">
              <div class="input-search input-search-dark col-md-6">
                <center><label for="from">From</label></center>
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="date" class="form-control" id="inputSearch" name="from" placeholder="dd-mm-yy">
                <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
              </div>
              <div class="input-search input-search-dark col-md-6">
                <center><label for="to">To</label></center>                
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="date" class="form-control" id="inputSearch" name="to" placeholder="dd-mm-yy">
                <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
              </div>
            </div>
            </form>
            
          
            <nav>
              <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
            </nav>
          </div>
        </div>

              </div>
            </div>
          </div>
        </div>
        <!-- End Panel -->

        <!-- Panel -->
       
      </div>
    </div>
    <!-- End Page -->


@endsection
@section('js')
<script>
$(document).ready(function(){
    Morris.Donut({
      element: 'exampleMorrisDonut',
      data: [{
        label: "Payment on Delivery Sales",
        value: 12
      }, {
        label: "In-Store Sales",
        value: 1
      }, 
      {
        label: "Order Sales",
        value: 1
      }],
      // barSizeRatio: 0.35,
      resize: true,
      colors: [Config.colors("red", 500), Config.colors("primary", 500), Config.colors("grey", 400)]
    });
})
</script>

<script src="/assets/vendor/raphael/raphael.min.js"></script>
        <script src="/assets/vendor/morris/morris.min.js"></script>

@endsection