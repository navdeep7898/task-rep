<div class="row" style="margin: 10px 0px 0px 250px;">
		  <!-- left column -->
		  <div class="col-md-6">
			<!-- general form elements -->
			<div class="card card-primary">
			  <div class="card-header">
				<h3 class="card-title">Edit User</h3>
			  </div>
			  <?php //print_r($agent);?>
			  <!-- /.card-header -->
			  <!-- form start -->
			  <form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="card-body">
				  <div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $agent->name;?>" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $agent->email_id;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Password</label>
					<input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Enter New Password" value="<?php echo $agent->password;?>">
					<p style="color: grey;font-size: 12px;margin-left: 160px; ">( Password Is Encrypted Now)</p>
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">mobile no</label>
					<input type="text" name="mob" class="form-control" id="" placeholder="Enter mobile no" value="<?php echo $agent->mobileno;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">User Type</label>
					<input type="text" name="auth" class="form-control" id="" placeholder="Enter mobile no" value="<?php echo $agent->auth_type;?>">
					<p style="color: grey;font-size: 12px;margin-left: 160px; ">Here:- 0-Admin<br>
					1-standard user<br>
					2-not verified user</p>
				  </div>
				  <!-- <div class="form-group">
					<label for="exampleInputEmail1">Salary</label>
					<input type="text" name="salary" class="form-control" id="exampleInputEmail1" placeholder="Enter Salary" value="<?php echo $agent->salary;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Availability</label>
					   <input type="date" name="availability" class="form-control" id="exampleInputEmail1" placeholder="Enter availability" >
					</select>
				  </div>
				  <div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" name="pic" class="form-control" id="exampleInputEmail1">
					<img src="<?php echo base_url(); ?>uploads/admin/<?php echo $agent->pic;?>" height="100px" width="100px" alt="Product image">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Biodata</label>
					<input type="text" name="biodata" class="form-control" id="exampleInputEmail1" value="<?php echo $agent->bio;?>" placeholder="Enter Biodata">
				  </div> -->
				  <!-- <div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div> -->
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			  </form>
			</div>
			<!-- /.card -->

		  

		  

		  
		  
		  </div>
		  <!--/.col (left) -->
		  <!-- right column -->
	  
		  <!--/.col (right) -->
		</div>