<?php
    require_once "lib/nusoap.php";
    function getEquiposMX($datos) {
        if ($datos =="EquiposMX") {
            return join(",", array(
               
                "    America ",
                " Pumas ",
                " Cruz Azul ",
                " Chivas ",
                " Pachuca ",
                " León ",
                " Xolos ",
                " Monterrey " , 
                " Tigres ",
                " Toluca ",
                " Puebla ",
                " Atletico San Luis ",
                " Necaxa ",
                " FC Juarez ",
                " Mazatlan FC ",
                " Atlas ",
                " Queretaro FC ",
                " Santos laguna."));
        }

        else {
            return "No hay Equipos";
        }

    }

$server = new soap_server();
$server->register("getEquiposMX");
if ( !isset($HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA=file_get_contents('php://input' );
 $server->service($HTTP_RAW_POST_DATA);
 
?>
