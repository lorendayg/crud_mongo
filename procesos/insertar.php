<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();

    $datos = array(
        "nombre" => $_POST['nombre'],
        "edad" => $_POST['edad'],
        "especie" => $_POST['especie'],
        "raza" => $_POST['raza'],
        "nom_dueno" => $_POST['nom_dueno']
    );
    $respuesta = $crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
?>