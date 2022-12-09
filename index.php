<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="Text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="mincss/stilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <img src="IMAGENES/banner.png ">
            <div id="div3">
                <form id="formulario" method="post" action="Menu.php">
                    <br>
                    <strong class="Igris">Ingrese su usuario y contraseña para iniciar sesion</strong>
                    <br>
                    <label class="Igris">Nombre de Usuario:</label>
                    <br>
                    <input style="text-transform: uppercase;" type="text" name="usuario" value="" required>
                    <br>
                    <label class="Igris">Contraseña:</label>
                    <br>
                    <input  type="password" name="clave" value="" required>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Iniciar sesion">
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>