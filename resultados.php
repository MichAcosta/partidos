<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Equipos</title>

    <!-- Estilos -->
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
            <!-- /.navbar- -->
        </div>
        <!-- /.container-->
    </nav>

    </header>

    <!-- Formulario -->
    <section class="success" id="partidos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Resultados</h2>              
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <?php
                       error_reporting(0);
                       $p=0;
                       if(file_exists("partidos.txt")){
                        $fp = fopen("partidos.txt", "a+");
                        echo "<center>";
                        echo "<table>";
                        while(!feof($fp)) {
                        $linea = fgets($fp);
                        $tmp=explode("-",$linea); 
                        echo "<tr><td>Partido ".$p++."</td><td>".$tmp[0]."</td><td>".$tmp[1]."</td><td>".$tmp[2]."-".$tmp[3]."</td></tr>";                                               
                        }  
                        echo "</table>";
                        echo "</center>";                  
                        fclose($fp);
                        }
                   ?>
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