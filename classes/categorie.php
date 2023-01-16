<?php
require_once __DIR__ . "/prodotto.php";

class categorie extends prodotto{
    protected string $tipo;
    protected string $categoria;
    protected string $specie;


    function __construct($nomeProdotto,$prezzo,$_tipo,$_specie,$_categoria) {

        parent:: __construct($nomeProdotto, $prezzo);
    
       
        $this->setTipo($_tipo);
        $this->setSpecie($_specie);
        $this->setCategoria($_categoria);
      }
    




    



    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of specie
     */ 
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * Set the value of specie
     *
     * @return  self
     */ 
    public function setSpecie($specie)
    {
        $this->specie = $specie;

        return $this;
    }
}


?>