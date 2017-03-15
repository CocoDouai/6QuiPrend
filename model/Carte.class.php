<?php

class Carte extends Model {

  private $numero;
  private $malus;

// accesseurs
  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($nouveauNumero) {
    $this->numero = $nouveauNumero;
  }

  public function getMalus() {
    return $this->malus;
  }

  public function setNumero($nouveauMalus) {
    $this->malus = $nouveauMalus;
  }


// méthodes



}


 ?>
