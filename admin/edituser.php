<!--Edit  user-->
<div class="modal fade" id="edituser<?php echo $fetch['user_id']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit <?php echo $fetch['fname']?>  user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="action.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">First Name</label>

                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="<?php echo $fetch['user_id']?>">
                            <input type="text" class="form-control" id="name" name="firstname" value="<?php echo $fetch['fname']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Last Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="lastname" value="<?php echo $fetch['lname']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $fetch['email']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $fetch['password']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="repassword" class="col-sm-5 control-label">Confirm Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="repassword" name="repassword" value="<?php echo $fetch['password']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $fetch['address']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact" class="col-sm-3 control-label">Contact</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $fetch['contact']?>" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="edituser"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete user -->
<div class="modal fade" id="deleteuser<?php echo $fetch['user_id']?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete user <?php echo $fetch['fname']?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Do you want to delete user <?php echo $fetch ['fname']?> <?php echo $fetch ['lname']?>?</div>
            <div class="modal-footer">
                <form action="action.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $fetch ['user_id']?>">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit" name="deluser">Delete</button>
                </form>

            </div>
        </div>
    </div>
</div>