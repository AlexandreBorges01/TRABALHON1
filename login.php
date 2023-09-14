
<html>
    <?php
<body>
    

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["nome"];
    $password = $_POST["senha"];
}

?>
</body>
</html>