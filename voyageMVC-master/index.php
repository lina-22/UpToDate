<?php


session_start();
//Valeur par défaut de $path
$path="main";
if(isset($_GET["path"])){
    //Si la clé path existe dans la superglobale GET
    // alors $path prend ca valeur
    $path=filter_var($_GET["path"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
require("model/bdd.php");
//$connex est un objet PDO (qui represente la co a la bdd)
$monPDO=etablirCo();

switch($path)
{
    case "main":
        require('controler/controler.php');
        break;
    case "user":
        require("controler/userControler.php");
        break;
    case "admin":
        //VERIFICATION DU ROLE
        $role=$_SESSION["role"] ?? false;
        if($role=="admin"||$role=="superAdmin"){
           require("controler/adminControler.php");
        }
        else{
             require "view/404.php";
            exit;
        }
        break;
    case "language":
        require("controler/languageControler.php");
    break;

    case "destination":
        require("controler/destinationControler.php");

    default :
    require "view/404.php";
}

?>