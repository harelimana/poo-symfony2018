<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 12.12.17
 * Time: 15:36
 */

class Eleve
{
   private $nom;
   private $prenom;
   private $rue;
   private $numero;
   private $cp;
   private $ville;
   
   /* ======================= */
   /*     getters & setters   */
   /* ======================= */
   
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }
    
    /**
     * @param mixed $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }
    
    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }
    
    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    
    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }
    
    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }
    
    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
   
    /* ========================== */
    /*          méthodes          */
    /* ========================== */
    
   function getNomComplet(){ //retoune le nom et prenom concaténés
   
   return $this->nom . ' ' . $this->prenom;
   }
   
   function getAdresse(){ // fournit l'adresse complète de l'élève
       
       return $this->rue . ' ' . $this->cp . ' ' . $this->ville;
   }
}