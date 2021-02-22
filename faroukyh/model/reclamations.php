<?php
        class reclamations
        {
            
            private string $datereclamation;
            private string $heurereclamation;
            private string $messages;
            

        
        
        public  function __construct(string $datereclamation, string $heurereclamation, string $messages)
        {
            
             $this->datereclamation=$datereclamation;
             $this->heurereclamation=$heurereclamation;
             $this->messages=$messages;
        
         }

          
     public function getId()
      {
         return $this->id;
      }
            
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDatereclamation()
    {
        return $this->datereclamation;
    }

    
    public function setDatereclamation($datereclamation)
    {
        $this->datereclamation = $datereclamation;
    }

   
    public function getHeurereclamation()
    {
        return $this->heurereclamation;
    }

    
    public function setHeurereclamation($heurereclamation)
    {
        $this->heurereclamation = $heurereclamation;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

   

   
        }
?>