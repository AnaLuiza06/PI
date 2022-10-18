// let id = 0
const buttons = document.querySelectorAll(".favoritar button");

buttons.forEach(button => {
	button.addEventListener("click", async () => {
		const id = button.id;
		const reponse = await fetch(`../api/registrarFavorito.php?id=${id}`)
		const data = await reponse.json();
		// data.success
		// data.message
		const icon = button.querySelector('svg');
		icon.classList.toggle('active')
		console.log(data.message)
	})
})

