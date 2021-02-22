<?php

include_once '../../../controller/ReclamationController.php';
include_once '../../../model/reclamations.php';



$datereclamation=$_POST['datereclamation'];
$heurereclamation=$_POST['heurereclamation'];
$messages=$_POST['messages'];


$reclamations=new reclamations($datereclamation,$heurereclamation,$messages);
$ReclamationController=new ReclamationController();
$ReclamationController->AjouterReclamation($reclamations);
header('Location:afficherReclamation.php');

?>