<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
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
