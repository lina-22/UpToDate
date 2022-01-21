<?php
$title="Adding a new language";
ob_start();?>
<div class="container-fluid">
<div class="row  col-md-6 col-sm-8 col-12 mx-auto my-3">
    
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
    <h1>Adding a langage</h1>
<form method="post" action="?path=language&action=processFormAdd">
  <div class="form-floating mb-3">
    <input required minlength="2" name="langageName" type="text" class="form-control" id="floatingInput" placeholder="Langage name">
    <label for="floatingInput">Langage name</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<?php $content=ob_get_clean();
require("view/template.php");
