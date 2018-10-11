@extends('layouts.app')
@section('content')
<div class="page">
@include('layouts.partials.templates.pageHeader')

 <!-- Example Contextual -->
 <div class="row">
          <div class="col-md-4">
            <div class="panel panel-primary panel-line">
              <div class="panel-heading">
                <h3 class="panel-title">  <a href="/admin/reports/sales">Sales Report</a></h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-success panel-line">
              <div class="panel-heading">
                <h3 class="panel-title">Products Purchased Report</h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-info panel-line">
              <div class="panel-heading">
                <h3 class="panel-title">Returns Report</h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-bordered panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">AI Report</h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-bordered panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Coupons Report - <small><span class="btn btn-warning">offline</span></small></h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-bordered panel-dark">
              <div class="panel-heading">
                <h3 class="panel-title">General Report</h3>
              </div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
            </div>
          </div>
        </div>
        <!-- End Example Contextual -->
</div>

@endsection