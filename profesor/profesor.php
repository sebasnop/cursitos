<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
<!DOCTYPE html>
<html lang="en">
<!--cabezera del html -->

<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Inicio</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
    para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
    para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">Inicio</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../administrador/administrador.php">Administrador</a>
        </li>

        <li class="nav-item nav-pills">
            <a class="nav-link active"  href="../profesor/profesor.php">Profesor</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../curso/curso.php">Curso</a>
        </li>

        <li class="nav ">
            <a class="nav-link " href="../busquedas/busquedas.php">Busquedas</a>
        </li>



    </ul>
    <div class="container mt-3">
        <div class="row">
            <?php
                if(isset($_GET["nombre_usuario"])){
            ?>
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Editar Profesor
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="update_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="nombre_usuario">Usuario</label>
                                <input type="text" readonly name="nombre_usuario" value=<?=$_GET["nombre_usuario"];?> id="nombre_usuario"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Clave</label>
                                <input type="text" name="clave" value='<?=$_GET["clave"];?>' id="clave" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre Completo</label>
                                <input type="text" name="nombre_completo" value='<?=$_GET["nombre_completo"];?>' id="nombre_completo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" name="correo" value='<?=$_GET["correo"];?>' id="correo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Link de hoja de vida</label>
                                <input type="text" name="hoja_de_vida" value=<?=$_GET["hoja_de_vida"];?> id="hoja_de_vida" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Supervisor</label>
                                <select name="admin_supervisor" id="admin_supervisor" multiple class="form-control" id="exampleFormControlSelect3">
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
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <a href="profesor.php" class="btn btn-danger">Descartar</a>
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
                        Insertar Profesor
                        </div>
                <div class="card-body">
                    <!--formulario para insertar una persona mediante el metodo post-->
                    <form action="insert_p.php" class="form-group" method="post">
                        <div class="form-group">
                            <label for="nombre_usuario">Usuario</label>
                            <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Clave</label>
                            <input type="text" name="clave" id="clave" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nombre Completo</label>
                            <input type="text" name="nombre_completo" id="nombre_completo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" name="correo" id="correo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Link de hoja de vida</label>
                            <input type="text" name="hoja_de_vida" id="hoja_de_vida" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="">Supervisor</label>
                                <select name="admin_supervisor" id="admin_supervisor" multiple class="form-control" id="exampleFormControlSelect3">
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

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Insertar">
                            <a href="profesor.php" class="btn btn-success">Reiniciar</a>
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
                            <th scope="col">Usuario</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre Completo</th>

                            <th scope="col">Correo</th>
                            <th scope="col">Hoja de vida</th>
                            <th scope="col">Supervisor</th>
                            <th scope="col">Opciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('select_p.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['nombre_usuario'];?></td>
                            <td><?=$fila['clave'];?></td>
                            <td><?=$fila['nombre_completo'];?></td>

                            <td><?=$fila['correo'];?></td>
                            <td><?=$fila['hoja_de_vida'];?></td>
                            <td><?=$fila['admin_supervisor'];?></td>

                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['nombre_usuario'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['nombre_usuario'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="profesor.php" method="GET">
                                    
                                    <input type="text" name="nombre_usuario" value=<?=$fila['nombre_usuario'];?> hidden>
                                    <input type="text" name="clave" value='<?=$fila['clave'];?>' hidden>
                                    <input type="text" name="nombre_completo" value='<?=$fila['nombre_completo'];?>' hidden>

                                    <input type="text" name="correo" value='<?=$fila['correo'];?>' hidden>
                                    <input type="text" name="hoja_de_vida" value=<?=$fila['hoja_de_vida'];?> hidden>
                                    <input type="text" name="admin_supervisor" value=<?=$fila['admin_supervisor'];?> hidden>

                                    <button class="btn btn-primary" title="editar" type="submit"><i
                                            class="far fa-edit"></i></button>
                                </form>
                            </td>
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