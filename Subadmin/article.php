<<?php 
	include 'config.php';
	include_once 'header.php';
	session_start();
	if(isset($_SESSION["user"]))
	{
		$sub_id = $_SESSION["user"];
	?>
	<!-- page content -->

<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Article</h3>
			</div>
		</div>



		<div class="clearfix"></div>
		<div class="row">
			<!-- form input mask -->
			<div class="col-md-12 col-sm-12" >
				<div class="x_panel">
					<div class="x_title">
						<h2>Article Input and Manage</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							<li><a class="close-link"><i class="fa fa-close"></i></a></li>

						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
					</br>
					<form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/article_action.php" method="post">
						
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Date: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="date" name="message_date" class="form-control">
							</div>
						</div>
						
							<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Article Headline: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="Message_headline" class="form-control">
							</div>
						</div>
							<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Author Name: 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="message_speaker_name" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Author Designation: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="message_speaker_designation" class="form-control">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Author Workplace: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="message_speaker_address" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">LINK: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="url_link" class="form-control">
							</div>
						</div>


						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Image: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="file" name="message_image" class="form-control">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Image Title: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="image_title" class="form-control">
							</div>
						</div>

					
						
					
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Article Description</label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<textarea rows="5" type="text" name="message_description" class="form-control"></textarea>
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
									<table id="datatable" class="table table-striped table-bordered" style="width: 100%;">
										<thead>
											<tr>
												<th>Date</th>
												<th>Article HeadLine</th>
												<th>Author Name</th>
												<th>Author Designation</th>
												<th>Author Workplace</th>
												<th>URL LINK</th>
											
												<th>Image</th>
												<th>Image Title</th>
												
												<th>Article Description</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											include 'config.php';
											 $sql = "SELECT * FROM `articles` WHERE sub_id= $sub_id";
											$result = $conn -> query($sql);
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
												$url_link = $row['url'];
												$image_title = $row['image_title'];
											
											

											?>
											<tr>
												<td><?php echo $message_date ?></td>
												<td><?php echo $headline ?></td>
												<td><?php echo $name ?></td>
												<td><?php echo $designation ?></td>
												<td><?php echo $address ?></td>
												<td><?php echo $url_link ?></td>
												<td><img style="width:120px; height: 80px;"  src="<?php echo "Action/upload/".$image; ?>" rel="img" /></td>
												
												<td><?php echo $image_title ?></td>
												
												<td><?php echo $body ?></td>
												<td><a href="edit_article.php?id=<?php echo $id; ?>"><button class="btn-primary">Edit</button></a>
												
											</td>

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

<!-- page content -->

<?php 

}

?> else{
	header("Location: login.php");
	ob_end_flush();
}
include 'footer.php';

	
 ?>