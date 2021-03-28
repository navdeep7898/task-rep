<div class="row" style="margin-left:250px">
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
		  	<h3 style="float: left;">Project List</h3>
			 <!--  <a type="button" href="<?php echo base_url();?>agent/all" class="btn btn-info float"> All Users</a>  -->
			 <!--  <a type="button" href="<?php echo base_url();?>agent/hired" class="btn btn-info float"> Hired Agent</a> 
			  <a type="button" href="<?php echo base_url();?>agent/available" class="btn btn-info float"> Available Agent</a> --> 
			  <!-- <a type="button" href="<?php echo base_url();?>agent/addproject" class="btn btn-info float-right"> Add Project</a> -->
  			<button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal">Add Project</button>

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
          
        </div>
        <div class="modal-body">
          <div class="row" style="margin:0px 0px 0px 90px;width: 100%;">
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
</div>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
			<div class="card-tools">
			  <!-- <div class="input-group input-group-sm" style="width: 150px;">
				<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

				<div class="input-group-append">
				  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
				</div>
			  </div> -->
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
				  <th>Title</th>
				  <th>Status</th>
				  <th>Deadline</th>
				  <th>Issues</th>
				  <th>Actions</th>
				  
				</tr>
			  </thead>
			  <tbody>
				  <?php foreach($project as $val){?>
				<tr>
				<td><?php echo $val->id;?></td>
				  <td><?php echo $val->title;?></td>
				  <td><?php echo $val->status;?></td>
				  <td><?php echo $val->deadline;?></td>
				  <td><?php echo $val->issues;?></td>
				  <!-- <td></td> -->
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
				  <a type="button" href="<?php echo base_url('agent/deletepro/'.$val->id); ?>" class="btn btn-danger">Remove</a>
				  <a type="button" href="<?php echo base_url('agent/editpro/'.$val->id); ?>" class="btn btn-info">Edit</a>
				  <a type="button" href="<?php echo base_url('agent/infopro/'.$val->id); ?>" class="btn btn-success">info</a>
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