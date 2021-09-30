<?php
session_start();
?>
<script>
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem'] ?>'})
    }
     
</script>

<?php

session_unset();

?>