<?php

require_once 'clases/respuestas.class.php';
require_once 'clases/pacientes.class.php';

$_respuestas = new respuestas;
$_pacientes = new pacientes;


if($_SERVER['REQUEST_METHOD'] == "GET"){
    
if(isset($_GET["page"])){//Este if es para ver todos los pacientes
    $pagina = $_GET["page"];
   $listaPacientes = $_pacientes->listaPacientes($pagina);
   header("Content-Type: application/json");
    echo json_encode($listaPacientes, JSON_PRETTY_PRINT);
    http_response_code(200);

}elseif(isset($_GET['id'])){//Este elseif es para buscar a un paciente por id
    $pacienteId = $_GET['id'];
    $datosPaciente = $_pacientes->obtenerPaciente($pacienteId);
    header("Content-Type: application/json");
    if(isset($datosArray["result"]["error_id"])){
        $responseCode = $datosArray["result"]["error_id"];
        http_response_code($responseCode);
    }else{
        http_response_code(200);
    }
    echo json_encode($datosPaciente, JSON_PRETTY_PRINT);

}

}elseif($_SERVER['REQUEST_METHOD'] == "POST"){
    //Resivimos los datos enviados
    $postBody = file_get_contents("php://input");
    //Enviamos los datos al manejador
    $rest  = $_pacientes->post($postBody);
    print_r($rest);


}elseif ($_SERVER['REQUEST_METHOD'] == "PUT"){
    echo "hola put";
    
}elseif ($_SERVER['REQUEST_METHOD'] == "DELETE"){
    echo "Hola delete";

}else{
    header('Content-Type: aplication/json');
    $datosArray = $_respuestas->error_405();
    echo json_encode($datosArray);
}


?>