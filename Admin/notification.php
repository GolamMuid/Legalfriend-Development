<?php 

include_once 'config.php';
include_once 'header.php';
session_start();
if (isset($_SESSION["user"])){     
?>       
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Notification</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Notification Input and manage</h2>
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
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/notification_action.php" method="post">
                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="notification_date" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Topic Name:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="p_name" class="form-control">
                        </div>
                      </div>


                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">HeadLine:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="notification_headline" class="form-control">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <textarea rows="5" type="text" name="p_des" class="form-control"></textarea>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image(Width:120 x Height:80):</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="file" name="logo" class="form-control" required>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image Title:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="image_title" class="form-control">
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

                <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <!--<th>Serial</th>-->
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Headline</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Image Title</th>
                                    <th>Action</th>
                                    <!-- <th>Salary</th> -->
                                  </tr>
                                </thead>


                                <tbody>
                                <?php
                                include 'config.php';
                                    $sql = "SELECT * FROM `notifications`";
                                        $result=$conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $image = $row['image'];
                                            $des = $row['des'];
                                            $notifications_date = $row['notification_date'];
                                            $headline = $row['headline'];
                                            $image_title = $row['image_link'];

                                       
                                            
                                ?>
                                  <tr>
                                    <td><?php echo $notifications_date; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $headline; ?></td>
                                    <td><?php echo $des; ?></td>
                                    <td><img style="width:120px; height:80px;" src="<?php echo "Action/upload/".$image; ?>" rel="img"/></td>
                                     <td><?php echo $image_title; ?></td>
                                    
                                    
                                    <td><a href="edit_notification.php?id=<?php echo $id; ?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="Action/delete_notification_action.php?id=<?php echo $id; ?>"><button class="btn btn-primary">Delete</button></a>
                                    </td>
                                   
                                    
                                    <!-- <td>Tk.320,800</td> -->
                                  </tr>
                                <?php

                                        }
                                ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
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
    