<?php

if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
}else{
	$nombre="";
}
if(isset($_POST['usr'])){
	$usr=$_POST['usr'];
}else{
	$usr="";
}
if(isset($_POST['pwd'])){
	$pwd=$_POST['pwd'];
}else{
	$pwd="";
}

if(isset($_POST['pwddos'])){
	$pwddos=$_POST['pwddos'];
}else{
	$pwddos="";
}


if(empty($usr)&& empty($pwd)&& empty($nombre)&& empty($pwddos)){
	echo"<script type=\"text/javascript\">alert('No puede haber campos vacíos'); window.location='index.php';</script>";
}else{

	if($pwd == $pwddos){
	$fp = fopen("usuario.txt", "a+");
	fputs($fp, "\n $nombre - $usr - $pwd");
	fclose($fp);
	header('Location:login.php');
	}else{
	echo"<script type=\"text/javascript\">alert('La contraseña no coincide'); window.location='index.php';</script>";
 }

}

if(file_exists("usuario.txt")){
		$fp = fopen("usuario.txt", "r");		
		while(!feof($fp)) {
		$linea = fgets($fp);
		$tmp=explode("-",$linea);		
		}		
		fclose($fp);
		}
	
?>