<?php


namespace Controllers;

use Model\Ponente;

class ApiPonentes {
  public static function index() {
    $ponentes = Ponente::all();
    echo debuguearJSON($ponentes);
  }
  public static function ponente() {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id || $id < 1) {
      debuguearJSON([]);
      return;
    }

    $ponente = Ponente::find($id);
    debuguearJSON($ponente);
  }
}