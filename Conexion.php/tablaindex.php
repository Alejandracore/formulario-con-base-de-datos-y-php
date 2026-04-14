<?Php

$conexion = mysqli_connect("localhost","root", "" , "datos") or 
die("problemas con la conexion");

$reg = mysqli_query($conexion, "SELECT * from registro") or 
die("problemas con la conexion");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">ID</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Apellido</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Telefono</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Matricula</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Editar</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Eliminar</th>
            </tr>
        </thead>
        <tbody class="bg-white">
                <?php
                    while($row=mysqli_fetch_array($reg)){
 
                ?>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200"><?php echo $row['id_estudiante']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200 truncate"><?php echo $row['Nombre']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200"><?php echo $row['Apellido']; ?></td>
                <td class="py-4 px-0 border-b border-gray-200"><?php echo $row['Correo']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200"><?php echo $row['Telefono']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200"><?php echo $row['Matricula']; ?></td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="estudiantes_editar.php?id=<?php echo $row['id_estudiante']; ?>" 
                    class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">
                    Editar
                    </a>
                </td>
                <td class="py-4 px-6 border-b border-gray-200">
                    <a href="estudiantes_eliminar.php?id=<?php echo $row['id_estudiante']; ?>" 
                    class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">
                    Eliminar
                    </a>
                </td>
            </tr>
                <?php 
                }
                ?>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200 truncate"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
               
            </tr>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200 truncate"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
               
            </tr>
            <tr>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200 truncate"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
                <td class="py-4 px-6 border-b border-gray-200"></td>
               
            </tr>  
        </tbody>
    </table>

    
</div>
            <a href="estudiantes.php" 
                class="inline-block mt-4 ml-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                ⬅ Volver a Insertar
            </a> 
</body>
</html>