<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ATIV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	    <link rel="stylesheet" type="text/css" href="../../css/style-adm.css">

    </head>

    <body>
        <?php
            include ('../conexao/conexao.php');
            // include menu
        ?>
        <section class="form-add">
				<form class="form-desafio" method="post" action="../conexao/inserts/iexercicio.php">
                    <h2>Adicionar</h2>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Nome</label>
						<input type="text" name="nome" id="inputnome">
					</div>

					<div class="input-form-cadastro">
						<label for="inputdescricao">Descrição</label>
						<input type="text" name="descricao" id="inputdescricao">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputduracao">Duração</label>
						<input type="number" name="duracao" id="inputduracao">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Contra Indicações</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

                    <button onclick="" type="submit">Vídeos</button>

					<button onclick="" type="submit">Entrar</button>
				</form>

                <form class="cards-videos">
                    <h2>Vídeos Disponíveis</h2>

                    <section>
                        <div class="card-videos">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_3bMaKW4iVEmYyLH6wylnFQcEej3vjz4KtQ&usqp=CAU" alt="">
                            <p>Alongamento 1</p>
                            <p>10 min</p>
                            <div class="tipo-maisteinos">
								<p>Articulações</p>
							</div>
                        </div>
                    </section>
                </form>
			<div class="sombra-5"></div>
			<div class="sombra-6"></div>
		</section>
    </body>

</html>