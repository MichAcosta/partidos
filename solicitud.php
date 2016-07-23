<?php

if(isset($_POST['partido'])){
	$partido=$_POST['partido'];
}else{
	$partido="";
}
if(isset($_POST['side'])){
	$side=$_POST['side'];
}else{
	$side="";
}
if(isset($_POST['marcador'])){
	$marcador=$_POST['marcador'];
}else{
	$marcador="";
}


if(empty($partido)&& empty($side)&& empty($marcador)){
	echo"<script type=\"text/javascript\">alert('No puede haber campos vacíos'); window.location='index.php';</script>";
}else{
    $flg=0;
  	$fp = fopen("partidos.txt", "a+");		
		while(!feof($fp)) {
		$linea = fgets($fp);
		$tmp=explode("-",$linea);
		if (trim($partido) == trim($tmp[0])) {
			$flg=1;
		}
	}
		fclose($fp);

		if ($flg==1) {
			echo"<script type=\"text/javascript\">alert('El partido ya fue dado de alta');window.location='hoy.php';</script>";  
		}else{
			$fp = fopen("partidos.txt", "a+");
			fputs($fp, "\n $partido - $side - $marcador");
			fclose($fp);
			echo"<script type=\"text/javascript\">alert('El resultado ha sido guardado'); window.location='hoy.php';</script>";	
		}	
}

// aquí iba

	
?>