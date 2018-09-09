@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
<link rel="stylesheet" href="/assets/examples/css/tables/datatable.css">
<link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
@endsection
@section('content')
<div class="page">
    @include('layouts.partials.templates.pageHeader')
   

    <div class="page-content container-fluid">
        @include('layouts.partials.message.error')
        @include('layouts.partials.message.success')
        <div class="panel">
           
            <br>
            <header class="panel-heading">
              <div class="panel-actions"></div>
              <h3 class="panel-title">Orders</h3>
            </header>
            <div class="panel-body">
              <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                  <tr>
                    <th></th>
                    <th>Order Id</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Date Added</th>
                    <th>Date Modified</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($order as $orders)
                  <tr>
                      <td></td>
                      <td>{{$orders->id}}</td>
                      <th>{{$orders->user->name}}</th>
                      <td>@if(!$orders->status) Pending @elseif($orders->status == 1) Received @else Return @endif</td>
                      <td>
                        {{$orders->total}}
                      </td>
                      <td>{{Carbon\carbon::parse($orders->created_at)->format('l jS \of F Y h:i A')}}</td>
                      <td>{{Carbon\carbon::parse($orders->updated_at)->format('l jS \of F Y h:i A')}}</td>                      
                      <td>
                            <!-- Example split danger button -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-danger"><i class="icon wb-eye" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="icon wb-pencil" aria-hidden="true"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="icon wb-trash" aria-hidden="true"></i> Delete</a>
                            </div>
                      </td>
                      
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </div>
</div>
  <!-- End Page -->
  <!-- Modal -->
  <div class="modal fade" id="settings" aria-hidden="true" aria-labelledby="examplePositionSidebar"
    role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-sidebar modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">order Settings</h4>
        </div>
        <div class="modal-body">
            <div class="page-aside-inner page-aside-scroll">
                <div data-role="container">
                  <div data-role="content">
                    <section class="page-aside-section">
                      <h5 class="page-aside-title">Main</h5>
                      <div class="list-group">
                        <a class="list-group-item list-group-item-action active" href="javascript:void(0)" data-target="#addorder" data-toggle="modal">Add order</a>
                        <a class="list-group-item" href="javascript:void(0)">Activity</a>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <!---page-aside-inner-->
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-block">Generate Reports</button>
          <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
</div>
<div class="modal fade modal-danger" id="delete" aria-hidden="true"
                      aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Delete order</h4>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to delete this order</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary">Yes</button>
                          </div>
                        </div>
                      </div>
                    </div>

@endsection
@section('js')
<script src="/assets/vendor/datatables.net/jquery.dataTables.js"></script>
<script src="/assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/assets/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
<script src="/assets/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
<script src="/assets/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
<script src="/assets/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
<script src="/assets/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
<script src="/assets/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
<script src="/assets/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
<script src="/assets/vendor/datatables.net-buttons/buttons.html5.js"></script>
<script src="/assets/vendor/datatables.net-buttons/buttons.flash.js"></script>
<script src="/assets/vendor/datatables.net-buttons/buttons.print.js"></script>
<script src="/assets/vendor/datatables.net-buttons/buttons.colVis.js"></script>
<script src="/assets/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
<script src="/assets/vendor/asrange/jquery-asRange.min.js"></script>
<script src="/assets/vendor/bootbox/bootbox.js"></script>
<script src="/assets/js/Plugin/datatables.js"></script>
    
<script src="/assets/examples/js/tables/datatable.js"></script>
@endsection