<?php
session_start();
if(isset($_SESSION['user'])){
    $nome = $_SESSION['user'];
}else{
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php if(isset($nome)): ?>
    <h1>Bem vindo <?= $nome; ?></h1>
<?php endif; ?>
<a href="logout.php">Sair</a>
</body>
</html>