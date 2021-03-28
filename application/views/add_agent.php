 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<div class="row" style="margin:30px 0px 0px 50px;width: 100%">
	<!-- left column -->
	<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Add Users</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
	<?php if($this->session->flashdata('error')):?>
		<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
	<?php endif;?>
	<?php if($this->session->flashdata('success')):?>
		<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
	<?php endif;?>
		<form role="form" action="<?php echo base_url();?>Agent/add" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Name</label>
			<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
			<?= form_error('name', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
			<?= form_error('email', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">password</label>
			<input type="text" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
			<?= form_error('pass', '<div class="text-danger">*', '</div>');?>
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
</div>
</div>