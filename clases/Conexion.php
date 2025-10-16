<?php 
    require_once _DIR_ . '/../vendor/autoload.php';

    class Conexion{
        public function conectar(){
            try {
            // Credenciales de conexión
            $servidor = "localhost";
            $puerto = "27017";
            $usuario = "backend";
            $password = "backend2025";
            $BD = "b221190117_crud2";

            // Cadena de conexión corregida
            $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD?authSource=admin";
            $cliente = new MongoDB\client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }                     
        }
    }
    /*$objeto = new Conexion();
    var_dump($objeto->conectar());*/
?>
