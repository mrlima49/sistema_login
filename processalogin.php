<?php

session_start();
require_once "./dbconfig.php";

if(isset($_POST['btn'])){
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    if($email && $senha){
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetch();
            $_SESSION['user'] = $dados['nome'];
            header("location: home.php");
        }else{
            $_SESSION['msg'] = "usuário ou senha inválidos";
            header("location: index.php");
        }
    }
}else{
    header("location: index.php");
}