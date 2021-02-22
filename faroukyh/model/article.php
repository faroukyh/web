<?php

class article
{
    private $nom_article; 
    private $prenom_article;
    private $titre_article;
    private $image_article;
    private $text_article;
    


    public function getid_article()
    {
        return $this->id_article;
    }

    public function getnom_article()
    {
        return $this->nom_article;
    }
    public function getprenom_article()
    {
        return $this->prenom_article;
    }
    public function gettitre_article()
    {
        return $this->titre_article;
    }
    public function getimage_article()
    {
        return $this->image_article;
    }
    public function gettext_article()
    {
        return $this->text_article;
    }
    
  
  
 

    public function setnom_article($nom_article)
    {
        $this->nom_article = $nom_article;
    }
    public function setprenom_article($prenom_article)
    {
        $this->prenom_article= $prenom_article;
    }
    public function settitre_article($titre_article)
    {
        $this->titre_article = $titre_article;
    }
    public function setimage_article($image_article)
    {
        $this->image_article = $image_article;
    }
    public function settext_article($text_article)
    {
        $this->text_article = $text_article;
    }
   
    
    public function __construct($nom_article, $prenom_article, $titre_article, $image_article, $text_article)
    {
        $this->nom_article = $nom_article;
        $this->prenom_article = $prenom_article;
        $this->titre_article = $titre_article;
        $this->image_article = $image_article;
        $this->text_article = $text_article;
 
    }
}


