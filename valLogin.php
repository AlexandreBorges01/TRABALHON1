<?php
if(!isset($_POST["user"])&& !isset($_POST["senha"])){
    header("Location: login1.php?invalid");
}

if($_POST["user"]=="alexandre"&&$_POST["senha"]=="12345678"){
    $_SESSION["user"]=$_POST["user"];
    header("location: index.php");
}
?>