<?php
$action= filter_var($_GET["action"],FILTER_SANITIZE_STRING) ?? "404";
require_once("model/managers/languageManager.php");
switch($action){
    case "formAdd":
        $role=$_SESSION["role"] ?? false;
        if($role=="superAdmin"||$role=="admin"){
            require("view/language/formAdd.php");
        }
        else{
            require("view/404.php");
            exit;
        }
        break;
    case "processFormAdd":
        $role=$_SESSION["role"] ?? false;
        if($role=="admin"||$role=="superAdmin"){
            $langageName=filter_var($_POST["langageName"],FILTER_SANITIZE_STRING);

            $objectLangageManager=new LangageManager($monPDO);
            $resultat=$objectLangageManager->createLangage($langageName);
            if($resultat){
                $_SESSION["msg"]="Creation successfull";
                //header("") TODO
                header("location:?path=language&action=formAdd");
            }
            else{
                $_SESSION["error"]="Creation failled";
            header("location:?path=language&action=formAdd");
            }
        }
        else{
            require("view/404.php");
            exit;
        }


        break;
    case "formUpdate": 
        $role= $_SESSION["role"] ??false;
        if($role=="admin"||$role=="superAdmin"){
            $idLanguage=filter_var($_GET["id"],FILTER_SANITIZE_NUMBER_INT);
            $objectManager=new LangageManager($monPDO);
            $language=$objectManager->fetchLanguageByIdLanguage($idLanguage);
            require("view/language/formUpdate.php");
        }
        else {
            require("view/404.php");
            exit;
        }
        break;
    case "processUpdate":
        $role=$_SESSION["role"] ?? false;
        if($role=="superAdmin"||$role=="admin"){
                $id=filter_var($_POST["id"],FILTER_SANITIZE_NUMBER_INT);
            $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
            $objectManager=new LangageManager($monPDO);
            $resultat=$objectManager->updateLangage($id,$name);
            if($resultat){
                $_SESSION["msg"]="Update successful";
                header("location:?path=admin&action=languages");
            }
            else{
                $_SESSION["error"]="Update Failled";
                header("location:?path=language&action=formUpdate&id=$id");
            }
        }
        else {
            require("view/404.php");
            exit;
        }
        break;
        case "processDelete":
            $role=$_SESSION["role"] ?? false;
            if($role=="admin" || $role=="superAdmin"){
                $id=filter_var($_POST["id"],FILTER_SANITIZE_NUMBER_INT);
                $objectManager=new LangageManager($monPDO);
                $resultat=$objectManager->deleteLangage($id);
                if($resultat){
                    $_SESSION["msg"]="Delete sucessful";
                    header("location:?path=admin&action=languages");
                }
                else{
                    $_SESSION["error"]="Delete Failled";
                    header("location:?path=admin&action=languages");
                }
            }
            else{
                require("view/404.php");
                exit;
            }
            break;
    default:
    require("view/404.php");
}