<?php
$title="Register";
ob_start();?>
<div class="container-fluid">
<div class="row col-lg-3 col-md-6 col-sm-8 col-12 mx-auto">
    <h1>Register Now</h1>
    <?php
    if(isset($_SESSION["error"])){
        ?>
        <div class="alert alert-danger"><?=$_SESSION["error"]?></div>
        <?php
        unset($_SESSION["error"]);
    }
    ?>
<form method="post" action="?path=user&action=processRegister">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email" type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required minlength="8" name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input required minlength="8" name="password2" type="password" class="form-control" id="exampleInputPassword2">
  </div>

  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input required name="name" type="text" class="form-control" id="exampleInputName">
  </div>

  <div class="mb-3">
    <label for="exampleInputFirstName" class="form-label">First-name</label>
    <input required name="firstname" type="text" class="form-control" id="exampleInputFirstName">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<?php $content=ob_get_clean();
require("view/template.php");
