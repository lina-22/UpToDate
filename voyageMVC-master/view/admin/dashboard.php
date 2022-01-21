<?php
$title="Dashboard";
ob_start();?>
<div class="container-fluid row">
    <?php require("view/fragments/menuDashboard.php"); ?>
    <div class="container col-9">
        <h1>Dasboard</h1>
    </div>
</div>
<?php 
$content=ob_get_clean();
require("view/template.php");