<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <header>
        <div class="logo">
            <img src="imagem/logo-menor.png" alt="logo do nav">
        </div>
        <div class="menu">
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="animais.php">PETS</a></li>
                <li><a href="login2.php">Administração</a></li>

            </ul>
        </div>
    </header>

    <div class="container mt-5">
        <h1>Tabela Cadastro</h1>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Foto</th>
                          
                        </tr>
                    </thead>
                    <?php
                    $servidor_bd = "127.0.0.1";
                    $usuario_bd = "root";
                    $senha_bd = "";
                    $banco_de_dados = "banco_cadastro";

                    $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

                    $sql_buscar = "select * from pet";

                    $todos_os_pet = mysqli_query($conexao, $sql_buscar);

                    while ($um_pet = mysqli_fetch_assoc($todos_os_pet)) :
                    ?>
                        <tr>
                            <td> <?php echo $um_pet["Nome"] ?> </td>
                            <td> <?php echo $um_pet["Foto"] ?> </td>
                                <td>
                                <a href="excluir-usuarios.php?id=<?php echo $um_pet["ID"]; ?>" class="btn btn-light btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-denger" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </a>
                                <a href="editar_pet.php?id=<?php echo $um_pet["ID"]; ?>"> <button type="button" class="btn btn-outline-danger"> <img src="editar.png" alt=""  width="18px " height="20px"> </button>
</a>

                            </td>

                        </tr>
                    <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </table>
            </div>
        </div>

        <a href="administracao.php" class="btn btn-outline-warning bt-roxo">Voltar</a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>