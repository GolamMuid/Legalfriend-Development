<?php 

include_once 'config.php';
include_once 'header.php';
session_start();
if (isset($_SESSION["user"])){ 
    $id = $_GET['id'];
?>       
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Sub Admin</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                            <?php
                                include 'config.php';
                                    $sql = "SELECT * FROM `subadmin` WHERE id = $id";
                                        $result=$conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $username = $row['user_name'];
                                            $password = $row['password'];
                                           
                                            
                                       
                                        }
                                ?>
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/edit_subAdmin_action.php?id=<?php echo $id; ?>" method="post">


                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Name:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">User Name:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="user_name" class="form-control" value="<?php echo $username; ?>">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Password:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                        </div>
                      </div>



                     
                     
                      <div class="ln_solid"></div>

                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

            </div>
          </div>


              </div>
              
          </div>
        </div>
        <!-- /page content -->
<?php

} else{
  header("Location: login.php");
  ob_end_flush();
}
include 'footer.php'; 
?>     
    