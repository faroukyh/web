<?php
include "ajouterarticle.php";

$articles = new articleC();

if (isset($_POST['id_article'])) {
    $articles->supprimerarticle($_POST['id_article']);
    header('location:../views/startbootstrap-sb-admin-2-gh-pages/consulterarticle.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id_article'];
}
