<?php

class Gerant implements Personne {
	
	protected $nom;
	protected $prenom;
	protected $grade;
	protected $adresse;
	
	public function __construct($n, $p, $gr, $adr){
        $this->nom = $n;
        $this->prenom = $p;
		$this->grade = $gr;
		$this->adresse = $adr;
        }
	
	public function afficher(){
        echo "Nom= ".$this->nom.'<br>';
		echo "Prenom= : ".$this->prenom.'<br>';		
		echo "Grade= ".$this->grade.'<br>';
		echo "Adresse= : ".$this->adresse.'<br>';   }
}

?>