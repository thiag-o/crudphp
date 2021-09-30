<?php
include_once 'createdb/createdb.php';
include_once 'includes/head.php';
include_once 'includes/message.php';

?>
<div class="row">
<div class="col s8 push-s2">
    <table class="striped">
        <h2 class="light">Clientes</h2>
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $db =  new PDO('sqlite:database/crudphp.db');
                $sql = "SELECT * FROM cliente";
                $result = $db->query($sql);
                foreach($result as $row):


                
            ?>
            <tr>
                
            <td><?php echo $row['nome'];  ?></td>
            <td><?php echo $row['sobrenome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['idade']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn-floating amber darken-4"><i class="material-icons">edit</i></a></td>
            <td>
            
                 <!-- Modal Trigger -->
            <a class="btn-floating red modal-trigger" href="#modal<?php echo $row['id'];?>"><i class="material-icons">delete</i></a>


           
            </td>
            </tr>
            
            <div id="modal<?php echo $row['id'];?>" class="modal">
            <div class="modal-content">
                <h4>Deletar cliente</h4>
                <p>Deseja deletar o cliente <strong><?php echo $row['nome']; ?></strong></p>
            </div>
            <div class="modal-footer">
                
                <form action="action_php/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <button type="submit" name="btn-delete" class="btn red">DELETAR</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Não</a>
                </form>
            </div>
            </div>    
            <?php 


            
            endforeach;
            
            ?>
            <!-- Modal Structure -->
            
        </tbody>
    </table>
    <br>
    <a href="add.php" class="btn indigo darken-4"><i class="material-icons right">add</i>Adicionar Cliente</a>
</div>
</div>





<?php
include_once 'includes/footer.php';
?>

    
