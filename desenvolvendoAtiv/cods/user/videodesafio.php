<?php

include('../conexao/conexao.php');

$cd = $_GET['cd'];

$sql = "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$cd'";
$consulta = mysqli_query($cn, $sql);
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

?>

<div class="txt-treinodehoje">
	<p>O Alongamento de hoje é direcionado às articulações, auxiliando no alivio de possiveis dores e no desenvolvimento dessa estrutura.</p>
	<p>Dia: 05/07</p>
	<p>Duração: 23 min</p>
	<p>Equipamentos: uma barra(cabo de vassoura).</p>
</div>
<!-- <div class="btns-treinodehoje">
	<button class="btn-treinodehoje active">Autoavaliação</button>
	<button class="btn-treinodehoje">Meu Grupo</button>
	<button class="btn-treinodehoje">Sejestões</button>
</div> -->

<div class="cards-btns-treinodehoje">

	<section class="card-btns active" id="autoavaliacao">
		<form class="depoimento-treinodehoje">
			<h5>Autoavaliação</h5>
			<p>Como você acha que foi seu rendimento hoje?</p>
			<div class="redios-rendimento">
				<div class="redio-form">
					<input type="radio" name="radio-rendimento" value="bom" checked>
					<label>
						Bom
					</label>
				</div>
				<div class="redio-form">
					<input type="radio" name="radio-rendimento" value="mau">
					<label>
						Mau
					</label>
				</div>
				<div class="redio-form">
					<input type="radio" name="radio-rendimento" value="melhorqueontem">
					<label>
						Melhor que ontem
					</label>
				</div>
			</div>

			<p>Se sente cansado(a)?</p>
			<div class="redios-rendimento">
				<div class="radio-form">
					<input type="radio" name="radio-cansaco" value="sim" checked>
					<label>
						Sim
					</label>
				</div>
				<div class="radio-form">
					<input type="radio" name="radio-cansaco" value="nao">
					<label>
						Não
					</label>
				</div>
			</div>

			<p>Sentil alguma dor por conta do exercício anterior?</p>
			<div class="redios-rendimento">
				<div class="radio-form">
					<input type="radio" name="radio-dores" value="sim" checked>
					<label>
						Sim
					</label>
				</div>
				<div class="radio-form">
					<input type="radio" name="radio-dores" value="nao">
					<label>
						Não
					</label>
				</div>
			</div>

			<p>Ao terminar o exercício, tem dor no peito?</p>
			<div class="redios-rendimento">
				<div class="radio-form">
					<input type="radio" name="radio-dornopeito" value="sim" checked>
					<label>
						Sim
					</label>
				</div>
				<div class="radio-form">
					<input type="radio" name="radio-dornopeito" value="nao">
					<label>
						Não
					</label>
				</div>
			</div>
			<div class="btn-alterar">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</section>

</div>
