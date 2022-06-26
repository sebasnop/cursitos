<!DOCTYPE html>
<html lang="en">
<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>inicio</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
        para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir iconos y formas 
         para mas informacion : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="col-6 px-2">
        <table class="table border-rounded">
            <thead class="thead ">
                <tr>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Nombre completo</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    require('../configuraciones/conexion.php');
                    
                    $query="SELECT nombre_usuario, nombre_completo FROM profesor 
                            WHERE admin_supervisor IS NOT NULL
                                AND nombre_usuario IN  (SELECT profesor_ensenia
                                                        FROM curso
                                                        GROUP BY profesor_ensenia
                                                        HAVING COUNT(*) >= 3 AND SUM(cantidad_estudiantes) > 1000
                                                        )
                                AND admin_supervisor NOT IN (SELECT admin_supervisa 
                                FROM curso 
                                WHERE admin_supervisa IS NOT NULL);";
                                   
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                        foreach($result as $fila){
                        ?>
                            <tr>
                                <td><?=$fila['nombre_usuario'];?></td>
                                <td><?=$fila['nombre_completo'];?></td>
                               
                            </tr>
                        <?php
                        }
                    }
                    else{
                        echo "Ha ocurrido un error al buscar, intenta de nuevo";
                    }
            ?>
            <a href = "consultas.php">Regresar</a>

            </tbody>
        </table>
    </div>
</body>
</html>

