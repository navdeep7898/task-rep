<div class="row" style="margin-left:250px;overflow: hidden;" >
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
			<h3 style="float: left;">Task Manager</h3>
			 
			  <!-- <a type="button" href="<?php echo base_url();?>agent/add" class="btn btn-info float-right"> Add Users</a> -->
 




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
					<th>Name</th>
				  <th>Task Title</th>
				  <th>Status</th>
				  <th>Last Updated</th>
				  
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				  <?php foreach($task as $val){?>
				<tr>
				<td><?php echo $val->reported_by;?></td>	
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
				 <!--  <a type="button" href="<?php echo base_url('agent/deletetask/'.$val->id); ?>" class="btn btn-danger">Remove</a>
				  <a type="button" href="<?php echo base_url('agent/editask/'.$val->id); ?>" class="btn btn-info">Modify</a> -->
				  <a type="button" href="<?php echo base_url('agent/taskinfo/'.$val->id); ?>" class="btn btn-success">Info</a>
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