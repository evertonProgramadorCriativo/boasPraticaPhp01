<?php 
$conn = new PDO("mysql:dbname=dudu; host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

$id = 2;

$stmt->execute(array($id));

$conn->commit();

echo "Delete Ok!";

?>