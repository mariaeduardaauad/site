<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/queroadotar.css">
    <title>Formulário</title>
</head>

<body>

    <div class="container">
        <div class="form-image">
            <img src="imagem/foto-cadastro.jpg" alt="">
        </div>
        <div class="form">
            <form action="processar_formulario.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Formulário de adoção</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu nome e sobrenome" >
                    </div>

              
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" >
                    </div>


                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" >
                    </div>
                    <div class="input-box">
                        <label for="lastname">Endereço</label>
                        <input id="lastname" type="text" name="endereco" placeholder="Digite seu endereço" >
                    </div>
                    <div class="input-box">
                        <label for="lastname">Cidade / UF </label>
                        <input id="lastname" type="text" name="cidade" placeholder="Digite a cidade e o estado" >
                    </div>

                    <div class="input-box">
                        <label for="lastname">CEP</label>
                        <input id="lastname" type="text" name="cep" placeholder="Digite seu CEP" >
                    </div>


                   



                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <div class="continue-button">
                        <button>Cadastrar</button>
                    </div>
    
                    <div class="voltar-button">
                        <button><a href="index.html">Voltar</a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="loading.js"></script>
</body>




