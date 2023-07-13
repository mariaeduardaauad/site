<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/login.css">
  <link rel="stylesheet" href="./styles/style.css">

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
  <form action="login.php" method="post">
    <div class="login">
      <form>
        <h2>Login ONG </h2>

        <div>
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="usuario" required>
        </div>

        <div>
          <label for="password">Senha:</label>
          <input type="password" id="password" name="senha" required>
        </div>

        <button type="submit">ENTRAR!</button>
      </form>
    </div>
  </form>

</body>

</html>