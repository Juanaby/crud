<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="Text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Registro de aprendices</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="mincss/stilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2"></div>
        <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
            <img src="IMAGENES/banner3.png"> <?php } ?>
            <div id="div3">
            <?php
                    if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                    {
                ?>
                    <form id="formulario" role=form method="post" action="guardado _aprendiz.php">
                        <div class="col-md-12">
                            <strong class="igris">Ingrese los datos del aprendiz</strong>
                            <br>
                            <label for="igris">Identificación</label>
                            <div class="form-row">
                                <div class="form-goup col-xs-2">
                                    <select class="form-control" name="tipoid">
                                        <option value="cc">CC</option>
                                        <option value="TI">TI</option>
                                        <option value="RC">RC</option>
                                        <option value="PEP">PEP</option>
                                    </select>
                                </div>

                                 <div class="form-group col-md-6">
                                 <input class="form-control input-lg" type="text-transform:uppercase;"
                                    type="text" value="" placeholder="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" requiered/>
                            
                                 </div>
                                 </div>

                                 <label class="igris">Nombres</label>
                                    <input class="form-control" type="text-transform:uppecase;" type="text" name="nombres"
                                    value="" placeholder="nombres" required/>

                                    <label class="igris">Apellidos</label>
                                    <input class="form-control" type="text-transform:uppecase;" type="text" name="apellidos"
                                    value="" placeholder="apellidos" required/>

                                    <label class="igris">Dirección</label>
                                    <input class="form-control" type="text-transform:uppecase;" type="text" name="direccion"
                                    value="" placeholder="direccion" required/>

                                    <label class="igris">Telefono</label>
                                    <input class="form-control input-lg" type="number" name="telefono"
                                    type="text" value="" min="9999" max="9999999999999" value="" placeholder="telefono" requiered/>

                                    <label class="igris">Ficha</label>
                                    <input class="form-control input-lg" type="number" name="ficha"
                                    type="text" value="" min="9999" max="9999999999999" value="" placeholder="" requiered/>

                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Guardar">

                            </div>
                        </div>   
                    </form>
                        <?php
                         }
                            else
                        {
                            echo "No tiene permiso para realizar esta acción";
                        }
                        ?>
                        <br>
            </div>
    </div>

    
</body>
</html>