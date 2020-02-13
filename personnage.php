<?php

class Personnage
{
    const  MAX_VIE = 100;
    private $vie = 30;
    private $atk = 20;
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function setNom($nom)
    {
        $this-> nom = $nom;
    }
    public function getNom(){
        return "Mr. " . $this->nom;
    }
    public function getAtk(){
        return $this->atk;
    }
    public  function  getVie() {
        return $this->vie;
    }
    public function regenerer($vie = null)
    {
        if ((is_null($vie))){
            $this -> vie = self::MAX_VIE;
        }
        else {

            $this -> vie += $vie ;
        }

    }

    public function mort()
    {
        return $this->vie <= 0;

    }
// fonction private c'est à dire de ne pas toucher
    private function empecher_negative()
    {
    if ($this->vie < 0){
        $this-> vie = 0;
    }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible-> empecher_negative();
    }

}

