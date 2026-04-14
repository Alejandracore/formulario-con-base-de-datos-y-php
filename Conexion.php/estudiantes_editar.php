<?Php

$conexion = mysqli_connect("localhost","root", "" , "datos") or 
die("problemas con la conexion");

$consulta = null;
if(isset($_GET['id'])){
    $ID = $_GET['id'];

    $consulta = mysqli_query($conexion, "SELECT * FROM registro where id_estudiante = $ID") 
    or die("problemas con la consulta". mysqli_error($conexion));  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    
    <?php
        if($consulta && $traer = mysqli_fetch_array($consulta)){
    ?>
        <fieldset>
            <legend>Ingrese sus datos</legend>
            <br>
            <div class="">
                <div class="">
                    <form action ="Actualizar.php" method="POST">
                        
                     <input type="hidden" name="id_estudiante" value="<?php echo $ID; ?>">
                        <div>
                            <label for =""> Nombre </label>
                            <input type="text" name ="Nombre" placeholder = "Ingrese su nombre" value = "<?php echo $traer['Nombre'];  ?>" required >
                        </div>
                        <br>

                        <div>
                            <label for =""> Apellido </label>
                            <input type="text" name ="Apellido" placeholder = "Ingrese su Apellido" value = "<?php echo $traer['Apellido'];  ?>" required>
                        </div>
                        <br>
                        <div>
                            <label for =""> Correo </label>
                            <input type="email" name ="Correo" placeholder = "Ingrese su Email" value = "<?php echo $traer['Correo'];  ?>" required>
                        </div>
                        <br>
                        <div>
                            <label for =""> Telefono </label>
                            <input type="tel" name ="Telefono" placeholder = "Ingrese su Cel" value = "<?php echo $traer['Telefono'];  ?>" required>
                        </div>
                        <br>
                        <div>
                            <label for =""> Matricula </label>
                            <input type="number" name ="Matricula" placeholder = "Ingrese su Matricula" value = "<?php echo $traer['Matricula'];  ?>" required>
                        </div>
                        <br>   
                        
                        
                        <div>
    
                            <button type="Submit" name = "Actualizar">Actualizar</button>
                            
                            <button type="reset" name="borrar">Borrar</button>
                        </div>
                    </form>
                </div>   
            </div>
        </fieldset>
    <?php
        }
    ?>
    
</body>
</html>