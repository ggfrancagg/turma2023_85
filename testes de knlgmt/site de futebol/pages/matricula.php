<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Futebol</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/matricula.css">
   
    
    <style>
       
    </style>
</head>
<body>
    <button class="toggle-btn" onclick="toggleSidebar()">Toggle Sidebar</button>
    <div class="sidebar">
        <a href="../index.php">Home</a>
        <a href="matricula.php">Matricula</a>
        <a href="local.php">Localização</a>
        <a href="#">About</a>
    </div>

    <div class="content">
        <h1 id="Titulo-2">Faça já a sua matrícula!</h1>
        <form action="matricula.php" method="GET">
            <p><input type="text" name="nome" id="nome" placeholder="Nome" required></p>
            <p><input type="text" name="sobrenome" id="midn" placeholder="Sobrenome" required></p>
            <p><input type="text" name="cpf" id="cpf" placeholder="CPF" required></p>
            <p><input type="submit" name="botao" value="Cadastrar" id="Cadastrar"></p>
        </form>

        <?php
        if (isset($_GET['botao'])) {
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
            $cpf = $_GET['cpf'];
            echo "<div class='form-2'";
            echo "<p>Seu nome é: $nome</p>";
            echo "<p>Sobrenome: $sobrenome</p>";
            echo "<p>Seu CPF: $cpf</p>";
            echo "<form method='GET' action='matricula.php'>";
            echo "<p>Você confirma o seu cadastro?</p>";
            echo "<input type='submit' name='Sim' value='Sim!'>"; 
            echo "<input type='submit' name='Nao' value='Não!'>";
            echo "</div>";
        ?>

        </form>

        <?php
        }

        if (isset($_GET['Sim'])) {
            
            echo "<p id='Legal'>Legal! Sua matrícula foi confirmada!</p>";
            echo "</form>";
        }

        if (isset($_GET['Nao'])) {
            echo "<p>Volte para o campo anterior.</p>";
        }
        ?>
    </div>
    <script>
        var i=1;
        function toggleSidebar() {
            var sidebar = document.querySelector(".sidebar");
            if(i==1){
            //sidebar.classList.toggle("hidden");
            sidebar.style='display:none';
            i++;
        }else{
            sidebar.style='display:block';
            i=1;
        }
        }
    </script>
</body>
</html>
<?php include ('../includes/footer.inc.php');?>
