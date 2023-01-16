<?php

class Prodotto {

    protected string $nomeProdotto;
    protected string $prezzo;
  
   

    
    function __construct( $nomeProdotto,$prezzo) {

        
        $this-> setNomeProdotto( $nomeProdotto);
        $this->setPrezzo($prezzo);
      
    
      
      }





  
   

    /**
     * Get the value of nomeProdotto
     */ 
    public function getNomeProdotto()
    {
        return $this->nomeProdotto;
    }

    /**
     * Set the value of nomeProdotto
     *
     * @return  self
     */ 
    public function setNomeProdotto($nomeProdotto)
    {
        $this->nomeProdotto = $nomeProdotto;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

   
}
