<?php
// O JEITO ERRADO (Fácil de hackear)
// Se o hacker escrever: ' OR 1=1 -- no campo, ele entra sem password!
$user = $_POST['user'];
$query = "SELECT * FROM utilizadores WHERE nome = '$user'";

// O JEITO CERTO (Seguro)
// Usamos "Prepared Statements". O código entende que o nome é apenas texto, não um comando.
$stmt = $pdo->prepare('SELECT * FROM utilizadores WHERE nome = :nome');
$stmt->execute(['nome' => $user]);
?>
