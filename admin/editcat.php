<!-- Edit category-->
<div class="modal fade" id="update_category<?php echo $fetch['id']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit <?php echo $fetch['name']?> category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="action.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>

                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $fetch['name']?>" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="editcat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete category -->
<div class="modal fade" id="delete_category<?php echo $fetch['id']?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete <?php echo $fetch['name']?> category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Do you want to delete <?php echo $fetch ['name']?> category?</div>
            <div class="modal-footer">
                <form action="action.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $fetch ['id']?>">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit" name="delcat">Delete</button>
                </form>

            </div>
        </div>
    </div>
</div>