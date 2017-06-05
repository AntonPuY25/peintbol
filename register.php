<?php require_once('templates/top.php');?>
<form method='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" id="email" class="form-control"    placeholder="Email">
  </div>
      <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" name="name"  id="name"  class="form-control"  placeholder="Name">
      </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass"  id="pass"  class="form-control"  placeholder="Password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password again</label>
        <input type="password " name="pass_again"  id="pass_again"  class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">About </label>
        <input type="text " name="about"  id="about"  class="form-control"  placeholder="About">
    </div>


    <button type="submit" class="btn btn-default">registr</button>
</form>

<?php require_once('templates/bottom.php');?>