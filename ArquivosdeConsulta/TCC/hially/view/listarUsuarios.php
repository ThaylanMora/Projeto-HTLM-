<?php
require_once '../control/listarUsuariosController.php';
require_once '../control/excluirUsuarioController.php';
require_once '../control/alterarUsuarioController.php';

//echo '<pre>';
//var_dump($todos);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Usuarios cadastrados</h1>
    <?php
    foreach ($todos as $t) { ?>

        <!-- Exibir o nome do usuário -->
        Nome: <?php echo $t['nomeUsu']; ?>

  
        <!-- Link para editar o usuário -->
        <a href="alterarUsuario.php?idUsu=<?php echo $t['idUsu']; ?>">&#9998;</a>

        <!-- Link para excluir o usuário -->
        <a href="../control/excluirUsuarioController.php?idUsu=<?php echo $t['idUsu']; ?>"> &#10008;</a>
    </br>
    <?php } ?>


</body>

</html>