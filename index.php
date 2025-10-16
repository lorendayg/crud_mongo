<?php session_start();
    require_once "./clases/Conexion.php";
    require_once "./clases/Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();

    $mensaje = "";
    if(isset($_SESSION['mensaje_crud'])){
        $mensaje= $crud->mensajesCrud($_SESSION['mensaje_crud']);
        unset($_SESSION['mensaje_crud']);
    }
    //print_r($datos);
?>
<?php include "./header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Crud Mascotas <i class="fa-solid fa-paw"></i></h2>
                        <a href="./agregar.php" class="btn btn-outline-dark">
                            <i class="fa-solid fa-file-circle-plus"></i>Agregar nuevo registro
                        </a>
                        <hr>
                        <table class="table table-sm table-hover table-border">
                        <thead>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Nombre del dueño</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td> <?php echo $item->nombre; ?> </td>
                                <td> <?php echo $item->edad; ?> </td>
                                <td> <?php echo $item->especie; ?> </td>
                                <td> <?php echo $item->raza; ?> </td>
                                <td> <?php echo $item->nom_dueno; ?> </td>
                                <td class="text-center">
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id; ?>" name="id" >
                                        <button class="btn btn-outline-warning">
                                            <i class="fa-solid fa-file-pen"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text_center">
                                    <form action="./eliminar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id; ?>" name="id" >
                                        <button class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
<?php include "./scripts.php"; ?>
<script>
    let mensaje = <?php echo $mensaje; ?>
    console.log(mensaje);
</script>
    
