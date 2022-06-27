<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
<!DOCTYPE html>
<html lang="es">
<!--cabecera del html -->

    <head>
        <!--configuraciones basicas del html-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--titrulo de la pagina-->
        <title>Consultas - Cursitos</title>
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

        <header>

            <!--Barra de navegacion-->
            <nav class="navbar navbar-light bg-white">

                <a class="navbar-brand" href="../index.html">
                    <img src="../favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="Logo Cursitos">
                    Cursitos
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../administrador/administrador.php">Administrador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../profesor/profesor.php">Profesor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../curso/curso.php">Curso</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="consultas.php">Consultas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../busquedas/busquedas.php">Busquedas</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <div class="row my-2">
                <div class="col-6">
                    <h2>Consulta 1</h2>
                    <p>La siguiente consulta mostrará el nombre de usuario y el nombre completo de cada uno de los profesores que cumple con todas las siguientes condiciones: </p>
                    <ul>
                    <li>El pofesor es supervisado</li>
                    <li>La sumatoria de la cantidad de estudiantes de los cursos en los que enseña dicho profesor es mayor a 1000 estudiantes.</li>
                    <li>El pofesor enseña al menos 3 cursos</li>
                    <li>El administrador que supervisa al profesor no es supervisor de un curso</li>
                    </ul>

                    <a href = "consulta1.php" class = "btn btn-primary">Consultar 1</a>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="row my-2">
                <div class="col-6">
                <h2>Consulta 2</h2>
                    <p>La siguiente consulta mostrará el código y la cantidad de estudiantes de cada uno de los cursos que cumple todas las siguientes condiciones: </p>
                    <ul>
                    <li>El curso tiene una cantidad de estudiantes mayor que la capacidad del administrador que lo supervisa</li>
                    <li>El profesor que enseña el curos es supervisado por el administrador que supervisa el curso</li>
                    </ul>

                    <a href = "consulta2.php" class = "btn btn-primary">Consultar 2</a>


                </div>

            </div>
        </div>

    </body>

</html>