<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login1.css">
</head> 
<body>
    <div class=center>
<h1> Faça seu Login</h1>
    <form action="login1.php" method="POST">
        <label for="username">Nome:</label>
        <input type="text" name="nome" >
    
        <label for="passaword">Senha:</label>
        <input type="password" name="senha">
    <?php
    if(isset($_GET["invalid"])){
        echo "Usuario ou senha invalida!";
    }
    ?><br>
        <input id="bot" type="submit" value="Entrar">
        
       </form>
       usuario:alexandre <br>
       senha:12345678
       </div>
</body>
</html>