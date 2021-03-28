<div class="row" style="margin-left:250px;overflow: hidden;">
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
			<h3 style="float: left;">User Manager</h3>
			 
			  <!-- <a type="button" href="<?php echo base_url();?>agent/add" class="btn btn-info float-right"> Add Users</a> -->
  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal" >Add Users</button>
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <div class="row" style="margin:0px 0px 0px 90px;width: 100%;">
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
			<input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
			<?= form_error('pass', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">mobile no</label>
			<input type="text" name="mob" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



	  
		  </div>

		  

		<?php if($this->session->flashdata('error')):?>
			<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
		<?php endif;?>
		<?php if($this->session->flashdata('success')):?>
			<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
		<?php endif;?>
		  <!-- /.card-header -->
		  <div class="card-body table-responsive p-0" style="height: 300px;">
			<table class="table table-head-fixed text-nowrap">
			  <thead>
				<tr>
				  <th>ID</th>
				  <th>Name</th>
				  <th>Email</th>
				  <!-- <th>Password</th> -->
				  
				  
				  <th>Authorization</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
				  <?php foreach($agent as $val){?>
				<tr>
				<td><?php echo $val->id;?></td>
				  <td><?php echo $val->name;?></td>
				  <td><?php echo $val->email_id;?></td>
				 
				  <!-- <td><?php echo $val->password;?></td> -->
				  <td><?php echo $val->auth_type;?></td>
				  <!-- <td><?php echo $val->salary;?></td> -->
				  <!-- <td><?php if(($val->availability >= date('Y-m-d H:i:s')) && ($val->hired == 0)){
					  ?>
					  <p style="color:green;">Available</p>
					  <?php }elseif((($val->availability >= date('Y-m-d H:i:s')) || ($val->availability <= date('Y-m-d H:i:s'))) && ($val->hired == 1)){?>
						<p style="color:blue;">Hired</p>
					  <?php }elseif(($val->availability <= date('Y-m-d H:i:s')) && ($val->hired == 0)){ ?>
						<p style="color:red;">Unavailable</p>
					  <?php }?>
					  </td> -->
				  <td>
				  <a type="button" href="<?php echo base_url('agent/delete/'.$val->id); ?>" class="btn btn-danger">Remove</a>
				  <a type="button" href="<?php echo base_url('agent/edit/'.$val->id); ?>" class="btn btn-info">Modify</a>
				  <a type="button" href="<?php echo base_url('agent/profile/'.$val->id); ?>" class="btn btn-success">Profile</a>
				</td>
				</tr>
				<?php }?>
			  </tbody>
			</table>
		  </div>
		  <!-- /.card-body -->
		</div>
		<!-- /.card -->
	  </div>
	</div>
</div>