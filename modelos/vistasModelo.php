<?php

    class vistasModelo{

        /*--------- Modelo para obtener vistas ----------*/
        protected static function obtener_vista_modelo($vistas){
            //Guarda las palabras permitidas en la url
            $listaBlanca = [];
            //Comprueba si la vista esta en la lista del array
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido = "./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido = "404";
                }
            }elseif($vistas == "login" || $vistas == "index"){
                $contenido = "login";
            }else{
                //Si la vista no es login ni index devuelve el 404 no found.
                $contenido = "404";
            }
            return $contenido;
        }


    }