const modal = document.querySelector(".modal");
const openButton = document.querySelector("#open-button");
const closeButton = document.querySelector("#close-button");


const openModal = () =>{
    modal.style.visibility = "visible";
    modal.style.opacity = "1";
};

const closeModal = () =>{
    modal.style.visibility = "hidden";
    modal.style.opacity = "0";
}

openButton.addEventListener("click", () =>{ openModal(); });

closeButton.addEventListener("click", () =>{ closeModal(); });

modal.addEventListener("click", () =>{ closeModal(); });