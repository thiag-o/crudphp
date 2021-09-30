<?php
session_start();


$db =  new PDO('sqlite:../database/crudphp.db');

if(isset($_POST['btn-create'])):
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = intval($_POST['idade']); 

    $sql = "INSERT INTO cliente (nome, sobrenome, email, idade) 
    VALUES ('$nome','$sobrenome','$email','$idade')";
    try{
        $db->query($sql);
        header("Location: ../index.php");
        $_SESSION['mensagem'] = "Cliente adicionado";
    }catch(Exception $e){
        $_SESSION['mensagem'] = "Erro ao adicionar o Cliente";
        header("Location: ../index.php");
    }
    


endif;
