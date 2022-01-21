<?php
$title="Dashboard";
ob_start();?>
<div class="container-fluid row">
<?php require("view/fragments/menuDashboard.php"); ?>
    <div class="container col-9">
        <h1>Dasboard Languages</h1>

        <table class="table my-3">
            <theader>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </theader>
            <tbody>
                <?php foreach($languages as $language){?>
                <tr>
                    <td><?=$language->getIdLanguage()?></td>
                    <td><?=$language->getName()?></td>
                    <td> <a href="?path=language&action=formUpdate&id=<?=$language->getIdLanguage()?>" class="btn btn-success">Update</a>
                    <form action="?path=language&action=processDelete" method="post">
                        <input type="hidden" name="id" value="<?=$language->getIdLanguage()?>">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php 
$content=ob_get_clean();
require("view/template.php");