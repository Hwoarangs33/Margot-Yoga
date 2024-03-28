const toggle = document.getElementById("toggle");
const toggleBall = document.getElementById("toggle-ball");
const titleEvent = document.querySelectorAll(".event-title");
const desEvent = document.querySelectorAll(".event-des");
const imgEvent = document.querySelectorAll(".event-img");
const buttonEvent = document.querySelectorAll(".event-button");
const burgerBtn = document.querySelector(".toggle-burger");
const burgerMenuList = document.querySelectorAll("#burger-menu ul");

burgerBtn.addEventListener("click", () =>
      document.body.classList.toggle("burger-open")
    );


let toggleIsActive = false;

toggle.addEventListener("click", () => {
    if (toggleIsActive === true) {
        toggleBall.className = "toggle-ball";
        toggle.className = "toggle";
        toggleIsActive = false;
    } else {
        toggleBall.className += " toggle-activate";
        toggle.className = "tActive";
        toggleIsActive = true;
    }
    displayTitle(toggleIsActive)
    displayDes(toggleIsActive)
    displayImg(toggleIsActive)
});

function displayTitle(isActive) {
    titleEvent.forEach((title) => {
        if(isActive) {
            title.innerHTML = "Retraite en montagne";
        } else {
            title.innerHTML = "Atelier à Aucamville !";
        }
    })
}

function displayDes(isActive) {
    desEvent.forEach((des) => {
        if(isActive) {
            des.innerHTML = "Rejoignez nous en montagne du 15 au 25 pour une retraite pleine conscience avec repas préparés par notre nutritionniste, et des randonnées à vous couper le souffle. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos ad deleniti obcaecati quidem est tempore iure praesentium recusandae. ";
        } else {
            des.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos ad deleniti obcaecati quidem est tempore iure praesentium recusandae sint similique officiis beatae cupiditate dolore omnis reiciendis odit, dolorum numquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste labore illum in a quam mollitia minima deleniti?";
        }
    })
}

function displayImg(isActive) {
    imgEvent.forEach((img) => {
        if(isActive) {
            img.src = "../public/images/cimg1.jpeg";
        } else {
            img.src = "../public/images/Article2.jpg";
        }
    })
}

let x = document.getElementById("login");
let y = document.getElementById("register");
let z = document.getElementById("btn");

function register(){
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
}

function login(){
  x.style.left = "50px";
  y.style.left = "-400px";
  z.style.left = "110px";
}