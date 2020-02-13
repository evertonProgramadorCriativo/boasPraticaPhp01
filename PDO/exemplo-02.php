<?php
$conn = new PDO("mysql:dbname=dudu;host=localhost", "root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "rosane";
$password = "12212121";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido ok!";

?>