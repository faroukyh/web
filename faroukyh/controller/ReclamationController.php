<?php
     require_once '../../../config.php';
     include_once '../../../model/reclamations.php';

     class ReclamationController
     {
        public function AjouterReclamation($reclamations)

        {  $db = config::getConnexion();
            $sql="INSERT INTO reclamation ( datereclamation, heurereclamation,messages) 
                      VALUES (:datereclamation, :heurereclamation, :messages)";
        try { $query=$db->prepare($sql);
        
           $query->bindValue('datereclamation',$reclamations->getDatereclamation());
           $query->bindValue('heurereclamation',$reclamations->getHeurereclamation());
           $query->bindValue('messages',$reclamations->getMessages());
       
          
        
           $query->execute();
        
        }
        catch (Exception $e){
           echo 'Erreur: '.$e->getMessage();
        }
        
        }

        public function AfficherReclamation()
        {
          $sql='select * from reclamation';
          $db = config::getConnexion();
            try {$list= $db->query($sql);

                      return $list;
                    }
                    catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
    }
        }

        public function supprimerReclamation($id)
{
    $sql = "DELETE FROM reclamation where id= :id";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);
    try {
        $req->execute();
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

      
public function modifierReclamation($reclamations,$id){
    $sql = "UPDATE `reclamation` SET  datereclamation= :datereclamation, heurereclamation= :heurereclamation, messages= :messages where id= :id";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
       
        $datereclamation = $reclamations->getDatereclamation();
        $heurereclamation = $reclamations->getHeurereclamation();
        $messages = $reclamations->getMessages();
        
       
       


        $req->bindValue(':datereclamation', $datereclamation);
        $req->bindValue(':heurereclamation', $heurereclamation);
        $req->bindValue(':messages', $messages);
        
   
        $req->bindValue(':id', $id);


        $req->execute();

    } catch (Exception $e) {
        echo " Erreur ! " . $e->getMessage();
    }
}


public function afficherReclamationParId($id){
    $sql = "SELECT * FROM reclamation where id=$id";
    $db = config::getConnexion();
    try {

        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    } 
}      

     }
?>