<?php
$conn = new PDO("mysql:dbname=dudu;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE  idusuario = :ID");


$login = "sucesso";

$password = "dudu";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "ALTERADO OKss!"


?>