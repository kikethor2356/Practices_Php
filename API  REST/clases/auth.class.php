<?php

require_once "conexion/conexion.php";
require_once 'respuestas.class.php';

//Esta clase la hacemos para el login con el protolocolo y con el token
class auth extends conexion{

    public function login($json){
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);
        if(!isset($datos['usuario']) || !isset($datos['password'])){
            //Error con los campos
            return $_respuestas->error_400();   
        }else{
            //Todo esta bien
            $usuario = $datos["usuario"];
            $password = $datos["password"];
            $password=parent::encriptar($password);
            $datos = $this->obtenerDatosUsuario($usuario);
            if($datos){
                //Verificar si la contyraseña es igual
                if($password == $datos[0]['Password']){

                    if($datos[0]['Estado']== "Activo"){
                        //Crear el token
                        $verificar = $this->insertarToken($datos[0]['UsuarioId']);
                        if($verificar){
                            //si se guardo el token
                            $result = $_respuestas->response;
                            $result["result"] = array(
                                "token" => $verificar
                            );
                            return $result;
                        }else{
                            //error al guardar
                           return $_respuestas->error_500("Error interno, No hemos podido guardar");
                        }
                    }else{
                             //El usuario esta inactivo
                             return $_respuestas->error_200("Usuario inactivo"); 
                    }

                }else{
                    //La copntraseña no es igual
                    return $_respuestas->error_200("El password es incorrecto");
                }

            }else{
                //No esxiste el usuario
                return $_respuestas->error_200("El usuario $usuario no exite");
            }
        }
    }
    


//Hacemos la busqueda del usuario y lo comparamos con el de la base de datos
    private function obtenerDatosUsuario($correo){
        $query = "SELECT UsuarioId, Password, Estado FROM  usuarios where Usuario= '$correo'";
        $datos = parent::obtenerDatos($query);
        if(isset($datos[0]["UsuarioId"])){
            return $datos;

        }else{
            return 0;
        }
    }

//Creamos el token
private function insertarToken($usuarioId){
    $val = true;
    $token = bin2hex(openssl_random_pseudo_bytes(16,$val));
    $date = date("Y-m-d H:i");
    $estado = "activo";
    $query = "INSERT INTO usuarios_token (UsuarioId,Token,Estado,Fecha) VALUES ('$usuarioId', '$token', '$estado', '$date')";
    $verifica = parent::nonQuery($query);
    if($verifica){
        return $token;
    }else{
        return 0;
    }
}

}//Fin class


?>