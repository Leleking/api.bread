
    <!-- Modal -->
    <div class="modal fade" id="addProduct" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content" action="/admin/product/add"  method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Add New Product</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xl-4 form-group">
                <input type="text" class="form-control" name="name" placeholder="Product Name">
              </div>
              <div class="col-xl-4 form-group">
                <select name="category_id" id="" class="form-control">
                    @foreach($category as $categories)
                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="col-xl-4 form-group">
                <input type="text" class="form-control" name="pieces" placeholder="pieces">
              </div>
              <div class="col-xl-4 form-group">
                    <input type="text" class="form-control" name="price" placeholder="price">
              </div>
              <div class="col-xl-8 form-group">
                    <input type="file" class="form-control" name="image">
              </div>
              <div class="col-xl-12 form-group">
                <textarea class="form-control" name="details" rows="5" placeholder="Details"></textarea>
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
  