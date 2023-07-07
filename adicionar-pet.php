<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>

  body{
    background-color: #2F4F4F
;
  }

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
      <button type="submit" class="btn btn-primary btn-block mb-4">Adicionar

        <div class="loader-wrapper"></div>


        </button>
      </div>

  </form>
</body>
</html>
