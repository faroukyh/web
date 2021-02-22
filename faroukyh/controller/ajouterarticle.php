<?PHP
include "C://wamp64/www/faroukyh/config.php";
require_once 'C://wamp64/www/faroukyh/model/article.php';

class articleC
{

    public function ajouterarticle($article)
    {
        $sql = "INSERT INTO article(nom_article,prenom_article,titre_article,image_article,text_article) 
			VALUES (:nom_article,:prenom_article,:titre_article,:image_article,:text_article)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nom_article' => $article->getnom_article(),
                'prenom_article' => $article->getprenom_article(),
                'titre_article' => $article-> gettitre_article(),
                'image_article' => $article->getimage_article(),
                'text_article' => $article->gettext_article(),  

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

   public function afficherarticle()
    {

        $sql = "SELECT * FROM article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerarticle($id)
    {
        $sql = "DELETE FROM article WHERE id_article = :id_article";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_article', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



   /*function modifierarticle($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE article SET 
						nom_article = :nom_article, 
						prenom_article= :prenom_article,
						titre_article = :titre_article,
						image_article = :image_article,
                        text_article = :text_article,
                       
					WHERE id_article = :id_article'
            );
            $query->execute([
                'nom_article' => $article->getnom_article(),
                'prenom_article' => $article->getprenom_article(),
                'titre_article' => $article->gettitre_article(),
                'image_article' => $article->getimage_article(),
                'text_article' => $article->gettext_article(),
                'id_article' => $id,
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererarticle($id)
    {
        $sql = "SELECT * from article where id_article=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }*/


    function modifierarticle($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE article SET 
						nom_article = :nom_article, 
						prenom_article = :prenom_article,
						titre_article = :titre_article,
						image_article = :image_article,
                        text_article = :text_article,
					WHERE id_article = :id_article'
            );
            $query->execute([
                'nom_article' => $article->getnom_article(),
                'prenom_article' => $article->getprenom_article(),
                'titre_article' => $article->gettitre_article(),
                'image_article' => $article->getimage_article(),
                'text_article' => $article->gettext_article(),
                
                'id_article' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererarticle($id)
    {
        $sql = "SELECT * from article where id_article=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}




