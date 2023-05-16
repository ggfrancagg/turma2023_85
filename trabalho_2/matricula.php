<!DOCTYPE html>
<html>
<head>
  <title>Matrícula</title>
 <style type="text/css">

  body{
 background-image: url(img/careca.jpeg);
 background-repeat: no-repeat;
 background-size: cover;
  }
   
   #nome{
    border: double 6px black;
    border-radius: 6px;
   }
   form{
    margin-top: 30vh;
    margin-left: 25vw;
    width:50vw;
    height: auto;

   }
   #idade{
    border: double 6px black;
    border-radius: 6px;
   }
   p.result{
    text-align: center;
    color: white;
    font-size: 1.3rem;
    
   }
 </style>
</head>
<body>
  <form action="matricula.php" method="POST">
  <h2>Matrícula</h2>

  <p>Escreva o nome do Matriculado:<input type="text" name="nome" id="nome"></p>
  <p>Digite a idade do Matriculado:<input type="number" name="idade" id="idade"></p>
<input type="submit" name="botao" value="enviar" id="botao">
</form>
  <?php
    
    if (isset($_POST['idade'])) {
      $idade = intval($_POST['idade']);
      $nome = $_POST['nome'];

      
      if ($idade >= 7 && $idade <= 9) {
        $classificacao = 'Fraldinha';
      } elseif ($idade >= 10 && $idade <= 11) {
        $classificacao = 'Dente de Leite';
      } elseif ($idade >= 12 && $idade <= 13) {
        $classificacao = 'Mirim';
      } elseif ($idade >= 14 && $idade <= 15) {
        $classificacao = 'Infantil';
      } elseif ($idade == 16) {
        $classificacao = 'Infanto Juvenil';
      } elseif ($idade == 17) {
        $classificacao = 'Juvenil';
      } elseif ($idade >= 18 && $idade <= 20) {
        $classificacao = 'Júnior';
      } else {
        $classificacao = 'Não elegível para a escola de futebol.';
      }

      echo "<p class='result'>Para o(a) $nome, pela idade de $idade anos sua classificação é: $classificacao</p>";
    } else {
      echo "<p class='result'>A idade não foi fornecida.</p>";
    }
  ?>
</body>
</html>
