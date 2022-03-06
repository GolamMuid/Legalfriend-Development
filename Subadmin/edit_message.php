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
                <h3>Message</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Service Input and Show</h2>
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
                                    $sql = "SELECT * FROM `messages` WHERE id = $id";
                                        $result=$conn->query($sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $id = $row['id'];
                                            $message_date = $row['message_date'];
                                           $image = $row['image'];
                                             $name = $row['name'];
                                             $designation = $row['designation'];
                                            $address = $row['address'];
                                             $headline = $row['headline'];
                                              $body = $row['body'];
                                              $topic = $row['topic'];
                                              $url = $row['url_link'];
                                            
                                       
                                        }
                                ?>
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/edit_message_action.php?id=<?php echo $id; ?>" method="post">

                      <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Date: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="date" name="message_date" value="<?php echo $message_date; ?>" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Image: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
              <!--   <img style="width:120px; height: 80px;" src="<?php echo "Action/upload/".$image; ?>" rel="img" ></br> -->
                <input type="file" name="message_image"" class="form-control">
              </div>
            </div>
            
              <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">URL LINK: 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="url_link" value="<?php echo $url; ?>" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Speaker Name: 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="message_speaker_name" value="<?php echo $name; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Speaker Designation: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="message_speaker_designation" value="<?php echo $designation; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Speaker Address: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="message_speaker_address" value="<?php echo $address; ?>" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Message Headline: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="Message_headline" value="<?php echo $headline; ?>" class="form-control">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Topic: </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="text" name="topic" value="<?php echo $topic; ?>" class="form-control">
              </div>
            </div>
            
            
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Message Description</label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <textarea rows="5" type="text" name="message_description" class="form-control" ><?php echo $body; ?></textarea>
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
    