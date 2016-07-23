<?php

if(isset($_POST['usr'])){
    $usr=$_POST["usr"];
}else{
	$usr="";
}

if(isset($_POST['pwd'])){
    $pwd=$_POST["pwd"];
}else{
	$pwd="";
}

if(empty($usr)&& empty($pwd)){
	echo"<script type=\"text/javascript\">alert('No puede haber campos vacíos'); window.location='login.php';</script>";
}else{

    $flg=0;
  	$fp = fopen("usuario.txt", "a+");		
		while(!feof($fp)) {
		$linea = fgets($fp);
		$tmp=explode("-",$linea);
		if (trim($usr) == trim($tmp[1])&& trim($pwd)==trim($tmp[2])) {
			$flg=1;
		}
	}
		fclose($fp);

		if ($flg==1) {
			header('Location:hoy.php');
		}else{
			// echo '<script language="javascript">alert("El Password o el Nombre de Usuario no coincide");</script>';
			echo"<script type=\"text/javascript\">alert('La contraseña o el nombre de usuario no coincide'); window.location='login.php';</script>";  
		}

}


?>