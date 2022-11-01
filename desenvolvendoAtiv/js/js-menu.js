const menu = document.querySelector(".icon-menu svg")
menu.addEventListener("click", () => {
	const header = document.querySelector(".links-menu-md")
	header.classList.toggle("active")
})