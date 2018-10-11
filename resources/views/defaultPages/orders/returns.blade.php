@extends('layouts.app')
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
                    <th>Mark</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($order as $orders)
                  <tr>
                      <td></td>
                      <td>{{$orders->id}}</td>
                      <th>{{$orders->user->name}}</th>
                      <td>
                          @if(!$orders->status) <span class="badge badge-info font-weight-100"> Pending @elseif($orders->status == 1) <span class="badge badge-success font-weight-100"> Paid @else  <span class="badge badge-danger font-weight-100"> Return @endif</span>
                      </td>
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
                                <a class="dropdown-item" href="#"><i class="icon wb-pencil" aria-hidden="true"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="icon wb-trash" aria-hidden="true"></i> Delete</a>
                            </div>
                      </td>
                      <td>
                            <!-- Example split danger button -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-danger"><i class="icon wb-eye" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="icon wb-pencil" aria-hidden="true"></i>Pending</a>
                                <a class="dropdown-item" href="#"><i class="icon wb-trash" aria-hidden="true"></i> Approved</a>
                                <a class="dropdown-item" href="#"><i class="icon wb-trash" aria-hidden="true"></i> Returned</a>
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
@endsection