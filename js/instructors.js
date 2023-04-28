const divInstructor = document.querySelectorAll("#instructor-div");
const overlayInstructor = document.querySelectorAll(".social-media-overlay");

divInstructor[0].addEventListener("mouseenter", () =>{ overlayInstructor[0].style.opacity = "1"; });
divInstructor[0].addEventListener("mouseleave", () =>{ overlayInstructor[0].style.opacity = "0"; });

divInstructor[1].addEventListener("mouseenter", () =>{ overlayInstructor[1].style.opacity = "1"; });
divInstructor[1].addEventListener("mouseleave", () =>{ overlayInstructor[1].style.opacity = "0"; });

divInstructor[2].addEventListener("mouseenter", () =>{ overlayInstructor[2].style.opacity = "1"; });
divInstructor[2].addEventListener("mouseleave", () =>{ overlayInstructor[2].style.opacity = "0"; });