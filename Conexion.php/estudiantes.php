<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    
    <fieldset>
        <legend>Ingrese sus datos</legend>
        <br>
        <div class="">
            <div class="">
                <form action ="Insertar.php" method="POST">
                    
                    <div>
                        <label for =""> Nombre </label>
                        <input type="text" name ="Nombre" placeholder = "Ingrese su nombre">
                    </div>
                    <br>

                    <div>
                        <label for =""> Apellido </label>
                        <input type="text" name ="Apellido" placeholder = "Ingrese su Apellido">
                    </div>
                    <br>
                    <div>
                        <label for =""> Correo </label>
                        <input type="email" name ="Correo" placeholder = "Ingrese su Email">
                    </div>
                    <br>
                    <div>
                        <label for =""> Telefono </label>
                        <input type="tel" name ="Telefono" placeholder = "Ingrese su Cel">
                    </div>
                    <br>
                    <div>
                        <label for =""> Matricula </label>
                        <input type="number" name ="Matricula" placeholder = "Ingrese su Matricula">
                    </div>
                    <br>   
                    
                    
                    <div>
 
                        <button type="Submit" name = "enviar">enviar</button>
                        
                        <button type="reset" name="borrar">Borrar</button>
                    </div>
                </form>
            </div>   
        </div>
    </fieldset>
</body>
</html>