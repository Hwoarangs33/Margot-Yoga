const toggle = document.getElementById("toggle");
const toggleBall = document.getElementById("toggle-ball");
const titleEvent = document.querySelectorAll(".event-title");
const desEvent = document.querySelectorAll(".event-des");
const imgEvent = document.querySelectorAll(".event-img");
const buttonEvent = document.querySelectorAll(".event-button");

let logToggle = document.getElementById("login");

function displayForm() {
    let displaySetting = document.getElementById("register").style.transform;
    if(displaySetting == "scaleY(1)"){
    document.getElementById("register").style.transform = "scaleY(0)";
    }else{
    document.getElementById("register").style.transform = "scaleY(1)";
    }
};

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
        if (isActive) {
            title.innerHTML = "Retraite en montagne";
        } else {
            title.innerHTML = "Atelier à Aucamville !";
        }
    })
}

function displayDes(isActive) {
    desEvent.forEach((des) => {
        if (isActive) {
            des.innerHTML = "Rejoignez nous en montagne du 15 au 25 pour une retraite pleine conscience avec repas préparés par notre nutritionniste, et des randonnées à vous couper le souffle. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos ad deleniti obcaecati quidem est tempore iure praesentium recusandae. ";
        } else {
            des.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eos ad deleniti obcaecati quidem est tempore iure praesentium recusandae sint similique officiis beatae cupiditate dolore omnis reiciendis odit, dolorum numquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste labore illum in a quam mollitia minima deleniti?";
        }
    })
}

function displayImg(isActive) {
    imgEvent.forEach((img) => {
        if (isActive) {
            img.src = "./public/images/cimg1.jpg";
        } else {
            img.src = "./public/images/Article2.jpg";
        }
    })
}

