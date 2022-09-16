<?php
$id_usuario = $_SESSION['ID'];

// Acessar Dados
$consulta = mysqli_query($cn, "SELECT `rendimento_autoavaliacao` FROM `autoavaliacao` WHERE `id_usuario` = '$id_usuario'");
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

$quantidade = count($exibe);
// print_r($quantidade);

$bom = 0;
$mau = 0;
$melhorqueontem = 0;

for ($i = 0; $i < $quantidade; $i++) {

  if ($exibe[$i]['rendimento_autoavaliacao'] == "bom") {
    $bom++;
  } else if ($exibe[$i]['rendimento_autoavaliacao'] == "mau") {
    $mau++;
  } else if ($exibe[$i]['rendimento_autoavaliacao'] == "melhorqueontem") {
    $melhorqueontem++;
  }
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
        'Bom',
        'Mau',
        'Melhor que ontem'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [<?= $bom ?>,
          <?= $mau ?>,
          <?= $melhorqueontem ?>
        ],
        backgroundColor: [
          '#D35BEF',
          '#6BA7E5',
          '#5BC2A3'
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
