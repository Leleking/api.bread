<div class="modal fade modal-danger" id="changeMark" aria-hidden="true"
                      aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Change Mark</h4>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to change the mark of the order</p>
                          </div>
                          <form name="status" action="/admin/orders/changeStatus" method="POST">
                            {{csrf_field()}}
                            <input type="text" value="" hidden name="item_id">
                            <div class="row">
                                <div class="col-md-6">
                                <select name="status" class="form-control" id="">
                                    <option value="0">Pending</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Returned</option>
                                </select>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <div>
                                            Please note, changing the status of the order will immediately affect the order
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="submit"  class="btn btn-primary">Yes</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
</div>
