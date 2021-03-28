<div class="row" style="margin-left:250px;overflow: hidden;" >
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
			<h3 style="float: left;">Task Manager</h3>
			 
			  <!-- <a type="button" href="<?php echo base_url();?>agent/add" class="btn btn-info float-right"> Add Users</a> -->
  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal" >Add Task</button>
  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal1" style="margin-right: 7px;">Report An Issue <b>!</b></button>
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
          <div class="row" style="margin:-30px 0px 0px 20px;width: 100%; ">
	<!-- left column -->
	<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Add Task</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
	<?php if($this->session->flashdata('error')):?>
		<div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
	<?php endif;?>
	<?php if($this->session->flashdata('success')):?>
		<div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
	<?php endif;?>
		<form role="form" action="<?php echo base_url();?>Agent/addtask" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
			<?= form_error('name', '<div class="text-danger">*', '</div>');?>
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
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Spend Hours</label>
			<input type="text" name="hours" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline (Optional)">
			<?= form_error('hours', '<div class="text-danger">*', '</div>');?>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Description</label>
			<input type="text" name="des" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline (Optional)">
			<!-- <?= form_error('des', '<div class="text-danger">*', '</div>');?> -->
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Issues*</label>
			<input type="text" name="issue" class="form-control" id="exampleInputEmail1" placeholder="Enter issues(Optional)">
			<!-- <?= form_error('issue', '<div class="text-danger">*', '</div>');?> -->
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Any Plans For Tomorrow ?</label>
			<input type="text" name="plan" class="form-control" id="exampleInputEmail1" placeholder="Enter Deadline (Optional)">
			<!-- <?= form_error('deadl', '<div class="text-danger">*', '</div>');?> -->
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

		  


		  <div class="container">
  
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <div class="row" style="margin:-30px 0px 0px 20px;width: 100%; ">
	<!-- left column -->
	<div class="col-md-6">
	<!-- general form elements -->
	<div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Add Issue</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
	
		<form role="form" action="<?php echo base_url();?>Agent/addissue" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Select Project</label>
			<select class="form-control">
				<option name="project" value=""></option>></select>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Issue</label>
			<input type="text" name="issue" class="form-control" id="exampleInputEmail1" placeholder="Enter Issue">
			<?= form_error('issue', '<div class="text-danger">*', '</div>');?>
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
				  <th>Title</th>
				  <th>Status</th>
				  <th>Date  &  Time</th>
				  <!-- <th>time</th> -->
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
				  <?php foreach($task as $val){?>
				<tr>
				<td><?php echo $val->task_name;?></td>
				  <td><?php echo $val->status;?></td>
				  
				  <td><?php echo $val->reported;?></td>

				  <!-- <td><?php echo $val->password;?></td>
				  <td><?php echo $val->auth_type;?></td> -->
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
				  <a type="button" href="<?php echo base_url('agent/deletetask/'.$val->id); ?>" class="btn btn-danger">Remove</a>
				  <a type="button" href="<?php echo base_url('agent/editask/'.$val->id); ?>" class="btn btn-info">Modify</a>
				  <a type="button" href="<?php echo base_url('agent/info/'.$val->id); ?>" class="btn btn-success">Info</a>
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