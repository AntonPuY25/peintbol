
<?php require_once('templates/top.php');?>
<?php

if($_POST){
	$err=[];
	$password=$_POST['password'];
	$pass_again=$_POST['pass_again'];
	if($password==$pass_again){
		echo "on";
	}
	else{
		echo "error";
		$err[]="Не совпадает пароль";
}
	foreach($err as $one){
		echo"<p style='color:red' class='error'>";
		echo $one;
		echo "</p>";
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
    <label for="exampleInputPassword1">Password</label>
    <input type="Password" name="Pass"    class="form-control" id="exmapleInputPass"  required placeholder="Password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password again</label>
        <input type="password" name="pass_again"    class="form-control" id="exmapleInputPass_again" required placeholder="Password">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="Email" name="Email"  class="form-control" id="exmapleInputEmail" required placeholder="Email">
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