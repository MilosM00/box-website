const hamburgerButton = document.querySelector("#hamburger-button");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const navImage = document.querySelector(".nav-image");
const hamburgerLi = document.querySelectorAll(".hamburger-li");

let hamburger = true;


const hamburgerFalse = () =>{
    hamburger = false;
    hamburgerButton.classList.remove("fa-bars");
    hamburgerButton.classList.add("fa-times");
    hamburgerMenu.style.visibility = "visible";
    hamburgerMenu.style.opacity = "1";
};

const hamburgerTrue = () =>{
    hamburger = true;
    hamburgerButton.classList.add("fa-bars");
    hamburgerButton.classList.remove("fa-times");
    hamburgerMenu.style.visibility = "hidden";
    hamburgerMenu.style.opacity = "0";
};

hamburgerButton.addEventListener("click", () =>{
    if(hamburger === true)
        hamburgerFalse();

    else
        hamburgerTrue();
});

hamburgerLi[0].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[1].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[2].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[3].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[4].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[5].addEventListener("click", () =>{ hamburgerTrue(); });
hamburgerLi[6].addEventListener("click", () =>{ hamburgerTrue(); });

navImage.addEventListener("click", () =>{ hamburgerTrue(); });