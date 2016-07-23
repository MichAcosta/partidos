<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoy</title>
    <!-- estilos -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <header>
          <!-- Navigation -->
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
    <section class="success" id="partidos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Partidos del día:</h2>
                    <?php
                    $timezone = date_default_timezone_set("America/Mexico_City");
                    echo date('d-F-Y');                                       
                    ?>                 
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <?php

                       $timezone = date_default_timezone_set("America/Mexico_City");

                       $fecha_actual = strtotime(date("d-F-Y"));
                       $fecha1 = strtotime("03-06-2016");
                       $fecha2 = strtotime("04-06-2016");
                       $fecha3 = strtotime("05-06-2016");
                       $fecha4 = strtotime("06-06-2016");
                       $fecha5 = strtotime("07-06-2016");
                       $fecha6 = strtotime("08-06-2016");
                       $fecha7 = strtotime("09-06-2016");
                       $fecha8 = strtotime("10-06-2016");
                       $fecha9 = strtotime("11-06-2016");
                       $fecha10 = strtotime("12-06-2016");
                       $fecha11 = strtotime("13-06-2016");
                       $fecha12 = strtotime("14-06-2016");

                        if($fecha_actual == $fecha1){
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Estados Unidos</td><td>vs</td><td>Colombia</td><td>20:30 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha2) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Costa Rica</td><td>vs</td><td>Paraguay</td><td>16:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Hait&iacute;</td><td>vs</td><td>Per&uacute;</td><td>18:30 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Brasil</td><td>vs</td><td>Ecuador</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha3) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Jamaica</td><td>vs</td><td>Venezuela</td><td>16:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>M&eacute;xico</td><td>vs</td><td>Uruguay</td><td>19:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha4) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Panam&aacute;</td><td>vs</td><td>Bolivia</td><td>18:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Argentina</td><td>vs</td><td>Chile</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>"; 
                        }elseif ($fecha_actual == $fecha5) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Estados Unidos</td><td>vs</td><td>Costa Rica</td><td>19:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Colombia</td><td>vs</td><td>Paraguay</td><td>21:30 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha6) {
                           echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Brasil</td><td>vs</td><td>Hait&iacute;</td><td>18:30 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Ecuador</td><td>vs</td><td>Per&uacute;</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha7) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Uruguay</td><td>vs</td><td>Venezuela</td><td>18:30 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>M&eacute;xico</td><td>vs</td><td>Jamaica</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha8) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Chile</td><td>vs</td><td>Bolivia</td><td>18:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Argentina</td><td>vs</td><td>Panam&aacute;</td><td>20:30 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha9) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Estados Unidos</td><td>vs</td><td>Paraguay</td><td>18:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Colombia</td><td>vs</td><td>Costa Rica</td><td>20:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha10) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Ecuador</td><td>vs</td><td>Hait&iacute;</td><td>17:30 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Brasil</td><td>vs</td><td>Per&uacute;</td><td>19:30 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha11) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>M&eacute;xico</td><td>vs</td><td>Venezuela</td><td>19:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Uruguay</td><td>vs</td><td>Jamaica</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }elseif ($fecha_actual == $fecha12) {
                          echo "<center>";
                          echo "<table>";
                          echo "<tr>";
                          echo "<td>Chile</td><td>vs</td><td>Panam&aacute;</td><td>19:00 Hrs</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Argentina</td><td>vs</td><td>Bolivia</td><td>21:00 Hrs</td>";
                          echo "</tr>";
                          echo "</table";
                          echo "</center>";
                        }else{
                          echo "No hay m&aacute;s partidos";
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