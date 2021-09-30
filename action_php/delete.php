<?php
session_start();

$db =  new PDO('sqlite:../database/crudphp.db');
if(isset($_POST['btn-delete'])):
    $id = intval($_POST['id']);
    $sql = "DELETE FROM cliente WHERE id = '$id'";
    try{
        $db->query($sql);
        header("Location: ../index.php");
        $_SESSION['mensagem'] = "Cliente Deletado";
    }catch(Exception $e){
        header("Location: ../index.php");
        $_SESSION['mensagem'] = "Erro ao deletar o cliente";
    }

endif;