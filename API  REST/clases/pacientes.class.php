<?php

require_once 'conexion/conexion.php';
require_once 'respuestas.class.php';


class pacientes extends conexion{

    private $tabla = "pacientes";
    private $pacienteId = "";
    private $dni = "";
    private $nombre = "";
    private $direccion = "";
    private $codigoPostal = "";
    private $genero = "";
    private $telefono = "";
    private $fechaNacimiento = "0000-00-00";
    private $correo = "";

//METODO LISTAPACIENTES TE DE UNA LISTA DE TODOS LOS PACINETES EN FORMATO JSON ////////////////////////////////////////////
    public function listaPacientes($pagina = 1){

        $inicio = 0;
        $cantidad = 100;
        if($pagina > 1){
            $inicio = ($cantidad * ($pagina - 1)) + 1;
            $cantidad = $cantidad * $pagina;

        }
        
        $query = "SELECT PacienteId,DNI,Nombre,Direccion,Telefono,Correo,Genero,CodigoPostal,Telefono FROM " . $this->tabla .  " LIMIT $inicio,$cantidad";
        $datos = parent::obtenerDatos($query);
        return ($datos);
    }
//FIN DEL METODO LISTAPACIENTES////////////////////////////////////////////////////////////////////////////////////////////////////////

// METODO OBTENERPACIENTE ESTE IDENTIFICA AL PASIENTE POR EL ID////////////////////////////////////////////////////////////////
    public function obtenerPaciente($id){
        $query = "SELECT * FROM " . $this->tabla . " WHERE PacienteId = '$id'";
        return parent::obtenerDatos($query);

    }
// FIN DEL METODO OBTENERPACIENTE////////////////////////////////////////////////////////////////////////////////////////////////

//METODO POST ES PARA PASAR LOS DATOS //////////////////////////////////////////////////////////////////////////////// 
    public function post($json){
        $_respuestas = new respuestas;
        $datos = json_encode($json, true);
        if(!isset($datos['nombre']) || !isset($datos['dni']) || !isset($datos['correo'])){
            return $_respuestas->error_400();
        }else{
            $this->nombre = $datos ['nombre'];
            $this->dni = $datos ['dni'];
            $this->correo = $datos ['correo'];
           if(isset($datos¨['telefono'])) {$this->telefono = $datos¨['telefono'];}
           if(isset($datos¨['direccion'])) {$this->telefono = $datos¨['direccion'];}
           if(isset($datos¨['cofigoPostal'])) {$this->telefono = $datos¨['codigoPostal'];}
           if(isset($datos¨['genero'])) {$this->telefono = $datos¨['genero'];}
           if(isset($datos¨['fechaNacimiento'])) {$this->telefono = $datos¨['fechaNacimiento'];}
            $resp=$this->insertarPaciente();
            if ($resp){
                $respuesta = $_respuestas->response;
                $respuesta['result'] = array(
                    "pacienteId" => $resp
                );
                return $respuesta;
            }else{
                     return $_respuestas->error_500();
                }
            
        }
    }


  // FIN DEL METODO POST ////////////////////////////////////////////////////////////////////////////////////////////  

// METODO INSERTAROACIENTE ES LA CONSULTA SQL//////////////////////////////////////////////////////////////////////
    private function insertarPaciente(){
        $query = "INSERT INTO " . $this->tabla . " (DNI,Nombre,Direccion,CodigoPostal,Telefono,Genero,FechaNacimiento,Correo)
        VALUES
        ('" . $this->dni . "','" . $this->nombre . "', '" . $this->direccion . "','" . $this->codigoPostal . "','" . $this->telefono ."', '" . 
        $this->genero . "','" . $this->fechaNacimiento . "','" . $this->correo ."')";
        print_r($query);
    }

// FIN DEL METODO INSERTARPACIENTE//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


}


?>