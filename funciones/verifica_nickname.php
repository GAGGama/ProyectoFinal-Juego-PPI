<?php

    define ("HOST", 'us-cdbr-east-04.cleardb.com');
    define ("BD", 'heroku_cb0cc88446c27b8');
    define ("USER_BD", 'b5e289d6409ef9');
    define ("PASS_BD", '5e49ca09');

    function conecta(){
        if(!($con=mysql_connect(HOST,USER_BD,PASS_BD))){
            echo "Error conectando al servidor de BBDD";
            exit();		
        }
        
        if(!mysql_select_db(BD,$con)){
            echo "Error Seleccionando BD";
            exit();
        
        }
        //echo "Lograste conectarte a la base de datos <br>";
        return $con;
    }

	//session_start();
	//verifica correo
	//require "conecta.php";
     
	$con_=conecta();
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