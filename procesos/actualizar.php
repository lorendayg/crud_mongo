<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();

    $id =$_POST['id'];
    $datos = array(
        "nombre" => $_POST['nombre'],
        "edad" => $_POST['edad'],
        "especie" => $_POST['especie'],
        "raza" => $_POST['raza'],
        "nom_dueno" => $_POST['nom_dueno']
    );
    $respuesta=$crud->actualizar($id, $datos);
    if($respuesta->getModifiedCount() > 0|| $respuesta->getMatchedCount() > 0){
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    }else{
        print_rin($respuesta);
    }
?>
