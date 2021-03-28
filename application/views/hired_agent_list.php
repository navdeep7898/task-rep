<div class="row" style="margin-left:250px">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
		  	  <a type="button" href="<?php echo base_url();?>agent/all" class="btn btn-info float"> All Users</a>
		  	  <!-- <a type="button" href="<?php echo base_url();?>agent/hired" class="btn btn-info float"> Hired Agent</a>
		 	  <a type="button" href="<?php echo base_url();?>agent/available" class="btn btn-info float"> Available Agent</a> -->
              <a type="button" href="<?php echo base_url();?>agent/add" class="btn btn-info float-right"> Add Users</a>
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
                  <th>Name</th>
                  <th>Experience</th>
                  <th>Role</th>
                  <th>Salary</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($agent as $val){?>
                <tr>
                <td><?php echo $val->id;?></td>
                  <td><?php echo $val->name;?></td>
                  <td><?php echo $val->experience;?></td>
                  <td><?php echo $val->role;?></td>
                  <td><?php echo $val->salary;?></td>
                  <td><?php echo $val->status;?></td>
                  <td><a type="button" href="<?php echo base_url('agent/delete/'.$val->id); ?>" class="btn btn-danger">Remove</a><a type="button" href="<?php echo base_url('agent/edit/'.$val->id); ?>" class="btn btn-info">Modify</a></td>
                  
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