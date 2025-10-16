
<?php
include "./clases/Conexion.php";
include "./clases/Crud.php";
include "./header.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    //echo $datos->nombre;
?>
    
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3 fondoDelete">
                    <div class="card-body">
                        <a href="index.php">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="fa-solid fa-angles-left"></i>Regresar</button>
                        </a>
                        <h2>Eliminar</h2>
                        <table class="table table-bordered">
                            <thead>
                                <td>Nombe</td>
                                <td>Edad</td>
                                <td>Especie</td>
                                <td>Raza</td>
                                <td>Nombre del dueño</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?php echo $datos->nombre; ?> </td>
                                    <td> <?php echo $datos->edad; ?> </td>
                                    <td> <?php echo $datos->especie; ?> </td>
                                    <td> <?php echo $datos->raza; ?> </td>
                                    <td> <?php echo $datos->nom_dueno; ?> </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="alert alert-danger" role="alert">
                            <p>¿Estas seguro de eliminar este registro?</p>
                            <p>No podra ser recuperado!!</p>
                        </div>
                        <form action="./procesos/eliminar.php" method="post">
                            <input type="text" name='id' value="<?php echo $datos->_id; ?>"hidden>
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./scripts.php"; ?>