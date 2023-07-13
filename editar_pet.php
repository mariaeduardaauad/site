<?php
include "conexao.php";

$id = $_GET["id"];

$nome = $foto = $descricao = "";


$sql_buscar = "select * from pet where id = $id";

$todos_os_pet = mysqli_query($conexao, $sql_buscar);

while ($um_pet = mysqli_fetch_assoc($todos_os_pet)) :

    $nome = $um_pet["Nome"];
    $foto = $um_pet["Foto"];
    $descricao = $um_pet["Descricao"];
endwhile;
mysqli_close($conexao);
?>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/scrollreveal"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="shortcut icon" href="image/icon_carro-removebg-preview.ico" type="image/x-icon">
<link rel="stylesheet" href="./styles/style.css">
<link rel="stylesheet" href="./styles/scrollReveal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</html>
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
    <div class="row">
        <div class="col-12">
            <p> <img src="<?php echo $foto; ?>" width="300"></p>


        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="salvar-pet-editado.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data"> 
                    Nome: <input name="nome" value="<?php echo $nome; ?>"> <br> <br>
                    Foto: <input type="file" class="form-control" name="foto" placeholder="Foto"> <br>
                    Descrição: <input name="descricao" value="<?php echo $descricao; ?> "><br> <br>
                    <button class="btn btn-outline-warning bt-roxo">Salvar e Editar</button>
                </form>


            </div>
        </div>

    </div>