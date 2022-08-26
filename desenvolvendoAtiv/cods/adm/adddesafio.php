<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ATIV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
        <link rel="stylesheet" type="text/css" href="../../css/style-usua.css">
	    <link rel="stylesheet" type="text/css" href="../../css/style-adm.css">

    </head>

    <body>
        <?php
            include ('../conexao/conexao.php');
            include ('./menu.php');
            // include menu

            $consulta = mysqli_query($cn, "SELECT * from exercicio");
            $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        ?>
        <section class="form-add">
                <h2>Adicionar</h2>
				<form class="form-desafio" method="post" action="../conexao/inserts/idesafios.php">
                    <div>
                        <section>
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

                            <div class="input-form-cadastro">
                                <label for="inputimagem">Imagem</label>
                                <input type="text" name="imagem" id="inputimagem">
                            </div> 
                        </section>
                        
                        <section>

                            <div class="input-form-cadastro">
                                <label>Vídeos</label>
                                <section>
                                    <?php
                                        foreach($exibe as &$exercicio):
                                    ?>
                                    <div class='card-videos'>
                                            <input class='card-videos-checkbox' type='checkbox' name="videos[]" value='<?= $exercicio['id_exercicio'] ?>' id='video <?= $exercicio['id_exercicio'] ?> '>
                                            <img src='<?= $exercicio['imagem_exercicio']?>' alt=''>
                                            <div>
                                                <h5><?=$exercicio['nome_exercicio']?></h5>
                                                <p><?=$exercicio['duracao_exercicio']?></p>  
                                            </div>
                                            <div class='tipo-maisteinos'>
                                                <p><?=$exercicio['foco_exercicio']?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </section>
                            </div>  
                        </section>
                    </div>
					<button onclick="" type="submit">Entrar</button>
				</form>
		</section>
        <script type="text/javascript">
            const cards = document.querySelectorAll(".input-form-cadastro .card-videos")
            function marcaCheckBox(card) {
                const input = card.querySelector('input')
                const isChecked = input.checked
                card.classList.toggle("active", !isChecked)
                input.checked = !isChecked

                // if (isChecked == true) {
                //     const cardCheck = document.querySelectorAll(".input-form-cadastro .card-videos")
                //     cardCheck = document.body.style.backgroundColor = "red"
                // }
            }
            cards.forEach(card => {
                card.addEventListener("click", (event) => marcaCheckBox(card))

            })
        </script>
    </body>

</html>