<?php
    require_once('conexion.php');

   echo"<script> alert('Seguro de que deseas eliminar esta fila'); </script>";
   $ID = $_GET['id'];
   $consulta = mysqli_query($conexion, "DELETE FROM registro WHERE id_estudiante = '$ID'")
   or die("Error en eliminar datos");
  
   header("location: tablaindex.php");
?>