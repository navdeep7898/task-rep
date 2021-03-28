<?php include_once 'conn.php';
	  include_once 'head1.php';
	  //include_once 'sess.php';

	  ?>
<?php
// class News_model extends CI_Model {

//         public function __construct()
//         {
//                 $this->load->database();
//         }
//}
$idErr = $passErr  = "";
$id= $pass= "";

	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
      // username and password sent from form 
      
      $myuid = mysqli_real_escape_string($conn,$_POST['uid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT uid FROM user WHERE uid = '$myuid' and pass = '$mypassword'";
      //echo ($sql);die;
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      // If result matched $myusername and $mypassword, table row must be 1 row

		
      if($count === 1) 
      {
      		$_SESSION['login_user'] = $myuid;
         	$route['default_controller'] = '$1';
         	// session_register("myuid");
      }
      else 
      {
        $error = "Your Login Name or Password is invalid";
		?>  <script type="text/javascript">

			alert("Invalid Id or Password");
		</script>
		
		<?php

      }
   }
?>
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
<div style="text-align: center;width: 50%;border: 1px solid gray;border-radius: 10px;margin: 95px 0px 0px 330px;padding: 0px 10px 0px 29px;text-decoration: none;">
 	<form action="" method="POST">
  	<fieldset>
   
    		<div class="form-group row">
      		<label for="staticEmail" class="col-sm-2 col-form-label" style="color: darkcyan;font-size: 20px" >Log in</label>
      		<div class="col-sm-10">
        	<input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      		</div>
    </div>
    <div class="form-group">
      	<label for="exampleInputEmail1">User ID</label>
      	<input type="emailHelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Id Here" name="uid">
      	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      	<label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
    </div>
     
    <button type="submit" class="btn btn-primary" value="Submit">Login <i class="fa fa-sign-in"></i></button>
    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
  </fieldset>
</form>
</div>
<br/>


<!-- <br/><br/><br/><br/><br/><br/><br/><br/> -->
<?php 
 // include_once 'footer.php';
 ?>