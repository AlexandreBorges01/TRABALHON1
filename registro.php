<?php
//if($_SERVER["request_method"] == "POST"){

   
    
    $username = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["senha"];

if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 8){
  header("location: login1.php");
   exit();
} else{
   echo "Erro! E-mail ou senha inválidos!";
}                  


?>
