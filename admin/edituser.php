
    <?php
session_start();
include("../db.php");
$user_id=$_REQUEST['user_id'];
// $result=mysqli_query($con,"select user_id,first_name,last_name, email, password from user_info where user_id='$user_id'")or die ("query 1 incorrect.......");
// list($user_id,$first_name,$last_name,$email,$user_password)=mysqli_fetch_array($result);

    // $sql ="SELECT * FROM `user_info` where user_id=$user_id";
    // $rows=Query($sql);
    // $row=mysqli_fetch_array($rows);
    // if($row)
    // {
    //   $user_id=$row['user_id'];
    //   $first_name=$row['first_name'];
    //   $last_name=$row['last_name'];
    //   $email=$row['email'];
    //   $password=$row['password'];
    // }

    $sql ="SELECT * FROM `user_info` where user_id=$user_id";
    $rows=Query($sql);
    $row=mysqli_fetch_array($rows);
    if($row)
    {
      $user_id=$row['user_id'];
      $first_name=$row['first_name'];
      $last_name=$row['last_name'];
      $email=$row['email'];
      $password=$row['password'];
    }
    
      if(isset($_POST['btn_save'])) 
      {
          
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
        
      $sql="update user_info set `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `password`='$password' where `user_id`='$user_id'";
    Query($sql);
      header("location: manageuser.php");

      }
    

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit User</h5>
              </div>

              
              <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>First name</label>
                        <input type="text" id="first_name" name="first_name"  class="form-control" value="<?php echo $first_name; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $last_name; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  id="email" name="email" class="form-control" value="<?php echo $email; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                      </div>
                    </div>
                  
                  
                  
                
                </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      <?php
include "footer.php";
?>