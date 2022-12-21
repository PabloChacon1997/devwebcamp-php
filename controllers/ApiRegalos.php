<?php


namespace Controllers;

use Model\Regalo;
use Model\Registro;

class ApiRegalos {
  public static function index() {
    if (!is_admin()) {
      verJSON([]);
      return;
    }
    $regalos = Regalo::all();

    foreach($regalos as $regalo) {
      $regalo->total = Registro::totalArray(['regalo_id' => $regalo->id, 'paquete_id' => "1"]);
    }

    verJSON($regalos);
    return;
  }
}