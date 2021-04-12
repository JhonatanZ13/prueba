<?php
    require_once './config/app.php';
    require_once './controladores/vistasContolador.php';

    $plantilla = new vistasControlador();
    $plantilla->obtener_plantilla_controlador();

    