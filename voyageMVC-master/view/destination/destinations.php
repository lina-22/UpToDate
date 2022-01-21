<?php
$title = "Destinations";
ob_start();
?>
<div class="container">
    <div class="my-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-3">
        <?php 
        foreach($destinations as $destination){?> 
       

        <div class="mx-2 card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$destination->getName()?></h5>
                <p class="card-text" ><?=$destination->getDescription()?></p>
                <a href="?path=destination&action=destination&id=<?=$destination->getIdDestination()?>" class="btn btn-primary">Consult</a>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php
$content = ob_get_clean();
require("view/template.php");