<?php include "./header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="index.php">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="fa-solid fa-angles-"></i>Regresar</button>
                        </a>
                        <h2><i class="fa-solid fa-shield-dog"></i> Agregar nuevo registro</h2>
                        <form action="./procesos/insertar.php" method="post">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" require>
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad" >
                            <label for="especie">Especie</label>
                            <input type="text" class="form-control" id="especie" name="especie" require>
                            <label for="raza">Raza</label>
                            <input type="text" class="form-control" id="raza" name="raza" require>
                            <label for="nom_dueno">Nombre del dueño</label>
                            <input type="text" class="form-control" id="nom_dueno" name="nom_dueno" require>
                            <button class="btn btn-outline-dark mt-3"><i class="fa-solid fa-floppy-disk"></i>Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./scripts.php"; ?>