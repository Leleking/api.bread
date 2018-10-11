@extends('layouts.app')
@section('css')
<div class="page">
<div class="page-content container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <!-- Card -->
        <div class="card card-block text-center  bg-primary">
          <a href="/admin/settings/add/admin">
            <h4 class="card-title"></h4>
            <p class="card-text">Add New Admin</p>
            <p class="card-text">
              <small class="text-muted"></small>
            </p>
          </a>
        </div>
        <!-- End Card -->
        
      </div>

        <div class="col-xl-3 col-lg-6">
        <!-- Card -->
        <div class="card card-block text-center">
          <a href="/admin/settings/view/admin">
            <h4 class="card-title"></h4>
            <p class="card-text">View Administrators</p>
            <p class="card-text">
              <small class="text-muted"></small>
            </p>
          </a>
          </div>
        <!-- End Card -->
       </div>
        <div class="col-xl-3 col-lg-6">
            <!-- Card -->
            <div class="card card-block text-center">
                <h4 class="card-title"></h4>
                <p class="card-text">View Administrators</p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            <!-- End Card -->
        </div>

     
    </div>
  </div>
</div>
<!-- End Page -->

@endsection