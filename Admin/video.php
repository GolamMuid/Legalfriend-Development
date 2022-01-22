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
                <h3>Video URL Link</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Video URL Link manage</h2>
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
                   

                <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <!--<th>Serial</th>-->
                                   
                                    <th>Video Title</th>
                                    <th>Video Url Link</th>
                                
                                    <th>Action</th>
                                    <!-- <th>Salary</th> -->
                                  </tr>
                                </thead>


                                <tbody>
                                <?php
                                include 'config.php';
                                    $sql = "SELECT * FROM `videos`";
                                        $result=$conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $id = $row['id'];
                                           
                                            $headline = $row['headline'];
                                            $image_title = $row['image_link'];

                                       
                                            
                                ?>
                                  <tr>
                                 
                              
                                    <td><?php echo $headline; ?></td>
                       
                                     <td><?php echo $image_title; ?></td>
                                    
                                    
                                    <td><a href="edit_video.php?id=<?php echo $id; ?>"><button class="btn btn-primary">Change Video</button></a>
                                       
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
    
      
    