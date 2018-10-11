<div class="modal fade modal-danger" id="delete" aria-hidden="true"
                      aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Delete product</h4>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to delete this product</p>
                          </div>
                          <form name="item">
                            {{csrf_field()}}
                            <input type="text" value="" hidden name="item_id">
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="submit"  id="submit" class="btn btn-primary">Yes</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
</div>
