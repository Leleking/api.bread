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
        <div class="panel">
            <header class="panel-heading">
              <div class="panel-actions"></div>
              <h3 class="panel-title">Basic</h3>
            </header>
            <div class="panel-body">
              <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>User</th>
                    <th>Sort Order</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($category as $categories)
                  <tr>
                      <td>{{$categories->name}}</td>
                      <td>{{$categories->user->name}}</td>
                      <td>{{$categories->id}}</td>
                      <td>
                            <button type="button" class="btn btn-floating btn-info btn-xs"><small><i class="icon wb-edit"></i></small></button>
                            <button type="button" class="btn btn-floating btn-success btn-xs"><small><i class="icon wb-eye" aria-hidden="true"></i></small></button>
                            <button data-target="#delete" data-toggle="modal" type="button" class="btn btn-floating btn-danger btn-xs"><small><i class="icon wb-trash" aria-hidden="true"></i></small></button>
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
          <h4 class="modal-title">Category Settings</h4>
        </div>
        <div class="modal-body">
            <div class="page-aside-inner page-aside-scroll">
                <div data-role="container">
                  <div data-role="content">
                    <section class="page-aside-section">
                      <h5 class="page-aside-title">Main</h5>
                      <div class="list-group">
                        <a class="list-group-item list-group-item-action active" href="javascript:void(0)">Add Category</a>
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
                            <h4 class="modal-title">Delete Category</h4>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to delete this category</p>
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