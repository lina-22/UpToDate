<?php
   $action=filter_var($_GET["action"],FILTER_SANITIZE_STRING) ?? "destinations";
   echo "helo";
   require_once ("model/managers/destinationManager.php");
   switch($action){
       case "destinations" :
        // Toutes les destinations
        // etap1: certain de destinationManager et la classe destination
        // etap2: creation de fetchAll destination
        // etap3: instancier un object destinationManager
        $objectDestinationManager = new DestinationManager($monPDO);
        // etap4: dans une variable recoupere
        $destinations=$objectDestinationManager->fetchAllDestinationOrderByName();
        // etap5:  
        require("view/destination/destinations.php");
        break;
       case "destination" :
        $id=filter_var($_GET["id"],FILTER_SANITIZE_NUMBER_INT);
        $objectDestinationManager = new DestinationManager($monPDO);
        $destination=$objectDestinationManager->fetchDestinationByIdDestination($id);
        require("view/destination/destination.php");
        break;
      default:
      require("view/404.php"); 
      
     
   }
?>