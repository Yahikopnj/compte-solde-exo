<?php 
class Compte{
    public $name;
    public $solde;

    public function crediter($valeurs){
        $this->solde =$this->solde + $valeurs;
    }

    public function debiter($valeurs){
        $this->solde =$this->solde - $valeurs;
    }


public function affiche(){
   echo $this->solde;
}

}




?>