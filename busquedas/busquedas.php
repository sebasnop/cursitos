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

                <section class="row my-3 py-3">
                    <div class="container col-8">

                        <h3>Busqueda 1</h3>

                        <p class="text-justify">
                            Visualice el nombre de usuario y el correo electrónico de los profesores
                            que han enseñado <strong>n</strong> cursos en el rango de fechas [<strong>f1</strong>, <strong>f2</strong>].
                        </p>

                        <form action="busqueda1.php" method="POST">

                            <!-- Numero de cursos (n) -->
                            <div class="form-group">
                                <label for="n">Número de cursos</label>
                                <input type="number" min="0" step="1" class="form-control" id="n" name="n"
                                       aria-describedby="numberHelp" placeholder="Ingresa un número de cursos (n)" required>
                                <small id="numberHelp" class="form-text text-muted">Un número entero positivo.</small>
                            </div>

                            <!-- Fecha inicial (f1) -->
                            <div class="form-group">
                                <label for="f1">Fecha inicial</label>
                                <input type="date" class="form-control" id="f1" name="f1" aria-describedby="date1Help" required>
                                <small id="date1Help" class="form-text text-muted">Primer día en el cuál se buscarán cursos (f1).</small>
                            </div>

                            <!-- Fecha final (f2) -->
                            <div class="form-group">
                                <label for="f2">Fecha final</label>
                                <input type="date" class="form-control" id="f2" name="f2" aria-describedby="date2Help" required>
                                <small id="date2Help" class="form-text text-muted">Ultimo día en el cuál se buscarán cursos, posterior al anterior (f2).</small>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </section>

                <hr class="mb-4">

                <section class="row my-3 py-3">
                    <div class="container col-8">

                        <h3>Busqueda 2</h3>

                        <p class="text-justify">
                            Visualice el nombre de usuario y el nombre completo de los administradores
                            que han supervisado entre [<strong>n1</strong>, <strong>n2</strong>] cantidad de cursos.
                        </p>

                        <form action="busqueda2.php" method="POST">

                            <!-- Numero minimo de cursos (n1) -->
                            <div class="form-group">
                                <label for="n1">Cantidad mínima de cursos supervisados</label>
                                <input type="number" min="0" step="1" class="form-control" id="n1" name="n1"
                                       aria-describedby="number1Help" placeholder="Mínimo de cursos (n1)" required>
                                <small id="number1Help" class="form-text text-muted">Un número entero positivo.</small>
                            </div>

                            <!-- Numero maximo de cursos (n2) -->
                            <div class="form-group">
                                <label for="n2">Cantidad máxima de cursos supervisados</label>
                                <input type="number" min="0" step="1" class="form-control" id="n2" name="n2"
                                       aria-describedby="number2Help" placeholder="Máximo de cursos (n2)" required>
                                <small id="number2Help" class="form-text text-muted">Un número entero positivo mayor o igual al anterior.</small>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </section>

            </div>

        </main>

    </body>

</html>