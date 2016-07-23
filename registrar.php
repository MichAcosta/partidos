<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>

    <!-- Estilos-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

  </head>
  <body>
  <header>
          <!-- menú -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="hoy.php"><img src="img/logo2.png" class="navbar-brand"></a>
                
            </div>

         
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="hoy.php">Hoy</a>
                    </li>
                    <li class="page-scroll">
                        <a href="equipos.php">Equipos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="registrar.php">Registrar</a>
                    </li>
                     <li class="page-scroll">
                        <a href="resultados.php">Resultados</a>
                    </li> 
                    <li class="page-scroll">
                        <a href="salir.php">Salir</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar -->
        </div>
        <!-- /.container-->
    </nav>

    </header>

     <!-- Formulario -->
    <section class="success" id="registro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Registro de marcadores</h2>       
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form name="sentEncuesta" action="solicitud.php" method="POST">
                        <div class="row control-group linea">
                              <div class="form-group col-xs-12">
                               <h4>Elige un partido:</h4>                 
                                <select name="partido">
                                  <option value="Estados Unidos vs. Colombia">Estados Unidos vs. Colombia</option>
                                  <option value="Costa Rica vs. Paraguay">Costa Rica vs. Paraguay</option>
                                  <option value="Haití vs. Perú">Haití vs. Perú</option>
                                  <option value="Brasil vs. Ecuador">Brasil vs. Ecuador</option>
                                  <option value="Jamaica vs. Venezuela">Jamaica vs. Venezuela</option>
                                  <option value="México vs. Uruguay">México vs. Uruguay</option>
                                  <option value="Panamá vs. Bolivia">Panamá vs. Bolivia</option>
                                  <option value="Argentina vs. Chile">Argentina vs. Chile</option>
                                  <option value="Estados Unidos vs. Costa Rica">Estados Unidos vs. Costa Rica</option>
                                  <option value="Colombia vs. Paraguay">Colombia vs. Paraguay</option>
                                  <option value="Brasil vs. Haití">Brasil vs. Haití</option>
                                  <option value="Ecuador vs. Perú">Ecuador vs. Perú</option>
                                  <option value="Uruguay vs. Venezuela">Uruguay vs. Venezuela</option>
                                  <option value="México vs. Jamaica">México vs. Jamaica</option>
                                  <option value="Chile vs. Bolivia">Chile vs. Bolivia</option>
                                  <option value="Argentina vs. Panamá">Argentina vs. Panamá</option>
                                  <option value="Estados Unidos vs. Paraguay">Estados Unidos vs. Paraguay</option>
                                  <option value="Colombia vs. Costa Rica">Colombia vs. Costa Rica</option>
                                  <option value="Ecuador vs. Haití">Ecuador vs. Haití</option>
                                  <option value="Brasil vs. Perú">Brasil vs. Perú</option>
                                  <option value="México vs. Venezuela">México vs. Venezuela</option>
                                  <option value="Uruguay vs. Jamaica">Uruguay vs. Jamaica</option>
                                  <option value="Chile vs. Panamá">Chile vs. Panamá</option>
                                  <option value="Argentina vs. Bolivia">Argentina vs. Bolivia</option>
                                </select>
                              </div>
                            </div><!-- cierra control-gropu -->

                            <div class="row control-group linea">
                              <div class="form-group col-xs-12">
                                 <input type="radio" name="side" value="Local" checked> Local
                              </div>

                              <div class="form-group col-xs-12">
                                <input type="radio" name="side" value="Visitante"> Visitante
                              </div>
                            </div>

                            <div class="row control-group">
                              <div class="form-group col-xs-12">
                                  <h4>Marcador:</h4>
                                  <input type="text" class="form-control" placeholder="0-0" name="marcador" maxlength="5" required data-validation-required-message="Por favor ingrese su marcador">
                              </div>
                            </div>

                            <div class="row">
                            <div class="form-group col-xs-12 linea2">
                                <button type="submit" value="Enviar" name="regitrar" class="btn btn-success btn-lg">Guardar</button>
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