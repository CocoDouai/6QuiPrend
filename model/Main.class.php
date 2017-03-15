<?php

class Main extends Model {

  $id_main;
  $id_joueur;
  $id_partie;
  $numero_manche;

  // accesseurs
    public function getIdMain() {
      return $this->id_main;
    }

    public function setNumero($nouvelleIdMain) {
      $this->id_main = $nouvelleIdMain;
    }


}

 ?>
