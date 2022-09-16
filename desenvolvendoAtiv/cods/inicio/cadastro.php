<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>ATIV</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">

</head>

<body>

  <?php
  include('../conexao/conexao.php');
  ?>

  <div class="container-cadastro">
    <section class="txt-login">
      <h1>Cadastre-se Agora Mesmo!!</h1>
      <h2>Crie sua conta e comece hoje mesmo a ter uma vida mais ativa.</h2>
    </section>
    <section class="form-login">
      <div class="card-existe">
        <p>Você ainda nâo possui Cadastro</p>
      </div>
      <div class="card-cadastro">
        <form method="post" action="../conexao/inserts/iusuario.php">
          <h2>Cadastro</h2>

          <div class="input-form-cadastro">
            <label for="labelnome" id="labelnome">Nome</label>
            <input type="text" name="nome" id="inputnome" placeholder="Exemplo: Maria Antônia">
          </div>
          <div class="input-form-cadastro">
            <label for="labelemail">Email</label>
            <input type="email" name="email" id="inputemail" placeholder="Exemplo: maria@exemplo.com">
          </div>
          <div class="input-form-cadastro">
            <label for="labelnascimento">Data de Nascimento</label>
            <input type="date" name="nascimento" id="inputnascimento">
          </div>
          <div class="input-form-cadastro">
            <div class="container-inputduplo">
              <div class="inputduplo-cadastro">
                <label for="labelpeso">Peso</label>
                <input type="number" name="peso" id="inputpeso" placeholder="Exemplo: 70.6">
              </div>
              <div class="inputduplo-cadastro">
                <label for="labelaltura">Altura</label>
                <input type="number" name="altura" id="inputaltura" placeholder="Exemplo: 1.65">
              </div>
            </div>
          </div>
          <div class="input-form-cadastro">
            <div class="container-inputduplo">
              <div class="inputduplo-cadastro">
                <label>Senha</label>
                <input type="password" name="senha">
              </div>
              <div class="inputduplo-cadastro">
                <label>Repita a Senha</label>
                <input type="password" name="repetirsenha">
              </div>
            </div>
          </div>
          <button onclick="" type="submit">Entrar</button>
        </form>
      </div>
      <div class="sombra-5"></div>
      <div class="sombra-6"></div>
    </section>
  </div>

  <script src="../../js/js-inicio.js"></script>
</body>

</html>
