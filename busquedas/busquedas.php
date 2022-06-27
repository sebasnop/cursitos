<!DOCTYPE html>
<html lang="es">
<!--cabecera del html -->

    <head>
        <!--configuraciones basicas del html-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--titrulo de la pagina-->
        <title>Busquedas - Cursitos</title>
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

        <header>

            <!--Barra de navegacion-->
            <nav class="navbar">
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
                        <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="busquedas.php">Busquedas</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Parte principal -->
        <main>

            <!-- my-3 es "margin" en eje "y" (Top & Bottom) de 3 -->
            <div class="container my-5">

                <h1>Busquedas</h1>

                <section class="row my-3 py-3 bg-white">

                    <div class="col-8">

                        <h3>Busqueda 1</h3>

                        <p>
                            Busque los profesores que han enseñado <strong>n</strong> cursos en el rango de fechas [<strong>f1</strong>, <strong>f2</strong>]
                        </p>

                        <form action="busquedas.php" method="GET">

                            <!-- Numero de cursos (n) -->
                            <div class="form-group">
                                <label for="n">Número de cursos</label>
                                <input type="number" min="0" step="1" class="form-control" id="n" name="n"
                                       aria-describedby="numberHelp" placeholder="Ingresa un número de cursos (n)" required>
                                <small id="numberHelp" class="form-text text-muted">Un número entero positivo.</small>
                            </div>

                            <!-- Fecha inicial (f1) -->
                            <div class="form-group">
                                <label for="f1">Fecha inicial (f1)</label>
                                <input type="date" class="form-control" id="f1" name="f1" aria-describedby="date1Help" required>
                                <small id="date1Help" class="form-text text-muted">Primer día en el cuál se buscarán cursos.</small>
                            </div>

                            <!-- Fecha final (f2) -->
                            <div class="form-group">
                                <label for="f2">Fecha final</label>
                                <input type="date" class="form-control" id="f2" name="f2" aria-describedby="date2Help" required>
                                <small id="date2Help" class="form-text text-muted">Ultimo día en el cuál se buscarán cursos.</small>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>

                </section>

                <div class="row my-3">


                </div>

            </div>

        </main>

    </body>

</html>