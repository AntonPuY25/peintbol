<?php
require_once('templates/top.php');?>
<?php

if($_POST){

	$password=$_POST['password'];
	$login =$_POST['Name'];
    $email =$_POST['email'];
	$pass_again=$_POST['pass_again'];
	if($password==$pass_again){
		echo "on";
	}
	else{

		$err[]="совпадает пароль";
}
$query ="SELECT * FROM users WHERE email='$email'";
	$adr=mysqli_query($de_con,$query);
	if(!$adr){
	    exit($query);
    }
    if(mysqli_num_rows($adr)>0){
	    $err[]='Такой емаил в базе существует';
    }
	foreach($err as $one){
		echo"<p style='color:red' class='error'>";
		echo $one;
		echo "</p>";
	}

            if (count($err)==0){
	    $query= "INSERT INTO users VALUES(
                                  NULL,
                                 '$login',
                                  '$password',
                                  '$email', 
                                  NOW(),
                                  NOW(),
                                  'unblock'
                                  
)";
	    $in=mysqli_query($de_con,$query);
	    if(!$in){
	       //exit($query);//$queryиспользуется только для проверки кода !!
        }else{
            ?>

            <script>
            document.location.href='login.php';
            </script>
            <?php

        }

        }
    }

?>

<form method='POST' >
<div align="center">


      <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" name="Name"    class="form-control" id="exmapleInputName" required placeholder="Name">
      </div>

  <div class="form-group">
    <label for="exampleInputpassword">Password</label>
    <input type="Password" name="password"    class="form-control" id="exmapleInputpassword"  required placeholder="Password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password again</label>
        <input type="password" name="pass_again"    class="form-control" id="exmapleInputPass_again" required placeholder="Password">
    </div>


    <div class="form-group">
        <label for="exampleInputemail">Email address</label>
        <input type="email" name="email"  class="form-control" id="exmapleInputemail" required placeholder="email">
    </div>

    <div class="form-group">
        <label for="exampleInputPol">women / men</label>
        <input type="radio"  name="women"  class="form-control" id="exmapleInputPol" required placeholder="Pol">
        <input type="radio"  name="men"  class="form-control" id="exmapleInputPol" required placeholder="Pol">
    </div>
    <button type="submit" class="btn btn-default">registr</button>
</div>
</form>

<?php require_once('templates/bottom.php');?>