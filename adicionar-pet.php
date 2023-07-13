<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="image/icon_carro-removebg-preview.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/scrollReveal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Document</title>
</head>
<style>

</style>

<body>
<header>
        <div class="logo">
            <img src="imagem/logo-menor.png" alt="logo do nav">
        </div>
        <div class="menu">
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="administracao.php">Administração</a></li>

            </ul>
        </div>
    </header>

  <form action="salvar-pet.php"  method="post" enctype="multipart/form-data">
    <div class="container mt-4">
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example1" class="form-control" name="nome" />
            <label class="form-label" for="form6Example1">Nome do Animal</label>
          </div>
        </div>
        <div class="form-outline mb-4">
          <input type="text" id="form6Example1" class="form-control" name="descricao" />
          <label class="form-label" for="form6Example7">Descrição do Animal</label>
        </div>
        <div class="form-outline">

          <div class="col-10">
            <input type="file" class="form-control" name="foto" placeholder="Foto">
            <label for="Foto">Envie sua foto</label>
          </div>
        </div>
      </div>
      <div class="form-check d-flex justify-content-center mb-4">
      <a href="animais.php"><button type="submit" class="btn btn-outline-warning bt-roxo">Adicionar</button></a>
      </div>

      <a href="administracao.php" class="btn btn-outline-warning bt-roxo">Voltar</a>


  </form>
</body>
</html>
