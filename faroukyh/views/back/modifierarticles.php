<?php
include "../../controller/ajouterarticle.php";
include_once "../../model/article.php";


$articleC = new articleC();
$error = "";
if (
    isset($_POST["nom_article"]) &&
    isset($_POST["prenom_article"]) &&
    isset($_POST["titre_article"]) &&
    isset($_POST["image_article"]) &&
    isset($_POST["text_article"]) 
) {
    if (
        !empty($_POST["nom_article"]) &&
        !empty($_POST["prenom_article"]) &&
        !empty($_POST["titre_article"]) &&
        !empty($_POST["image_article"]) &&
        !empty($_POST["text_article"]) 


    ) {
        $article = new article(
            $_POST['nom_article'],
            $_POST['prenom_article'],
            $_POST['titre_article'],
            $_POST['image_article'],
            $_POST['text_article'],

        );
        $articleC->modifierarticle($article, $_GET['id_article']);
        
       
    } else
        echo "Missing information";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editer article</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once 'sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require_once 'topbar.php';
                ?>


                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['id_article'])) {
                    $article = $articleC->recupererarticle($_GET['id_article']);
                ?>


                    <div class="container-fluid">

                        <div>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nom_article">nom article</label>
                                <input type="text" class="form-control" name="nom_article" id="nom_article" value="<?php echo $article['nom_article'] ?>"placeholder="Entrer le nom d'article">
                            </div>
     
                            <div class="form-group">
                                <label for="prenom_article">prenom article</label>
                                <input type="text" class="form-control" name="prenom_article" placeholder="Entrer le prenom d'article" value="<?php echo $article['prenom_article'] ?>" >
                            </div>
                          
                            <div class="form-group">
                                <label for="image_article">Ajouter Image</label>
                                <input type="file" class="form-control-file" name="image_article" value="<?php echo $article['image_article'] ?>">
                            </div>
  

                            <div class="form-group">
                                <label for="titre_article">titre article</label>
                                <input type="text" class="form-control" name="titre_article" value="<?php echo $article['titre_article'] ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="text_article">text article</label>
                                <input type="text" class="form-control" name="text_article" value="<?php echo $article['text_article'] ?>">
                            </div>
                            
                            
                            


                            <button type="submit" value="Envoyer" class="btn btn-primary">Submit</button>

                        </form>
                        </div>






                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<?php
                } else {
                    echo "error ";
                }
?>
</body>

</html>