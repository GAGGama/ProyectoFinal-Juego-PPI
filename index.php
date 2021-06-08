<html>

	<head>
		<title>Formulario request</title>
		<script src="js/jquery-3.3.1.min.js"></script>
	</head>
	<script>
		function recibe(){
            console.log("Hola");
			var nickname = document.forma01.nickname.value;		
			// var pass = document.forma01.pass.value;
			 if(nickname==""){
			 	$('#mensaje').html('Faltan campos por llenar');
			 	setTimeout("$('#mensaje').html('')",5000);
			 }else{
			 	/*$.ajax({
			 		url:		'./funciones/verfica_nickname.php',
			 		type:		'post',
			 		data: $("#forma01").serialize(),
			 		success:	function(res){
			 			if(res==0){
			 				$('#mensaje').html('Usuario no encontrado');
			 				setTimeout("$('#mensaje').html('')",5000);
			 			}else{
			 				document.forma01.method='post';
			 				document.forma01.action='jueguito.php';
			 				document.forma01.submit();
			 			}
			 		},
			 		error:  function(){
			 			alert('Error al conectar al servidor...');
			 		}
			 	});*/
				
			 }
             return true;
		}
	</script>
	<style>
		body{
			/*background-image:url("Imagenes/Fondo5.JPG");*/
		}
		
		#formulario{
			background:#FFFFFF;
			position: absolute; /* podría ser relative */
			width: 300px;
			height: 300px;
			left: 35%;
			top: 150px;
			border: groove 1em #A9A4A4;  
			border-radius: 2em;
		}
		form label{
			width:72px;
			font-weight:bold;
			display:inline-block;
		}
		form input[type="text"], form input[type="password"]{
			width:180px;
			padding:3px 10px;
			border:1px solid #f6f6f6;
			border-radius:3px;
			background-color:#f6f6f6;
			margin:8px 0;
			display:inline-block;
		}
		form input[type="submit"]{
			width:90%;
			padding:8px 16px;
			margin-top:32px;
			border:1px solid #000;
			border-radius:5px;
			display:block;
			color:#fff;
			background-color:#000;
		}
		form input[type="submit"]:hover{
			color: #0B86C5;
			background-color: #ffffff;
		}		
	</style>
	
 <body name="Padre">
	<div id="formulario" align="center">
		<form name="forma01" id="forma01" action="./funciones/verifica_nickname.php" method="POST" onsubmit="return recibe()">
			<label>NickName:</label>
			<input type="text" name="nickname" id="nickname" placeholder="Escribe tu nickName"/>
			<br>
			<input onclick="recibe(); return false;" type="submit" value="Ingresar"/>
			<div id="mensaje" class="error"></div>
		</form>
	</div>
 </body>
</html>