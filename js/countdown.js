let timer = document.querySelectorAll("#timer");
let timeEnd = document.querySelector("#time-end");
let countdownPricelist = document.querySelector("#countdown-pricelist");

let countDownDate = new Date("May 10, 2027 12:00:00").getTime();

let x = setInterval(function() {

    let now = new Date().getTime();

    let distance = countDownDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    timer[0].textContent = days;
    timer[1].textContent = hours;
    timer[2].textContent = minutes;
    timer[3].textContent = seconds;
    
    if (distance < 0) {
        clearInterval(x);

        timer[0].textContent = "0";
        timer[1].textContent = "0";
        timer[2].textContent = "0";
        timer[3].textContent = "0";

        timeEnd.style.display = "block";
        countdownPricelist.style.display = "none";
    }

}, 1000);