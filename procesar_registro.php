<?php

$servername = "sql309.infinityfree.com";  
$username = "if0_37229230";
$password = "poubdZSEAM";
$dbname = "if0_37229230_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$user_key = $_POST['user_key'];
$curso = $_POST['curso'];

$sql = "INSERT INTO usuarios (usuario, user_key, curso) VALUES ('$usuario', '$user_key', '$curso')";

if ($conn->query($sql) === TRUE) {
    header("Location: registro_exitoso.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>



