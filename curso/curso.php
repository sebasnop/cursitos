<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
<!DOCTYPE html>
<html lang="es">

    <!--cabezera del html -->
    <head>
        <!--configuraciones basicas del html-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--titrulo de la pagina-->
        <title>Curso - Cursitos</title>
        <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
        para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas
        para mas informacio : https://fontawesome.com/start-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
                        <a class="nav-link active" href="curso.php">Curso</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../busquedas/busquedas.php">Busquedas</a>
                    </li>
                </ul>
            </nav>

        </header>

        <div class="container mt-3">
            <div class="row">
                <?php
                    if(isset($_GET["codigo"])){
                ?>
                <div class="col-6 px-2">
                    <div class="card">
                        <div class="card-header">
                            Editar Curso
                        </div>
                        <div class="card-body">
                            <form action="update_c.php" class="form-group" method="post">
                                <div class="form-group">
                                    <label for="codigo">Codigo</label>
                                    <input type="text" readonly name="codigo" value=<?=$_GET["codigo"];?> id="codigo"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombre" value='<?=$_GET["nombre"];?>' id="nombre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Categoría</label>
                                    <input type="text" name="categoria" value='<?=$_GET["categoria"];?>' id="categoria" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" name="descripcion" value=<?=$_GET["descripcion"];?> id="descripcion" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Cantidad de estudiantes</label>
                                    <input type="text" name="cantidad_estudiantes" value=<?=$_GET["cantidad_estudiantes"];?> id="cantidad_estudiantes" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha de publicación</label>
                                    <input type="date" name="fecha_publicacion" value=<?=$_GET["fecha_publicacion"];?> id="fecha_publicacion" class="form-control">
                                </div>
                                <div  name="taskOption" class="form-group">
                                    <label for="exampleFormControlSelect2">Tipo</label>
                                    <select class="form-control" onchange="cambioTipo(this)" name="tipo" id="exampleFormControlSelect2">
                                    <option selected="true" disabled="disabled">Seleccione el tipo</option>
                                    <option value="SINCRONICO"> Sincrónico</option>
                                    <option value="ASINCRONICO">Asincrónico</option>

                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="">Profesor</label>
                                <input type="text" name="profesor_ensenia" id="profesor_ensenia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Administrador</label>
                                <input type="text" name="admin_supervisa" id="admin_supervisa" class="form-control">
                            </div>
                            <div id="cupos" class="form-group">
                                <label for="">Cupos </label>
                                <input type="text" name="cupos" id="cupos" class="form-control">
                            </div>
                            <div id="fechafin" class="form-group">
                                <label for="">Fecha de finalización</label>
                                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
                            </div>
                            <div id="duracion" class="form-group">
                                <label for="">Duración estimada</label>
                                <input type="text" name="duracion_estimada" id="duracion_estimada" class="form-control">
                            </div>
                            <script>
                                $("#cupos").hide();
                                $("#fechafin").hide();
                                $("#duracion").hide();
                            </script>
                            <script>
                                    function cambioTipo(select) {
                                        if(select.value==="SINCRONICO"){
                                            $("#duracion").hide();
                                            $("#cupos").show();
                                            $("#fechafin").show();
                                        }
                                        else if(select.value==="ASINCRONICO"){
                                            $("#cupos").hide();
                                            $("#fechafin").hide();
                                            $("#duracion").show();
                                        }
                                    }
                            </script>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                    <a href="curso.php" class="btn btn-danger">Descartar</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            else{
                ?>
                <div class="col-6 px-2">
                    <div class="card">
                        <div class="card-header">
                            Insertar Curso
                            </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insert_c.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Categoría</label>
                                <input type="text" name="categoria" id="categoria" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad de estudiantes</label>
                                <input type="text" name="cantidad_estudiantes" id="cantidad_estudiantes" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de publicación</label>
                                <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="form-control">

                            </div>
                            <div  name="taskOption" class="form-group">
                                    <label for="exampleFormControlSelect2">Tipo</label>
                                    <select class="form-control" onchange="cambioTipo(this)" name="tipo" id="exampleFormControlSelect2">
                                    <option selected="true" disabled="disabled">Seleccione el tipo</option>
                                    <option value="SINCRONICO"> Sincrónico</option>
                                    <option value="ASINCRONICO">Asincrónico</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="">Profesor</label>
                                    <select name="profesor_ensenia" id="profesor_ensenia" multiple class="form-control" id="exampleFormControlSelect2">
                                        <?php
                                        require('select_p.php');
                                        if($result){
                                            foreach ($result as $fila){
                                        ?>
                                                <option value=<?=$fila['nombre_usuario'];?>  ><b>Usuario:</b> <?=$fila['nombre_usuario'];?> </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="">Administrador</label>
                                    <select name="admin_supervisa" id="admin_supervisa" multiple class="form-control" id="exampleFormControlSelect3">
                                        <?php
                                        require('select_a.php');
                                        if($result){
                                            foreach ($result as $fila){
                                        ?>
                                                <option value=<?=$fila['nombre_usuario'];?>  ><b>Usuario:</b> <?=$fila['nombre_usuario'];?> </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>

                            <div id="cupos" class="form-group">
                                <label for="">Cupos</label>
                                <input type="text" name="cupos}" id="cupos" class="form-control">
                            </div>
                            <div id="fechafin" class="form-group">
                                <label for="">Fecha de finalización</label>
                                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
                            </div>
                            <div id="duracion" class="form-group">
                                <label for="">Duración estimada</label>
                                <input type="text" name="duracion_estimada" id="duracion_estimada" class="form-control">
                            </div>
                            <script>
                                $("#cupos").hide();
                                $("#fechafin").hide();
                                $("#duracion").hide();
                            </script>
                            <script>
                                    function cambioTipo(select) {
                                        if(select.value==="SINCRONICO"){
                                            $("#duracion").hide();
                                            $("#cupos").show();
                                            $("#fechafin").show();
                                        }
                                        else if(select.value==="ASINCRONICO"){
                                            $("#cupos").hide();
                                            $("#fechafin").hide();
                                            $("#duracion").show();
                                        }
                                    }
                            </script>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Insertar">
                                <a href="curso.php" class="btn btn-success">Reiniciar</a>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
                <div class="col-6 px-2">

                    <table class="table border-rounded">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad de estudiantes</th>
                                <th scope="col">Fecha de publicación</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Profesor</th>
                                <th scope="col">Administrador</th>
                                <th scope="col">Cupos</th>
                                <th scope="col">Fecha de finalización</th>
                                <th scope="col">Duración estimada</th>

                                <!-- <th scope="col">Opciones</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('select_c.php');
                            if($result){
                                foreach ($result as $fila){
                            ?>
                            <tr>
                                <td><?=$fila['codigo'];?></td>
                                <td><?=$fila['nombre'];?></td>
                                <td><?=$fila['categoria'];?></td>
                                <td><?=$fila['descripcion'];?></td>
                                <td><?=$fila['cantidad_estudiantes'];?></td>
                                <td><?=$fila['fecha_publicacion'];?></td>
                                <td><?=$fila['tipo'];?></td>
                                <td><?=$fila['profesor_ensenia'];?></td>
                                <td><?=$fila['admin_supervisa'];?></td>
                                <td><?=$fila['cupos'];?></td>
                                <td><?=$fila['fecha_fin'];?></td>
                                <td><?=$fila['duracion_estimada'];?></td>
                                <!-- <td>

                                    <form action="delete_c.php" method="POST">
                                        <input type="text" value='<?=$fila['codigo'];?>' hidden>
                                        <input type="text" name="d" value='<?=$fila['codigo'];?>' hidden>
                                        <button class="btn btn-danger" title="eliminar" type="submit"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td class="mx-0 pr-2">
                                    <form action="curso.php" method="GET">
                                        <input type="text" name="codigo" value='<?=$fila['codigo'];?>' hidden>
                                        <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                        <input type="text" name="categoria" value='<?=$fila['categoria'];?>' hidden>
                                        <input type="text" name="descripcion" value='<?=$fila['descripcion'];?>' hidden>
                                        <input type="text" name="cantidad_estudiantes" value='<?=$fila['cantidad_estudiantes'];?>' hidden>
                                        <input type="date" name="fecha_publicacion" value='<?=$fila['fecha_publicacion'];?>' hidden>
                                        <input type="text" name="tipo" value='<?=$fila['tipo'];?>' hidden>
                                        <input type="text" name="profesor_ensenia" value='<?=$fila['profesor_ensenia'];?>' hidden>
                                        <input type="text" name="admin_supervisa" value='<?=$fila['admin_supervisa'];?>' hidden>
                                        <input type="text" name="cupos" value='<?=$fila['cupos'];?>' hidden>
                                        <input type="date" name="fecha_fin" value='<?=$fila['fecha_fin'];?>' hidden>
                                        <input type="text" name="duracion_estimada" value='<?=$fila['duracion_estimada'];?>' hidden>

                                        <button class="btn btn-primary" title="editar" type="submit"><i
                                                class="far fa-edit"></i></button>
                                    </form>
                                </td> -->
                            </tr>
                            <?php
                                    }
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

</html>