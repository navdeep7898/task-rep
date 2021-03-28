<div class="row" style="margin: 30px 0px 0px 550px;">
		  <!-- left column -->
		  <div class="col-md-6">
			<!-- general form elements -->
			<div class="card card-primary">
			  <div class="card-header">
				<h3 class="card-title">Edit Project</h3>
			  </div>
			  <?php //print_r($agent);?>
			  <!-- /.card-header -->
			  <!-- form start -->
			  <form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="card-body">
				  <div class="form-group">
					<label for="exampleInputEmail1">Title</label>
					<input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $agent->title;?>" placeholder="Enter Name">
				  </div>
				   <div class="form-group">
			<label for="exampleInputEmail1">Select Status</label><br>
			<!-- <input type="radio" name="statu" class="form-data" id="running" value="Running">
			<label for="running" style="color: green;margin-right: 7px;">Running</label> --> 
			<input type="radio" name="gender" class="form-data"id="upcoming" value="Upcoming">
			<label for="upcoming" style="color: blue;margin-right: 7px;" class="form-data">Upcoming</label>
			<input type="radio" name="gender" class="form-group" id="pending" value="Pending">
			<label for="pending" style="color: Orange;margin-right: 7px;">Pending</label>
			<input type="radio" name="gender" class="form-group" id="working" value="Working">
			<label for="pending" style="color: green;margin-right: 7px;">Working</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>
			<input type="radio" name="statu" class="form-group" id="done" value="Done">
			<label for="pending" style="color:magenta ;margin-right: 7px;">Completed</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>
			<input type="radio" name="statu" class="form-group" id="done" value="On Hold">
			<label for="pending" style="color:gray ;margin-right: 7px;">On Hold</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>

			</div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Deadline</label>
					<input type="text" name="deadline" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline" value="<?php echo $agent->deadline;?>">
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