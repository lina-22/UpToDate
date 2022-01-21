<?php
$title="Login";
ob_start();?>
<div class="container-fluid">
<div class="row col-lg-3 col-md-6 col-sm-8 col-12 mx-auto my-3">
    
    <?php
    if(isset($_SESSION["error"])){
        ?>
        <div class="alert alert-danger"><?=$_SESSION["error"]?></div>
        <?php
        unset($_SESSION["error"]);
    }
    else if(isset($_SESSION["msg"])){
        ?>
        <div class="alert alert-success"><?=$_SESSION["msg"]?></div>
        <?php
        unset($_SESSION["msg"]);
    }
    ?>
    <h1>Login</h1>
<form method="post" action="?path=user&action=processLogin">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email" type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required minlength="8" name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<?php $content=ob_get_clean();
require("view/template.php");
