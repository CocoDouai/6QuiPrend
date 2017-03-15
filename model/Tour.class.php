<?php

class Tour extends Model {

  private $id_partie;
  private $num_manche;
  private $num_tour;

  // accesseurs
    public function getNumTour() {
      return $this->num_tour;
    }

    public function setNumTour($nouveauNumTour) {
      $this->num_tour = $nouveauNumTour;
    }
}

 ?>
