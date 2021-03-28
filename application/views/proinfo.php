<div class="row" style="margin-left:650px;margin-top:15px;">
	<div class="col-md-3">
		<?php //print_r($agent);die;?>
		<div class="card card-primary card-outline">
			<div class="card-body box-profile">
				<div class="text-center">
					<!-- <img class="profile-user-img img-fluid img-circle"
						src="<?php echo base_url();?>uploads/admin/<?php echo $agent->pic;?>"
						alt="User profile picture"> -->
				</div>
				<h3 class="profile-username text-center"><?php echo $project->title;?></h3>
				<p class="text-muted text-center"><?php echo $project->status;?></p>
				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
					<b>Deadline</b> <a class="float-right"><?php echo $project->deadline;?></a>
					</li>
					<li class="list-group-item">
					<b>Description</b> <a class="float-right"><?php echo $project->deadline;?></a>
					</li>
					<!-- <li class="list-group-item"> -->
					<!-- <b>Availability</b> <a class="float-right"><?php echo date("d-M-Y",strtotime($agent->availability));?></a>
					</li> -->
					<!-- <li class="list-group-item">
					<b>Salary</b> <a class="float-right"><?php echo $agent->salary;?></a>
					</li> -->
					<!-- <li class="list-group-item">
					<b>Earning</b> <a class="float-right"></a>
					</li> -->
					<!-- <li class="list-group-item">
					<b>Status</b> <a class="float-right"><?php echo ($agent->status == 1)? "Active":"Deactive"; ?></a>
					</li> -->
				</ul>
			  
			</div>
		</div>
	</div>
</div>