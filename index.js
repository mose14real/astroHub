const hambugerBtn = document.querySelector(".hamburger")
const mobileNav = document.querySelector(".mobile-nav")

hambugerBtn.addEventListener("click", () => {
  mobileNav.classList.toggle("show")
  hambugerBtn.classList.toggle("rotate")
})