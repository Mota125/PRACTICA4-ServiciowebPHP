<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica4JDME/server.php");

$error =$cliente->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}
$result =$cliente->call("getEquiposMX", array("datos" => "EquiposMX"));
if ($cliente->fault) {

    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}

else {

    $error = $cliente->getError();
    if ($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";

    }

    else {
        echo " <center><h2>EQUIPOS DE LA LIGA MX CLAUSURA 2022 ...</h2></center><pre>";
        echo $result;
        echo "</pre";
    }

}
?>