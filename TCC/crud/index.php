<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar Usuarios</title>
    <style>
    .menu,
    thead {
        background-color: #bbb !important;
    }

    .row {
        padding: 10px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                Listar Usuarios
            </a>
            <a class="navbar-brand"  href="http://localhost/TCC/cadastro_administrador.php">
             Novo Administrador
            </a>
        </div>
    </nav>
    <div class="container">
        <!-- <form action="app/controller/UsuarioController.php" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <label>nome</label>
                    <input type="text" name="nome" value="" autofocus class="form-control" require />
                </div>
                <div class="col-md-5">
                    <label>email</label>
                    <input type="text" name="email" value="" class="form-control" require />
                </div>
                <div class="col-md-2">
                    <label>senha</label>
                    <input type="num" name="senha" value="" class="form-control" require />
                </div>
                <div class="col-md-2">
                    <label>perfil</label>
                    <input type="number" name="perfil" value="" class="form-control" require />
                </div>
                <div class="col-md-2">
                    <label>telefone</label>
                    <input type="num" name="telefone" value="" class="form-control" require />
                </div>
                <div class="col-md-2">
                    <br>
                    <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form> -->
        <!-- <hr> -->
         <br>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>IDusuario</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Perfil</th>
                        <th>Telefone</th>
                        <th>Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario) : ?>
                    <tr>
                        <td><?= $usuario->getidusuario() ?></td>
                        <td><?= $usuario->getnome() ?></td>
                        <td><?= $usuario->getemail() ?></td>
                        <td><?= $usuario->getsenha() ?></td>
                        <td><?= $usuario->getperfil()?></td>
                        <td><?= $usuario->gettelefone()?></td>
                        <td class="text-center">
                            <button class="btn  btn-warning btn-sm" data-toggle="modal"
                                data-target="#editar><?= $usuario->getidusuario() ?>">
                                Editar
                            </button>
                            <a href="app/controller/UsuarioController.php?del=<?= $usuario->getidusuario() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="editar><?= $usuario->getidusuario() ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="app/controller/UsuarioController.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>nome</label>
                                                <input type="text" name="nome" value="<?= $usuario->getnome() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-7">
                                                <label>email</label>
                                                <input type="text" name="email" value="<?= $usuario->getemail() ?>"
                                                    class="form-control" require />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>senha</label>
                                                <input type="num" name="senha" value="<?= $usuario->getsenha() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-3">
                                                <label>perfil</label>
                                                <input type="number" name="perfil" value="<?= $usuario->getperfil() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-3">
                                                <label>telefone</label>
                                                <input type="text" name="telefone" value="<?= $usuario->gettelefone() ?>"
                                                    class="form-control" require />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <input type="hidden" name="idusuario"
                                                    value="<?= $usuario->getidusuario() ?>" />
                                                <button class="btn btn-warning" type="submit"
                                                    name="editar">Editar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>