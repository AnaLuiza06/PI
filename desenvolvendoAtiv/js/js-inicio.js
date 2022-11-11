//Page Index
	// Perguntas Frequentes
	// const card_pergunta = document.querySelector(".container-pergunta")
	// card_pergunta.addEventListener("click", () => {
	//  	const card_resposta = document.querySelector(".card-resposta")
	// 	card_resposta.classList.toggle("active")
	// })

	const card_pergunta = document.querySelectorAll(".container-pergunta")

	card_pergunta.forEach(card => {
		card.addEventListener("click", (evento) => {
			const card_resposta = card.querySelector(".card-resposta")
			card_resposta.classList.toggle("active")
		})
	})