<?php
include_once 'createdb/createdb.php';
include_once 'includes/head.php';

$id = $_GET['id'];


?>
<div class="row">

<div class="col s12 m6 push-m3">
    <h3 class="light">Editar cliente</h3>

    <form action="action_php/edit.php" method="POST">
    <?php
        $db =  new PDO('sqlite:database/crudphp.db');
        $sql = "SELECT * FROM cliente WHERE id='$id'";
        $result = $db->query($sql);
        foreach($result as $row):

                
    ?>
        <input type="hidden" name="id" value="<?php echo $id;   ?>">     
        <div class="input-field col s12">
            <input id="name" name="nome" type="text" value="<?php echo $row['nome']; ?>">
            <label for="name">Nome</label>
        </div>
        <div class="input-field col s12">
            <input id="sobrenome" name="sobrenome" type="text" value="<?php echo $row['sobrenome']; ?>">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input id="email" name="email" type="text" value="<?php echo $row['email']; ?>">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <input id="idade" name="idade" type="text" value="<?php echo $row['idade']; ?>">
            <label for="idade">idade</label>
        </div>

        <?php
        endforeach;
        
        ?>

        <button class="btn" name="btn-edit" type="submit">Editar Cliente</button>
    </form>

</div>
</div>




<?php
include_once 'includes/footer.php';
?>

    
