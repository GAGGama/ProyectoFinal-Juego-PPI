<?php
	
	define ("HOST", 'localhost');
	define ("BD", 'cliente01');
	define ("USER_BD", 'root');
	define ("PASS_BD", 'root');

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
	
?>