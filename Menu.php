<?php
    include('funciones.php');
    session_start();
    $_SESSION['nusuario']=$_POST['usuario'];
    $_SESSION['nclave']=$_POST['clave'];

    $miconexion=conectar_bd('','crud');
    $resultado=consulta ($miconexion,"select * from usuarios where
    usua_nomuser='{$_SESSION['nusuario']}' and 
    usua_contra='{$_SESSION['nclave']}'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="Text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Menu principal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="mincss/stilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <?php if($resultado->num_rows>0) { ?> <img 
                src="IMAGENES/banner2.png"> <?php } ?>
                <div id="div3">
                    <?php
                        if ($resultado->num_rows>0)
                            {
                                $fila = $resultado->fetch_object();
                                $_SESSION['Tipo_usuario']=$fila->usua_tipo;
                            

                    ?>
                     
                    <label class="Igris">Bienvenido <?php echo
                    $_SESSION['nusuario'] ?> </label> <br>

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Registro_aprendiz.php'"
                    value="registro de aprendices">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'consulta_aprendiz.php'"
                    value="consulta de aprendices">

                    <br><br>

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'modificar_aprendiz.php'"
                    value="Actualización de aprendices">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'borrar_aprendiz.php'"
                    value="Borrar de aprendices">

                    <br><br>

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Crear programa ">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Consultar programa ">

                    <br><br>  

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Modificar programa ">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Eliminar programa ">

                    <br><br>

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Crear ficha ">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Consultar ficha ">

                    <br><br>

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Modificar ficha ">

                    <input style="width:40%;" class="btn btn-primary"
                    type="button" onclick="location.href = 'Index.php' " value=" Eliminar ficha ">

                    <?php
                        }
                        else
                        {
                        echo "usuario o clave invalido";
                        }
                        $miconexion->close();
                    ?>
                    <br><br>
                </div>

        </div>
    </div>
</body>
</html>