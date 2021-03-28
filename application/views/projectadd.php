<div class="row" style="margin:30px 0px 0px 520px;width: 100%;">
	<!-- left column -->
	<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Add Project</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
	<?php if($this->session->flashdata('error')):?>
		<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
	<?php endif;?>
	<?php if($this->session->flashdata('success')):?>
		<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
	<?php endif;?>
		<form role="form" action="<?php echo base_url();?>Agent/addproject" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
			<?= form_error('name', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Select Status</label><br>
			<input type="radio" name="statu" class="form-data" id="running" value="Running">
			<label for="running" style="color: green;margin-right: 7px;">Running</label> 
			<input type="radio" name="statu" class="form-data"id="upcoming" value="Upcoming">
			<label for="upcoming" style="color: blue;margin-right: 7px;" class="form-data">Upcoming</label>
			<input type="radio" name="statu" class="form-group" id="pending" value="Pending">
			<label for="pending" style="color: Orange;margin-right: 7px;">Pending</label>
			<?= form_error('statu', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Deadline*</label>
			<input type="text" name="deadl" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline (Optional)">
			<!-- <?= form_error('deadl', '<div class="text-danger">*', '</div>');?> -->
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Issues*</label>
			<input type="text" name="issue" class="form-control" id="exampleInputEmail1" placeholder="Enter issues(Optional)">
			<!-- <?= form_error('issue', '<div class="text-danger">*', '</div>');?> -->
			</div>
			
		</div>
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</div>
	</div>
</div>