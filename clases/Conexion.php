<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_mongo/vendor/autoload.php";

    class Conexion{
        public function conectar(){
            try {
            $servidor="127.0.0.1";
            $usuario = "mongadmin";
            $password = "123456";
            $baseDatos = "crud";
            $puerto = "27017";

            $cadenaConexion = "mongodb://" .
                                $usuario . ":" . 
                                $password . "@" .
                                $servidor . ":" .
                                $puerto . "/" .
                                $baseDatos;
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