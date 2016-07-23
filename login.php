<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Final| Copa Centenario</title>

    <!-- Estilos -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <!-- Formulario -->
    <section class="success" id="encuesta-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="img/logo.png" class="logo">
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                 <!-- Inicia Formulario -->
                    <form name="sentRegistro" action="verificar2.php" method="POST">

                      <div class="row control-group">
                        <div class="form-group col-xs-12">
                           <input type="text" class="form-control" placeholder="Usuario" name="usr">
                        </div>
                      </div>

                      <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <input type="password" class="form-control" placeholder="Password" name="pwd">
                        </div>
                      </div>

                        <div class="row">
                            <div class="form-group col-xs-12 linea2">
                                <button type="submit" value="Enviar" name="regitrar" class="btn btn-success btn-lg">Iniciar sesión</button>
                                <a href="index.php" class="btn btn-success btn-lg">Registrar</a>
                            </div>
                        </div>                  
                    </form>
            
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>