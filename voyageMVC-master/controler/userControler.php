<?php

$action="404";
if(isset($_GET["action"]))
{
$action=filter_var($_GET["action"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
require("model/managers/userManager.php");
switch($action){
    case "formRegister":
        require("view/user/formRegister.php");
        break;
    case "processRegister":
        $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
        $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
        $firstname=filter_var($_POST["firstname"],FILTER_SANITIZE_STRING);
        $password=filter_var($_POST["password"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password2=filter_var($_POST["password2"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if($password!=$password2){
            $_SESSION["error"]="Please confirm your password";
            header("location:?path=user&action=formRegister");
            exit;
        }
        //@TODO Verifications
        //Hasher le mot de passe (avec un algo SHA512)
        $hashedPassword=hash("SHA512",$password);
        //Créer un objet UserManger 
        $objectUserManager=new UserManager($monPDO); 
        //Invoquer la méthode createUser depuis l'objet de la classe UserManager 
        //et on recupere le resultat(true ou false) dans la variable resultat   
        $resultat=$objectUserManager->createUser($name,$firstname,$email,$hashedPassword);
        if($resultat==true){
            $_SESSION["msg"]="User registered successfully";
             header("location:?path=user&action=formLogin"); //rediriger vers la page de login
        }
        else{
            $_SESSION["error"]="registration failed";
            header("location:?path=user&action=formRegister");
        }
        break;
        case "formLogin":
            require("view/user/formLogin.php");
            break;
        case "processLogin":
            $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            $password=filter_var($_POST["password"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            $objectUserManager=new UserManager($monPDO);
            $resultat=$objectUserManager->fetchUserByEmailAndPassword($email,$password);
            if($resultat==true){
                $_SESSION["idUser"]=$resultat->getIdUser();
                $_SESSION["email"]=$resultat->getEmail();
                $_SESSION["name"]=$resultat->getName();
                $_SESSION["firstname"]=$resultat->getFirstname();
                //je stocke dans la session a l'index role
                //le nom du role de l'utilisateur
                $_SESSION["role"]=$resultat->role($monPDO)->getName();
                $_SESSION["msg"]="Logged in successfully ! <br> ";
                
                if($_SESSION["role"]=="superAdmin"){
                    $_SESSION["msg"].=" Welcome Super Admin !";
                    header("location:?path=admin&action=dashboard");
                }
                else if($_SESSION["role"]=="admin"){
                    $_SESSION["msg"].=" Welcome Admin !";
                }
                else{
                    $_SESSION["msg"].=" Welcome Custumer !";
                }

                //TODO header location vers une page 
                header("location:?path=user&action=formLogin");
            }
            else {
                $_SESSION["error"]="Email or Password incorect !";
                header("location:?path=user&action=formLogin");
            }
            //TODO
            break;
        case "logout":
            if(isset($_SESSION["email"])){
                unset($_SESSION);
                session_destroy();
                header("location:?path=user&action=formLogin");
            }
            break;
    default :
    require "view/404.php";
}

?>