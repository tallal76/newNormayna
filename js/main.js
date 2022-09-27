/* ========== Navigation =========== */
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".nav-list .close");
const menu = document.querySelector(".nav-list");

hamburger.addEventListener("click", () => {
    menu.classList.add("show");
});

close.addEventListener("click", () => {
    menu.classList.remove("show");
});
/* ========== login popup =========== */
const signInForm = document.querySelector("header .wrapper");

document.querySelector(".signin").onclick = () => {
    signInForm.classList.add("active");
};

document.querySelector(".close-form").onclick = () => {
    signInForm.classList.remove("active");
};

/* ========== copyright function Date() affiche l'année =========== */
const paragraph = `
<p>
  Copyright &copy; ${new Date().getFullYear()} YMN - RESTAURANT ORIENTAL
</p>
`;

document.getElementById('copyright').innerHTML = paragraph;