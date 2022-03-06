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
                <h3>About Us</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                
                </div>

                <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <!--<th>Serial</th>-->
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Logo</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                    <!-- <th>Salary</th> -->
                                  </tr>
                                </thead>


                                <tbody>
                                <?php
                                include 'config.php';
                                    $sql = "SELECT * FROM `about`";
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
                                    
                                    
                                    <td><a href="edit_about.php?id=<?php echo $id; ?>"><button class="btn btn-primary">Change About Us</button></a>
                                       
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
    