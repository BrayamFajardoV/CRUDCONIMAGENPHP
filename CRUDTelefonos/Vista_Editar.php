<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Modificar Telefono</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM celulares WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Telefono</h1>
        </center>
        <form action="EditarTelefono.php?IdEditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="NombreTelefono" value="<?php echo $Fila['Nombre']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="DescripcionTelefono" value="<?php echo $Fila['Descripcion']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Imagen</label>
            <input type="File" class="form-control" name="ImagenTelefono">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="Index.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>