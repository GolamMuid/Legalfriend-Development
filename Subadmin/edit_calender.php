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
                <h3>Edit Calenders</h3>
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
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                            <?php
                                include 'config.php';
                                    $sql = "SELECT * FROM `calenders` WHERE id = $id";
                                        $result=$conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $id = $row['id'];
                                           
                                            $image = $row['image'];
                                          
                                            $image_link = $row['image_link'];
                                            
                                       
                                        }
                                ?>
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/edit_calender_action.php?id=<?php echo $id; ?>" method="post">


                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Advertisement Image:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="file" name="logo" class="form-control" value="" >
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Advertisement Company:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="image_title" class="form-control" value="<?php echo $image_link; ?>">
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