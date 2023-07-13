<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="image/icon_carro-removebg-preview.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/scrollReveal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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

    <div class="container">
        <div class="row">
            <?php
            $servidor_bd = "127.0.0.1";
            $usuario_bd = "root";
            $senha_bd = "";
            $banco_de_dados = "banco_cadastro";

            $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

            $sql_buscar = "select * from pet";

            $todos_os_pets = mysqli_query($conexao, $sql_buscar);

            while ($um_pet = mysqli_fetch_assoc($todos_os_pets)) :
            ?> 
            
            <div class="col-md-3 text-center mb-4 mt-5">
                    <div class="card">
                        <img src=<?php echo $um_pet["Foto"]?> class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="mt-3 mb-3"><?php echo $um_pet["Nome"]; ?></h5>
                        <h6 class="mt-3 mb-3"><?php echo $um_pet["Descricao"]; ?></h6>

                            <a href="queroadotar.php" class="btn btn-outline-warning bt-roxo">Quero Adotar</a>
                        </div>
                    </div>
                </div>

            <?php

            endwhile;
            mysqli_close($conexao);
            ?>
        </div>
    </div>
    </div>


    <script src="./js/scrollReveal.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>