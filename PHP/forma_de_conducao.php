<?php
include("conecta.php");

$Conducao = $_POST['Conducao'];
$FormaConducao = $_POST['FormaConducao'];

$stmt = $pdo->prepare("INSERT INTO forma_conducao
(conducao, forma_conducao) VALUES 
(?, ?)");
$stmt->execute([
    $Conducao, $FormaConducao
]);
?>
