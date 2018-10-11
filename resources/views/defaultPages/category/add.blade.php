
    <!-- Modal -->
    <div class="modal fade" id="addCategory" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content" action="/admin/category/add"  method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Add New Category</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xl-12 form-group">
                <input type="text" required class="form-control" name="name" placeholder="Category Name">
              </div>
              <div class="col-xl-12 form-group">
                <textarea class="form-control" required name="details" rows="5" placeholder="Details"></textarea>
              </div>
              <div class="col-md-12 float-left">
                <button class="btn btn-primary btn-outline" type="submit">Add Category</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Modal -->
  