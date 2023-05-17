<meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="../css/matricula.css">
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
         <link rel="stylesheet" type="text/css" href="../css/footer.css">
              <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
       <style type="text/css">
              h1{
                     text-align: center;
                     padding: 15px;

              }

       </style>
</head>
<body>
<form action="idade.php" method="GET">
       
       <h1>Escola de Futebol</h1>
       <p>
              <input type="number" name="ano" min="2003" placeholder="Data de nascimento" required></p>
                     <p><input type="submit" value="Verificar"></p>

</form>
<?php

if (isset($_GET['ano'])){
       $ano=$_GET['ano'];
       $idade=2023-$ano;

       echo "<div id='resultado'>";
       if ($idade>=7&&$idade<=9){
              echo "<h1>Fraldinha</h1>";
       } else if ($idade>=10&&$idade<=11){
              echo "<h1>Dente de leite</h1>";
       }else if ($idade>=12&&$idade<=13){
              echo "<h1>Mirim</h1>";
       }else if ($idade>=14&&$idade<=15){
              echo "<h1>Infantil</h1>";
       }else if ($idade>=16&&$idade<=16){
              echo "<h1>Infanto Juvenil</h1>";
       }else if ($idade>=17&&$idade<=17){
              echo "<h1>Juvenil</h1>";
       }else if ($idade>=18&&$idade<=20) {
              echo "<h1>Júnior<h1>";
              
       }
}
?>
</body>
</html>
<?php include('../includes/footer.inc.php');?>