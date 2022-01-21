<?php
$title="Update a language";
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
    <h1>Update a language</h1>
<form method="post" action="?path=language&action=processUpdate">
  <input type="hidden" name="id" value="<?=$language->getIdLanguage()?>">
  <div class="form-floating mb-3">
    <input required minlength="2" name="name" type="text" class="form-control" id="floatingInput" placeholder="Langage name" value="<?=$language->getName()?>">
    <label for="floatingInput">Langage name</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<?php $content=ob_get_clean();
require("view/template.php");
