<?php 

    $nombre="KIKE";

    function dameNombre(){

        global $nombre;
        $nombre ="MARIA";
    }

    dameNombre(); 

    echo $nombre;



?>