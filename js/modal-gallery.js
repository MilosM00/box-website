const photo = document.querySelectorAll(".gallery-overlay");
const modalGallery = document.querySelector(".modal-gallery");
const modalPhoto = document.querySelector("#modal-image-gallery");
const closeModalGallery = document.querySelector("#close-modal-gallery");


const openModalGalleryF = () =>{
    modalGallery.style.visibility = "visible";
    modalGallery.style.opacity = "1";
};

const closeModalGalleryF = () =>{
    modalGallery.style.visibility = "hidden";
    modalGallery.style.opacity = "0";
};


photo[0].addEventListener("click", () =>{
    modalPhoto.src="images/box-hero.webp";
    openModalGalleryF();
});

photo[1].addEventListener("click", () =>{
    modalPhoto.src="images/boxing-countdown.webp";
    openModalGalleryF();
});

photo[2].addEventListener("click", () =>{
    modalPhoto.src="images/box-video.jpg";
    openModalGalleryF();
});

photo[3].addEventListener("click", () =>{
    modalPhoto.src="images/gallery4.jpg";
    openModalGalleryF();
});

photo[4].addEventListener("click", () =>{
    modalPhoto.src="images/gallery5.jpg";
    openModalGalleryF();
});

photo[5].addEventListener("click", () =>{
    modalPhoto.src="images/gallery6.png";
    openModalGalleryF();
});

closeModalGallery.addEventListener("click", () =>{ closeModalGalleryF(); });
modalGallery.addEventListener("click", () =>{ closeModalGalleryF(); });