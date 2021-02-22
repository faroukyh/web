<?php
include "../../../controllers/ReclamationController.php";


$id = $_GET["id"];

$ReclamationController = new ReclamationController();
$ReclamationController->supprimerReclamation($id);



echo "<script>window.open('afficherReclamation.php?id=deletedSucceed','_self')</script>";
