<?php
	//session_start();
	//verifica correo
	//require "conecta.php";
     
	$con=conecta();
	//Recibe variables
	$nickname = $_POST['nickname'];
    // $contrasena  = $_POST['pass'];
	$num	=0;
	// $contrasena = md5($contrasena);
	
	// $sql="SELECT * FROM administradores WHERE correo='$correo' AND pass='$contrasena' AND status=1 AND eliminado=0";
	// $res=mysql_query($sql, $con);
	// $num=mysql_num_rows($res);
	
	 if($num){
	// 	$idU 	= mysql_result($res,0,"id");
	// 	$nombre	=mysql_result($res,0,"nombre").' '.mysql_result($res,0,"apellidos");
	// 	$_SESSION['idU']	= $idU;
	// 	$_SESSION['nombre']	=$nombre;
	}
	echo "Hlaaaaaaa";
	//echo $num;
?>