<?php
session_start();
if(isset($_SESSION['msg'])):
    $msg = $_SESSION['msg'];
    session_unset();  
?>
<script>
    alert("<?= $msg?>");
</script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="processalogin.php" method="POST">
        <p><input type="email" name="email" placeholder="Email" autofocus></p>
        <p><input type="password" name="senha" placeholder="Senha"></p>
        <p><button name="btn">Logar</button></p>
    </form>
</body>
</html>