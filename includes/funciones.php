<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function debuguearJSON($array=[]) : string {
    header('Content-Type: application/json');
    echo json_encode($array, JSON_UNESCAPED_SLASHES);
    exit;
}

function verJSON($array=[]) :void {
    header('Content-Type: application/json');
    echo json_encode($array, JSON_UNESCAPED_SLASHES);
}

function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function pagina_actual($path) : bool {
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true: false;
}

function is_auth(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function is_admin(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function aos_animacion(): void {
    $efectos = ['fade-up', 'fade-down', 'fade-left','fade-right','flip-left'
    ,'flip-right','zoom-in', 'zoom-in-down','zoom-in-up', 'zoom-out'];
    $efecto =  array_rand($efectos, 1);
    echo 'data-aos="'.$efectos[$efecto].'"';
    
}
