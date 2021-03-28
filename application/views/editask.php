<div class="row" style="margin-left:250px;">
		  <!-- left column -->
		  <div class="col-md-6">
			<!-- general form elements -->
			<div class="card card-primary">
			  <div class="card-header">
				<h3 class="card-title">Edit Task</h3>
			  </div>
			  <?php //print_r($agent);?>
			  <!-- /.card-header -->
			  <!-- form start -->
			  <form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="card-body">
				  <div class="form-group">
					<label for="exampleInputEmail1">Title</label>
					<input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $agent->task_name;?>" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
			<label for="exampleInputEmail1">Select Status</label><br>
			<!-- <input type="radio" name="statu" class="form-data" id="running" value="Running">
			<label for="running" style="color: green;margin-right: 7px;">Running</label> --> 
			<input type="radio" name="statu" class="form-data"id="upcoming" value="Upcoming">
			<label for="upcoming" style="color: blue;margin-right: 7px;" class="form-data">Upcoming</label>
			<input type="radio" name="statu" class="form-group" id="pending" value="Pending">
			<label for="pending" style="color: Orange;margin-right: 7px;">Pending</label>
			<input type="radio" name="statu" class="form-group" id="working" value="Working">
			<label for="pending" style="color: green;margin-right: 7px;">Working</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>
			<input type="radio" name="statu" class="form-group" id="done" value="Done">
			<label for="pending" style="color:magenta ;margin-right: 7px;">Done</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>
			<input type="radio" name="statu" class="form-group" id="testing" value="Testing">
			<label for="pending" style="color:darkcyan ;margin-right: 7px;">Testing</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>

			</div>
				  <div class="form-group">
					<label for="exampleInputEmail1">spend hours</label>
					<input type="text" name="hours" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline" value="<?php echo $agent->spend_hours;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Plans for tomarrow ?</label>
					<input type="text" name="plan" class="form-control" id="exampleInputEmail1" placeholder="Enter Plans for tomarrow ?" value="<?php echo $agent->description;?>">
				  </div>

				  <div class="form-group">
					<label for="exampleInputEmail1">Description</label>
					<input type="text" name="des" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" value="<?php echo $agent->description;?>">
				  </div>
				  <!-- <div class="form-group">
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