<?php
$action = filter_var($_GET["action"],FILTER_SANITIZE_STRING)?? "404";
require("model/managers/languageManager.php");
switch($action){
    case "dashboard":
        require("view/admin/dashboard.php");
        break;
    case "languages":
        $objectManager=new LangageManager($monPDO);
        $languages=$objectManager->fetchAllLanguages();
        require("view/admin/dashboardLanguages.php");
        break;
}
?>