@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/assets/examples/css/apps/contacts.css">
<link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
@endsection
@section('content')
<div class="page bg-white">
       
  
        <!-- Contacts Content -->
        <div class="page-main">
  
          <!-- Contacts Content Header -->
          <div class="page-header">
            <h1 class="page-title">Contact List</h1>
            <div class="page-header-actions">
              <form>
                <div class="input-search input-search-dark">
                  <i class="input-search-icon wb-search" aria-hidden="true"></i>
                  <input type="text" class="form-control" name="" placeholder="Search...">
                </div>
              </form>
            </div>
          </div>
  
          <!-- Contacts Content -->
          <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">
  
            <!-- Actions -->
            <div class="page-content-actions">
              <div class="float-right">
                <div class="dropdown">
                  <button type="button" class="btn btn-pure" data-toggle="dropdown" aria-expanded="false">
                    More
                    <span class="icon wb-chevron-down-mini" aria-hidden="true"></span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)">Send Mail to all</a>
                    <a class="dropdown-item" href="javascript:void(0)">More</a>
                  </div>
                </div>
                <button type="button" class="btn btn-outline btn-default btn-md empty-btn">Send Mail</button>
              </div>
              <div class="btn-group">
                <div class="dropdown">
                  <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
                    type="button"><i class="icon wb-folder" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)">work</a>
                    <a class="dropdown-item" href="javascript:void(0)">Family</a>
                    <a class="dropdown-item" href="javascript:void(0)">Private</a>
                    <a class="dropdown-item" href="javascript:void(0)">Friends</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)">Trash</a>
                    <a class="dropdown-item" href="javascript:void(0)">Spam</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
                    type="button"><i class="icon wb-tag" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)">work</a>
                    <a class="dropdown-item" href="javascript:void(0)">Family</a>
                    <a class="dropdown-item" href="javascript:void(0)">Private</a>
                    <a class="dropdown-item" href="javascript:void(0)">Friends</a>
                  </div>
                </div>
              </div>
            </div>
  
  
            <!-- Contacts -->
            <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr"
              data-selectable="selectable">
              <thead>
                <tr>
                  <th class="pre-cell"></th>
                  <th class="cell-30" scope="col">
                    <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                      <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                      />
                      <label for="select_all"></label>
                    </span>
                  </th>
                  <th class="cell-300" scope="col">Name</th>
                  <th class="cell-300" scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th class="cell-300" scope="col">Action</th>
                  <th class="suf-cell"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr data-url="panel.tpl" data-toggle="slidePanel">
                  <td class="pre-cell"></td>
                  <td class="cell-30">
                    <span class="checkbox-custom checkbox-primary checkbox-lg">
                      <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                      />
                      <label for="contacts_1"></label>
                    </span>
                  </td>
                  <td class="cell-300">
                    <a class="avatar" href="javascript:void(0)">
                      <img class="img-fluid"  src="/img/users/{{$user->detail->image}}" alt="...">
                    </a>
                    {{$user->name}}
                  </td>
                  <td class="cell-300">{{$user->detail->phone}}</td>
                  <td>{{$user->email}}</td>
                  <td class="suf-cell"></td>
                </tr>
                @endforeach
              </tbody>
            </table>
  
            <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
          </div>
        </div>
      </div>
  
      <!-- Site Action -->
      <div class="site-action" data-plugin="actionBtn">
        <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
          <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
          <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
        </button>
        <div class="site-action-buttons">
          <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
            <i class="icon wb-trash" aria-hidden="true"></i>
          </button>
          <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
            <i class="icon wb-folder" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <!-- End Site Action -->
      <!-- Add User Form -->
      <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
        role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
              <h4 class="modal-title">Create New Contact</h4>
            </div>
            <div class="modal-body">
              <form action="/admin/test">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="Address" />
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
              <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Add User Form -->
@endsection  
@section('js')

<script src="/assets/js/Plugin/sticky-header.js"></script>
<script src="/assets/js/Plugin/action-btn.js"></script>
<script src="/assets/js/Plugin/asselectable.js"></script>
<script src="/assets/js/Plugin/editlist.js"></script>
<script src="/assets/js/Plugin/aspaginator.js"></script>
<script src="/assets/js/Plugin/animate-list.js"></script>
<script src="/assets/js/Plugin/jquery-placeholder.js"></script>
<script src="/assets/js/Plugin/material.js"></script>
<script src="/assets/js/Plugin/selectable.js"></script>
<script src="/assets/js/Plugin/bootbox.js"></script>
<script src="/assets/js/BaseApp.js"></script>
<script src="/assets/js/App/Contacts.js"></script>

<script src="/assets/examples/js/apps/contacts.js"></script>

@endsection