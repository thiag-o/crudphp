<?php
include_once 'createdb/createdb.php';
include_once 'includes/head.php';
?>
<div class="row">

<div class="col s12 m6 push-m3">
    <h3 class="light">Novo cliente</h3>
    <form action="action_php/createClient.php" method="POST">
        <div class="input-field col s12">
            <input id="name" name="nome" type="text">
            <label for="name">Nome</label>
        </div>
        <div class="input-field col s12">
            <input id="sobrenome" name="sobrenome" type="text">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input id="email" name="email" type="text">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <input id="idade" name="idade" type="text">
            <label for="idade">idade</label>
        </div>

        <button class="btn" name="btn-create" type="submit">Cadastrar Cliente</button>
    </form>

</div>
</div>




<?php
include_once 'includes/footer.php';
?>

    
