<?php
    require_once "./modelos/vistasModelo.php";

    class vistasControlador extends vistasModelo{

        /*--------- Controlador para obtener las plantillas ----------*/
        public function obtener_plantilla_controlador(){
            //Reotrna la plantilla
            return require_once "./vistas/plantilla.php";
        }

        /*--------- Controlador para obtener las vistas --------------*/
        public function obtener_vistas_controlador(){

            //Comprueba si llega algo por la variable views que esta definida en el htaccess.
            if(isset($_GET['views'])){
                //Divide la ruta separandola por barras /
                $ruta = explode("/", $_GET['views']);
                //Obtiene la ruta que esta en el indice 0 del array
                $respuesta = vistasModelo::obtener_vista_modelo($ruta[0]);
            }else{
                $respuesta = "login";
            }
            return $respuesta;
        }
    }