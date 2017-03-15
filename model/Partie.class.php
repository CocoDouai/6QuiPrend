<?php

class Partie extends Model {

  private $id_partie;
  private $id_joueur;
  private $demarrer;
  private $nbr_joueurs;
  private $scoreFinal;
  private $terminer;
  private $type_de_jeu_choisi;

  // accesseurs
  // id du créateur
    public function getIdJoueur() {
      return $this->id_joueur;
    }

// savoir si la partie est démarrée ou none
  public function demarrer() {
    return $this->demarrer;
  }
// demarrer la partie
  public function demarrerPartie() {
    // faire appel à une fonction sql pour setter à true demarrer de la partie
    $this->demarrer = true;
  }

  


}

 ?>
