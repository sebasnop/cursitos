<!DOCTYPE html>
<html lang="es">

    <head>
        <!--configuraciones basicas del html-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Titulo de la pagina-->
        <title>Busqueda 1 - Cursitos</title>
        <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
            para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir iconos y formas
             para mas informacion : https://fontawesome.com/start-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
              integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Favicon: Icono de la pestana del navegador -->
        <link rel="icon" type="image/x-icon" href="../favicon.ico">

    </head>

    <body>

        <main>
            <!-- Se inicializan los parametros que vienen del formulario
                 para ser usados en el programa -->
            <?php
                $n = $_POST["n"];
                $f1 = $_POST["f1"];
                $f2 = $_POST["f2"];
            ?>

            <!-- En este contenedor se mostrara el contenido. Margen de 5 en el eje y -->
            <div class="container my-5">

                <h1>Búsqueda 1</h1>

                <!-- Si las fechas fueron ingresadas correctamente entonces se realiza la busqueda -->
                <?php
                    if($f1 <= $f2){
                ?>

                        <p class="text-justify">
                            Visualice el nombre de usuario y el correo electrónico de los profesores
                            que han enseñado <strong> <?=$n;?> </strong> cursos en el rango de fechas
                            [<strong> <?=$f1;?> </strong>, <strong> <?=$f2;?> </strong>].
                        </p>

                        <table class="table table-striped table-dark mb-5">

                            <thead>
                                <tr>
                                    <th scope="col">Nombre de usuario</th>
                                    <th scope="col">Correo electrónico</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php

                                // Se establece la conexión con la BD
                                require('../configuraciones/conexion.php');

                                if($n != 0){

                                    // Si se buscan los que SI ensenian cursos ($n != 0)
                                    // se realiza un conteo de cursos por profe en el rango [f1,f2]
                                    // y se muestran los del conteo = n

                                    $query="SELECT nombre_usuario, correo 
                                            FROM profesor 
                                            WHERE nombre_usuario IN (
                                                SELECT profesor_ensenia AS nombre_usuario
                                                FROM (
                                                    SELECT codigo, profesor_ensenia
                                                    FROM curso
                                                    WHERE (fecha_publicacion >= '$f1' AND fecha_publicacion <= '$f2' AND profesor_ensenia IS NOT NULL)
                                                ) AS cursosIntervalo
                                                GROUP BY profesor_ensenia
                                                HAVING COUNT(codigo) = '$n'
                                             )";

                                } else {

                                    // Si se buscan los que NO ensenian cursos ($n = 0)
                                    // se buscan los profes que SI ensenian cursos en el intervalo [f1,f2]
                                    // y se muestran los que NO esten en dicha busqueda

                                    $query="SELECT nombre_usuario, correo 
                                            FROM profesor 
                                            WHERE nombre_usuario NOT IN (
                                                SELECT profesor_ensenia AS nombre_usuario
                                                FROM (
                                                    SELECT codigo, profesor_ensenia
                                                    FROM curso
                                                    WHERE (fecha_publicacion >= '$f1' AND fecha_publicacion <= '$f2' AND profesor_ensenia IS NOT NULL)
                                                ) AS cursosIntervalo
                                                GROUP BY profesor_ensenia
                                             )";
                                }

                                // Se manda la consulta para obtener el resultado
                                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                if($result){
                                    foreach($result as $fila){
                            ?>

                                <tr>
                                    <td><?=$fila['nombre_usuario'];?></td>
                                    <td><?=$fila['correo'];?></td>
                                </tr>

                            <?php
                                    }
                                } else {
                                    echo "Ha ocurrido un error al buscar, intenta de nuevo";
                                }
                            ?>

                            </tbody>

                        </table>

                        <hr class="mb-4">

                <!-- Si las fechas NO fueron ingresadas correctamente entonces NO se realiza la busqueda -->
                <?php
                    } else {
                ?>

                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">¡Lo sentimos!</h4>
                        <p>La fecha final debe ser igual o posterior a la inicial. Vuelve a intentarlo.</p>
                    </div>

                <?php
                }
                ?>

                <button type="button" class="btn btn-secondary btn-lg btn-block mt-5"
                        onclick="window.location.href='../busquedas/busquedas.php';">Volver</button>

            <div>
        </main>

    </body>

</html>