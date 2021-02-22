<?php
include "ajouterarticle.php";

$articles = new articleC();

if (isset($_POST['id_article'])) {
    $articles->supprimerarticle($_POST['id_article']);
    header('location:../views/back/consulterarticle.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id_article'];
}
