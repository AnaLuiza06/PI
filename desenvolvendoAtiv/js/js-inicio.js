//Page Index
	// Perguntas Frequentes
	const card_pergunta = document.querySelector(".container-pergunta")
	card_pergunta.addEventListener("click", () => {
	 	const card_resposta = document.querySelector(".card-resposta")
		card_resposta.classList.toggle("active")
	})


//Page Cadastro
	//Validação dos campos
	// function duasCasasDecimais(texto = "") {
	//     const trocandoVirgula = texto.replace(",",".")
	//     const numero = Number(trocandoVirgula)
	//     const casasDecimaisFixadas = numero.toFixed(2);
	//     return casasDecimaisFixadas;
	// }

	// 	inputnome.addEventListener("keyup", () => {
	// 		inputnome.setAttribute('style', 'border-color: green')
	// 		if (inputnome.value.length == "" ) {
	// 			labelnome.innerHTML = '<span>*Incira seu nome aqui</span>'
	// 			labelnome.span.setAttribute('style', 'color: red')
	// 		}
	// 	})
	// document.addEventListener("submit", validarCadastro);
	// function validarCadastro(evento){
	// 	evento.preventDefault();
	// 	const inputPeso = String(document.querySelector("#inputpeso").value)
	// 	const inputPesoNumero = duasCasasDecimais(inputPeso);
	// 	const regex = /^[-!#$%&'*+\/0-9=?A-Z^_a-z`{|}~](\.?[-!#$%&'*+\/0-9=?A-Z^_a-z`{|}~])*@[a-zA-Z0-9](-*\.?[a-zA-Z0-9])*\.[a-zA-Z](-?[a-zA-Z0-9])+$/;
	// 	const email = document.querySelector("#inputemail").value;
	// 	const emailValido = regex.test(email)
	// 	console.log(emailValido);
	// }