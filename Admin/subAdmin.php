<<?php 
	include 'config.php';
	include_once 'header.php';
	session_start();
	if(isset($_SESSION["user"]))
	{
	?>
	<!-- page content -->

<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Sub Admin</h3>
			</div>
		</div>



		<div class="clearfix"></div>
		<div class="row">
			<!-- form input mask -->
			<div class="col-md-12 col-sm-12" >
				<div class="x_panel">
					<div class="x_title">
						<h2>SUb Admin Registration and Manage</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							<li><a class="close-link"><i class="fa fa-close"></i></a></li>

						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
					</br>
					<form class="form-horizontal form-label-left" enctype="multipart/form-data" action="Action/subAdmin_action.php" method="post">
						
					
						
							<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Name: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="name" class="form-control">
							</div>
						</div>
							<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">User Name: 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" name="user_name" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">password: </label>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="password" name="password" class="form-control">
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
												<th>Name</th>
												<th>User Name</th>
												<th>Password</th>
												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											include 'config.php';
											 $sql = "SELECT * FROM `subadmin`";
											$result = $conn -> query($sql);
											while($row = mysqli_fetch_assoc($result))
											{
												$id = $row['id'];
											
												$name = $row['name'];
												$username = $row['user_name'];
												$password = $row['password'];
											
											
											

											?>
											<tr>
											
												<td><?php echo $name ?></td>
												<td><?php echo $username ?></td>
												<td><?php echo $password ?></td>
												
												<td><a href="edit_subAdmin.php?id=<?php echo $id; ?>"><button class="btn-primary">Edit</button></a>
												<a href="Action/delete_subAdmin_action.php?id=<?php echo $id; ?>"><button class="btn-primary">Delete</button></a>
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