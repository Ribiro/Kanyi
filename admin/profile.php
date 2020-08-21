<?php
include 'db.php';
include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/navbar.php';

?>

<?php

if(isset($_SESSION['error'])){
    echo "
                                              <div class='alert alert-danger text-center'>
                                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                <p>".$_SESSION['error']."</p> 
                                              </div>
                                            ";
    unset($_SESSION['error']);
}

if(isset($_SESSION['success'])){
    echo "
                                              <div class='alert alert-success text-center'>
                                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                <p>".$_SESSION['success']."</p> 
                                              </div>
                                            ";
    unset($_SESSION['success']);
}
?>
<?php
$sql = "SELECT * FROM admin WHERE admin_id=$_SESSION[uid]";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>
    <div class="container-fluid">
        <div class="container-fluid">
            <h3 class="mt-4 text-gray-600">Featured admin</h3>
        </div>
        <div class="row">
            <!-- Profile info -->
            <div class="col-lg-6">
                <div class="card shadow mb-4  prof">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Profile info</h6>
                        <button class=" pof float-right"  data-toggle="modal" data-target="#profile"><i class="fa fa-edit"></i> Edit profile</button>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Name: </h4>
                        <p><?php echo $row['fname'],' ',$row['lname']?></p>
                        <h4 class="small font-weight-bold">Email: </h4>
                        <p><?php echo $row['email']?></p>
                        <h4 class="small font-weight-bold">Contact: </h4>
                        <p><?php echo $row['contact']?></p>
                        <h4 class="small font-weight-bold">Address: </h4>
                        <p><?php echo $row['address']?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit profile-->
    <div class="modal fade" id="profile"">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit <?php echo $row['fname']?> vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="action.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">First Name</label>

                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="<?php echo $row['admin_id']?>">
                            <input type="text" class="form-control" id="name" name="firstname" value="<?php echo $row['fname']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Last Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="lastname" value="<?php echo $row['lname']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="repassword" class="col-sm-5 control-label">Confirm Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="repassword" name="repassword" value="<?php echo $row['password']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact" class="col-sm-3 control-label">Contact</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['contact']?>" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="editadmin"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php

include 'includes/scripts.php';
include 'includes/modal.php';