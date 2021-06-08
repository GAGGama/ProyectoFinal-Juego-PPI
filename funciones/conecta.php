<?php
	
	define ("HOST", 'us-cdbr-east-04.cleardb.com');
	define ("BD", 'heroku_cb0cc88446c27b8');
	define ("USER_BD", 'b5e289d6409ef9');
	define ("PASS_BD", '5e49ca09');

	function conecta(){
        echo "Holaaaaaaaaaaaaa CONETCDPIWJV";
		if(!($con=mysql_connect(HOST,USER_BD,PASS_BD))){
			echo "Error conectando al servidor de BBDD";
			exit();		
		}
		
		if(!mysql_select_db(BD,$con)){
			echo "Error Seleccionando BD";
			exit();
		
		}
		//echo "Lograste conectarte a la base de datos <br>";
        echo "GAMA;
		return $con;
	}

   /*  var mysql = require('mysql');

    var con = mysql.createConnection({
    host: "us-cdbr-east-04.cleardb.com",
    user: "b5e289d6409ef9",
    password: "5e49ca09"
    });

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
}); */

	
?>