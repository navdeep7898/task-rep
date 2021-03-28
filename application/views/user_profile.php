<div class="row" style="margin-left:280px;margin-top:10px;">
    <div class="col-md-3">
        <?php //print_r($agent);die;?>
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <!-- <img class="profile-user-img img-fluid img-circle"
                        src="<?php echo base_url();?>uploads/admin/<?php echo $user->logo;?>"
                        alt="User profile picture"> -->
                </div>
                <h3 class="profile-username text-center"><?php echo $agent->name;?></h3>
                <p class="text-muted text-center"><?php echo $agent->email_id;?></p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Password</b> <a class="float-right"><?php echo $agent->password;?></a>
                    </li>
                    <!-- <li class="list-group-item">
                    <b></b> <a class="float-right"><?php echo $agent->;?></a>
                    </li> -->
                    
                </ul>
              
            </div>
        </div>
    </div>

    <!-- <div class="col-md-8">
        <?php //print_r($user);die;?>
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <form method="post" enctype="multipart/form-data"> 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Spoc Name</label>
                            <input type="text" name="spoc" class="form-control" value="<?php echo $user->spoc;?>" id="exampleInputEmail1" placeholder="Enter Spoc">
                            <?= form_error('spoc', '<div class="text-danger">*', '</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Addess</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $user->address;?>" id="exampleInputEmail1" placeholder="Enter Address">
                            <?= form_error('address', '<div class="text-danger">*', '</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Strength</label>
                            <input type="text" name="strength" class="form-control" value="<?php echo $user->strength;?>" id="exampleInputEmail1" placeholder="Enter Strength">
                            <?= form_error('strength', '<div class="text-danger">*', '</div>');?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logo</label>
                            <input type="file" name="logo" class="form-control" id="exampleInputEmail1">
                            <img src="<?php echo base_url(); ?>uploads/admin/<?php echo $user->logo;?>" height="100px" width="100px" alt="Product image">
                        </div>
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" name="current_password" placeholder="******">
                            <?= form_error('current_password', '<div class="text-danger">*', '</div>');?>
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="new_password" placeholder="******">
                            <?= form_error('new_password', '<div class="text-danger">*', '</div>');?>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="c_password" placeholder="******">
                            <?= form_error('c_password', '<div class="text-danger">*', '</div>');?>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->