<!DOCTYPE html>
<html lang="es">

    <head>
        <!--configuraciones basicas del html-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Titulo de la pagina-->
        <title>Busqueda 2 - Cursitos</title>
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
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
            ?>

            <!-- En este contenedor se mostrara el contenido. Margen de 5 en el eje y -->
            <div class="container my-5">

                <h1>Búsqueda 2</h1>

                <!-- Si los numeros fueron ingresados correctamente entonces se realiza la busqueda -->
                <?php
                if($n1 <= $n2){
                ?>

                    <p class="text-justify">
                        Visualice el nombre de usuario y el nombre completo de los administradores
                        que han supervisado entre <strong> <?=$n1;?> </strong> y <strong> <?=$n2;?> </strong> cursos.
                    </p>

                    <table class="table table-striped table-dark mb-5">

                        <thead>
                        <tr>
                            <th scope="col">Nombre de usuario</th>
                            <th scope="col">Nombre completo</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php

                        // Se establece la conexión con la BD
                        require('../configuraciones/conexion.php');

                        if($n1 != 0){

                            $query="SELECT nombre_usuario, nombre_completo 
                                            FROM administrador 
                                            WHERE nombre_usuario IN (
                                                SELECT admin_supervisa AS nombre_usuario
                                                FROM curso
                                                WHERE admin_supervisa IS NOT NULL
                                                GROUP BY admin_supervisa
                                                HAVING (COUNT(codigo) >= '$n1' AND COUNT(codigo) <= '$n2')
                                             )";

                        } else {

                            $query="SELECT nombre_usuario, nombre_completo 
                                            FROM administrador 
                                            WHERE (
                                                nombre_usuario IN (
                                                    SELECT admin_supervisa AS nombre_usuario
                                                    FROM curso
                                                    WHERE admin_supervisa IS NOT NULL 
                                                    GROUP BY admin_supervisa
                                                    HAVING (COUNT(codigo) >= '$n1' AND COUNT(codigo) <= '$n2')
                                                )
                                            ) OR (
                                                nombre_usuario NOT IN (
                                                    SELECT admin_supervisa AS nombre_usuario
                                                    FROM curso
                                                    WHERE admin_supervisa IS NOT NULL
                                                    GROUP BY admin_supervisa
                                                )
                                            )";
                        }

                        // Se manda la consulta para obtener el resultado
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
                        } else {
                            echo "Ha ocurrido un error al buscar, intenta de nuevo";
                        }
                        ?>

                        </tbody>

                    </table>

                <!-- Si los numeros NO fueron ingresados correctamente entonces NO se realiza la busqueda -->
                <?php
                } else {
                ?>

                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">¡Lo sentimos!</h4>
                        <p>El número máximo de cursos supervisados debe ser mayor o igual al mínimo. Vuelve a intentarlo.</p>
                    </div>

                <?php
                }
                ?>

                <button type="button" class="btn btn-secondary btn-lg btn-block"
                        onclick="window.location.href='../busquedas/busquedas.php';">Volver</button>

            <div>

        </main>

    </body>

</html>
