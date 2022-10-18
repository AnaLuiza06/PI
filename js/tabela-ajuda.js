

function expandeCard(){
	const cards = document.querySelectorAll(".card-tabela")

	cards.forEach(card => {
		card.addEventListener("click", () => {
		const cardForm = document.querySelector(".card-tabela")
		cardForm.classList.toggle("active")
		})
	})
}
