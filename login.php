<?php
require_once('templates/top.php');?>
<?php
if($_POST){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query ="SELECT * from users WHERE 
	email='$email' AND
	password='$password'";
	$adr= mysqli_query($de_con, $query);
	if(!$adr){
		exit($query);
	}
	if(mysqli_num_rows($adr)>0){
$user = mysqli_fetch_array($adr);

$_SESSION['user_id'] = $user['id'];

	}else{
		echo'';
	}
}
?>
    <form method='POST' >
        <div align="center">



            <div class="form-group">
                <label for="exampleInputemail">Email address</label>
                <input type="email" name="email"  class="form-control" id="exmapleInputemail" required placeholder="email">
            </div>

            <div class="form-group">
                <label for="exampleInputpassword">Password</label>
                <input type="password" name="password"    class="form-control" id="exmapleInputpassword"  required placeholder="password">
            </div>


            <button type="submit" class="btn btn-default">registr</button>
        </div>
    </form>
<?php require_once('templates/bottom.php');?>