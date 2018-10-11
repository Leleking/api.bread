@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/assets/vendor/blueimp-file-upload/jquery.fileupload.css">
<link rel="stylesheet" href="/assets/vendor/dropify/dropify.css">
@endsection
@section('content')
<div class="page">
@include('layouts.partials.templates.pageHeader')

    <!-- Modal -->
    @include('layouts.partials.message.error')
        @include('layouts.partials.message.success')
    <div>
      <div>
        <form class="modal-content" action="/admin/product/{{$product->id}}"  method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" hidden name="product_id" value="{{$product->id}}" >          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4>Edit Product - <strong>{{$product->name}}</strong></h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xl-3 form-group">
                <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Product Name">
              </div>
              <div class="col-xl-4 form-group">
                <select name="category_id" id="" class="form-control">
                <option value="{{$product->category_id}}" selected >{{App\model\category::find($product->category_id)->name}}</option>
                @foreach($category as $categories)
                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                @endforeach
                </select>
              </div>
              <div class="col-xl-3 form-group">
                <input type="text" class="form-control" value="{{$product->pieces}}" name="pieces" placeholder="pieces">
              </div>
              <div class="col-xl-2 form-group">
                    <input type="text" class="form-control" value="{{$product->price}}" name="price" placeholder="price">
              </div>
              <div class="col-xl-12 form-group">
                <textarea class="form-control" name="details" rows="5"  placeholder="Details">{{$product->details}}</textarea>
              </div>
              <div class="col-xl-12 form-group">
                  <div class="example-wrap">
                      <h4 class="example-title">Upload Product Image</h4>
                      <div class="example">
                        <input type="file" data-default-file="/img/product/{{$product->image}}" id="input-file-now" name="image" data-plugin="dropify" data-default-file=""
                        />
                      </div>
                    </div>
              </div>
              <div class="col-md-12 float-left">
                <button class="btn btn-primary btn-outline" type="submit">Add Product</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Modal -->
  
</div>
@endsection
@section('js')
<script src="/assets/vendor/dropify/dropify.min.js"></script>
<script src="/assets/js/Plugin/dropify.js"></script>
<script src="/assets/examples/js/forms/uploads.js"></script>

@endsection
