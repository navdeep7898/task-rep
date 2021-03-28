  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url()?>User_Panel" class="brand-link">
	  Task Reporter
	  <!-- <img src="<?php echo base_url();?>uploads/admin/<?php echo $this->session->userdata('logo');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		   style="opacity: .8"> -->
	  <!-- <span class="brand-text font-weight-light">AdminLTE 3</span>-->
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	  <!-- Sidebar user panel (optional) -->
	  <div class="user-panel ">
		<!-- <div class="image">
		  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
		  <a href="#" class="d-block">Alexander Pierce</a>
		</div> -->
	  </div>

	  <!-- Sidebar Menu -->
	  <nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		  <!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
		  <li class="nav-item has-treeview menu-open">
		  	<a href="<?php echo base_url();?>agent/dashb" class="nav-link active">
			  <i class=""></i>
			  <p>
				Task List
				<!-- <i class="right fas fa-angle-left"></i> -->
			  </p>
			</a>
			
			
			</ul>
		  </li>
		  
		</ul> 
	  </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
  </aside>

