<?php
    include ("../../conexao/conexao.php");
    // Acessar Dados
    $consulta = mysqli_query($cn, "SELECT `id_exercicio` FROM `autoavaliacao`");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    $quantidade = count($exibe);
    // print_r($quantidade);
    $articulacoes = 0;
    $equilobrio = 0;

    for($i = 0; $i < $quantidade; $i++){

      $id = $exibe[$i];
      $consultafoco = mysqli_query($cn, "SELECT `foco_exercicio` FROM `exercicio` WHERE `id_exercicio` = '$id'");
      $exibefoco = mysqli_fetch_all($consultafoco, MYSQLI_ASSOC);
      // if($exibe_foco[0] == "Articulações"){
      //   $articulacoes++;
      // }

      // else if($exibe_foco[0] == "Equilíbrio"){
      //   $equilobrio++;
      // }
  }

?>

<html>
  <head>
  </head>
  <body>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script type="text/javascript">

      const data = {
        labels: [
          'Articulações',
          'Equilíbrio'
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [ <?=$articulacoes?>, 
                  <?=$equilobrio?>,
          backgroundColor: [
            '#D35BEF',
            '#6BA7E5'
          ],
          hoverOffset: 4
        }]
      };

      const config = {
        type: 'pie',
        data: data,
        options: {
          plugins: {
              legend: {
                  display: true,
                  labels: {
                      color: 'rgb(255, 99, 132)'
                  }
              }
          }
      }

      };

      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, config);
    </script>
  </body>
</html>
