<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>ATIV</title>

  <!-- style bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
  <link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
</head>

<body>

  <?php
  include('../../conexao/conexao.php');
  include('./menu.php');
  // include menu
  $id_usuario = $_SESSION['ID'];
  // Acessar Dados
  // print_r($favoritos)
  ?>

  <section class="imguser">
    <div class="txt-imguser">
      <h1>Meus Favoritos</h1>
      <h4>O hábito de se alongar todos os dias trás muitos beneficios ao corpo. O como você irá se alongar hoje?</h4>
    </div>
    <img src="https://img.freepik.com/fotos-gratis/casal-de-idosos-fazendo-exercicios-em-casa_23-2148730109.jpg">
  </section>

  <section class="minhaarea-usua">
    <div class="cards-exercicios">
      <?php
      $favoritos_consulta = mysqli_query($cn, "SELECT * FROM `favoritos` WHERE `id_usuario` = '$id_usuario'");
      $favoritos = mysqli_fetch_all($favoritos_consulta, MYSQLI_ASSOC);
      // print_r($favoritos);

      if (count($favoritos) > 0) :
      ?>
        <?php
        // Mostrar cards
        for ($i = 0; $i < count($favoritos); $i++) :
          $id_exercicio = $favoritos[$i]['id_exercicio'];
          $consulta_exercicio = mysqli_query($cn, "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$id_exercicio'");
          $exibe_exercicio = mysqli_fetch_all($consulta_exercicio, MYSQLI_ASSOC);
          $exercicio = $exibe_exercicio[0];
        ?>
          <div class="card-exercicios">
            <div class="desc-exercicios">
              <div class="topo-desc-exercicios">
                <h2><?php echo $exercicio['nome_exercicio']; ?></h2>
              </div>
              <div class="descricao-exercicio">
                <p><?php echo $exercicio['desc_exercicio']; ?></p>
                <p><?php echo $exercicio['duracao_exercicio']; ?></p>
                <p><?php echo $exercicio['equipamentos_exercicio']; ?></p>
                <button><a href="../videoexercicio.php?cd=<?php echo $exercicio['id_exercicio']; ?>">Começar</a></button>
              </div>
              <div class="favoritar">
                <div class="tipo-maisteinos">
                  <p>Articulações</p>
                </div>
                <button id="<?= $id_exercicio ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16" class="bi bi-heart-fill
                  <?php
                  $id_exercicio = $exercicio['id_exercicio'];
                  for ($favorito = 0; $favorito < count($favoritos); $favorito++) {
                    if ($id_exercicio == $favoritos[$favorito]['id_exercicio']) {
                      $classe = "active";
                      break;
                    }
                  }
                  echo $classe; ?>">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                  </svg>
                </button>
              </div>
            </div>
            <img src="<?php echo $exercicio['imagem_exercicio']; ?>">
          </div>
      <?php
        endfor;
      else :
        echo "<h2>Não há exercícios favoritados</h2>";
      endif;

      ?>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="../../../js/js-user.js"></script>
</body>

</html>
