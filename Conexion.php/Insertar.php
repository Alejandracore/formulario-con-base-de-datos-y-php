<?Php

$conexion = mysqli_connect("localhost","root", "" , "datos") or 
die("problemas con la conexion");

    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Correo = $_POST["Correo"];
    $Telefono = $_POST["Telefono"];
    $Matricula = $_POST["Matricula"];

    mysqli_query($conexion, "INSERT INTO registro 
    values (NUll, '$Nombre', '$Apellido', '$Correo', '$Telefono', '$Matricula' )")
    or die ('ERROR' . mysqli_error($conexion));

    mysqli_close($conexion);
    
    header("location: estudiantes.php");
?>