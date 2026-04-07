<?php
$conexion = mysqli_connect("localhost","root", "" , "datos") or 
die("problemas con la conexion");

    $ID = $_POST['id_estudiante'];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Correo = $_POST["Correo"];
    $Telefono = $_POST["Telefono"];
    $Matricula = $_POST["Matricula"];

    mysqli_query($conexion, "update registro set
    Nombre = '$Nombre',
    Apellido = '$Apellido',
    Correo = '$Correo',
    Telefono = '$Telefono',
    Matricula = '$Matricula'
    WHERE id_estudiante = $ID")
    or die ('error: ' . mysqli_error($conexion));

    mysqli_close($conexion);
    
    header("location: estudiantes.php");


?>