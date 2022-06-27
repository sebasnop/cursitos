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

            <?php
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
            ?>

            <div class="container my-5">

                <h1>Búsqueda 1</h1>

                <?php
                if($n1 <= $n2){
                    ?>

                    <p class="text-justify">
                        Visualice el nombre de usuario y el nombre completo de los administradores
                        que han supervisado entre <strong> <?=$n1;?> </strong> y <strong> <?=$n2;?> </strong> cursos.
                    </p>

                    <?php
                } else {
                    ?>

                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">¡Lo sentimos!</h4>
                        <p>El número máximo de cursos supervisados debe ser mayor o igual al mínimo. Vuelve a intentarlo.</p>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg btn-block"
                            onclick="window.location.href='../busquedas/busquedas.php';">Volver</button>

                    <?php
                }
                ?>

            <div>

        </main>

    </body>

</html>
