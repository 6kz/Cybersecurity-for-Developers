<?php
// O JEITO ERRADO
// O site só vê o ID, mas não confirma se o ID pertence a quem está logado.
$id_perfil = $_GET['id']; 
echo "A mostrar dados do perfil: " . $id_perfil;

// O JEITO CERTO
// Confirmamos se o ID solicitado é o mesmo ID do utilizador que fez login.
session_start();
if ($id_perfil != $_SESSION['user_id']) {
    die("Erro: Não tens permissão para ver este perfil!");
}
?>
