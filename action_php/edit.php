<?php
session_start();

$db =  new PDO('sqlite:../database/crudphp.db');

if(isset($_POST['btn-edit'])):

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = intval($_POST['idade']); 


    $sql = "UPDATE cliente
    SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade'
    WHERE id ='$id';
    ";

    try{
        $db->query($sql);
        $_SESSION['mensagem'] = "Cliente editado";
        header("Location: ../index.php");
    }catch(Exception $e){
        $_SESSION['mensagem'] = "Erro ao editar o Cliente";
        header("Location: ../index.php");

    }
    

endif;