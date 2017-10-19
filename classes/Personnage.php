<?php 
class Personnage{
protected $_id;
protected $_nom;
protected $_degats;



public function __construct(array $donnees){

$this->hydrate( $donnees);


}

public function hydrate(array $donnees)
{

foreach ($donnees as $key => $value)
  {
  # code...
  // On récupère le nom du setter correspondant à l'attribut.

     $method = 'set'.ucfirst($key);
     if (method_exists($this, $method))

    {
    // new personne->setNom$nom
    $this->$method($value);
      // …
    }

  }
}

// setters
public function setId($id){
	$this->_id=$id;
}

public function setNom($nom){
	$this->_nom=$nom;
}

public function setDegats($degats){
	$this->_degats=$degats;
}

// getters
public function getID(){
	return $this->_id;
}

public function getNom(){
	return $this->_nom;
}

public function getDegats(){
	return $this->_degats;
}

}

 ?>