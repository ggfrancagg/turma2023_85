<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Matricula</title>
</head>
<body>
 <form action="Matricula.php" method="POST">
 	<h1>Insira seu nome e data de nascimento para sua classificação</h1>
 	<p>Informe seu nome
 	 <input type="text" name="nome" maxlength="100" size="40" required></p>
 	<p>Informe seu ano de nascimento
 	<input type="number" name="nasc" min="2003" max="2016" required></p>
 	<p><input type="submit" value="Conferir Classificação"></p>
</form>

</body>
 <?php
    if (isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $nasc=$_POST['nasc'];
    $idade=(2023-$nasc);

     if($idade>=7&&$idade<=9){
      echo "<div id='resultado'>";
      echo "<h1>$nome sua classificação foi de Fraldinha</h1>";
   	  echo "</div>";
    }else if ($idade>=10&&$idade<=11){
      echo "<div id='resultado'>";
      echo "<h1>$nome sua classificação foi de Dente de Leite!</h1>";
   	  echo "</div>";
    }else if ($idade>=12&&$idade<=13){
    	  echo "<div id='resultado'>";
          echo "<h1>$nome sua classificação foi de Mirim!</h1>";
   	      echo "</div>";
    }else if ($idade>=14&&$idade<=15){
    	  echo "<div id='resultado'>";
          echo "<h1>$nome sua classificação foi de infantil!</h1>";
   	      echo "</div>";
    }else if ($idade>=16){
    	echo "<div id='resultado'>";
        echo "<h1>$nome sua classificação foi de infanto-juvenil!</h1>";
   	    echo "</div>";
    }else if ($idade>=17){
    	echo "<div id='resultado'>";
        echo "<h1>$nome sua classificação foi de Juvenil!</h1>";
   	    echo "</div>";
    }else if ($idade>=18&&$idade<=20){
     echo "<div id='resultado'>";
     echo "<h1>$nome sua classificação foi júnior!</h1>";
     echo "</div>";
   }
 }

 ?>
</html>