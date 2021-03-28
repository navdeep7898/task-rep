<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <body style="background-image: url('<?php echo base_url();?>assets/image/1.jpg');">
<div class="row" style="margin:20px 0px 0px 520px;" >
	<!-- left column -->
	<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Request</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
	<?php if($this->session->flashdata('error')):?>
		<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
	<?php endif;?>
	<?php if($this->session->flashdata('success')):?>
		<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
	<?php endif;?>
		<form role="form" action="<?php echo base_url();?>signup/request" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<label for="exampleInputEmail1">Name</label>
			<div class="input-group mb-3">
			<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
			<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
			</div>
			<?= form_error('name', '<div class="text-danger">*', '</div>');?>
			<label for="exampleInputEmail1">Email</label>
			<div class="input-group mb-3">
			<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
			 <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
			</div>
			<?= form_error('email', '<div class="text-danger">*', '</div>');?>
			<label for="exampleInputEmail1">Password</label>
			<div class="input-group mb-3">
			<input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
			<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
			</div>
			<?= form_error('pass', '<div class="text-danger">*', '</div>');?>
			<label for="exampleInputEmail1">Mobile no</label>
			<div class="input-group mb-3">
			<input type="text" name="mob" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile">
			 <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
			</div>
			<?= form_error('pass', '<div class="text-danger">*', '</div>');?>
			
			
		</div>
		<!-- /.card-body -->

		<a class="form-control" href="<?php echo base_url();?>" class="text-center">I already have a membership</a>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</div>
	</div>
</div>
</body>