
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Matricula</title>
 </head>
 <body>
 	<form action="matricula.php" method="GET">
 		<h1>Faça agora mesmo sua matricula!</h1>
 		<p>Digite seu nome: <input type="text" name="texto">
 		<p>Digite a sua idade:<input type="number" name="numero" required></p>
 		<p><input type="submit" name="botao" value="Verificar"></p>	
 	</form>

 	<?php
 	if (isset($_GET['botao'])){
 		$numero=$_GET['numero'];
 	if ($numero>=6&&$numero<=10){
 		echo "Fraldinha";
 	}else if ($numero>=9&&$numero<=12){
 		echo "Dente de leite";
 	}else if ($numero>=11&&$numero<14){
 		echo "Mirim";
 	}else if ($numero>=13&&$numero<16){
 		echo "Infantil";
 	}else if ($numero==16){
 		echo "Infanto-juvenil";
 	}else if ($numero==17){
 		echo "Juvenil";
 	}else if ($numero>=17){
 		echo "Júnior";
 	}

 			
 	
 }
 	?>	 
 
 </body>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                