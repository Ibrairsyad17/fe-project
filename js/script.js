const navMobile = document.querySelector(".navHam");
const menu = document.querySelector(".mMenu");
const pfp = document.querySelector(".pfpMenu");
const pfpBtn = document.querySelector(".pfpBtn");

menu.addEventListener("click", () => {
  navMobile.classList.toggle("hidden");
});

pfpBtn.addEventListener("click", () => {
  pfp.classList.toggle("hidden");
});