const form = document.querySelector("#form");

const labelFirstName = document.querySelector("#label-first-name");
const labelLastName = document.querySelector("#label-last-name");
const labelPhoneNumber = document.querySelector("#label-phone-number");
const labelEmailAddress = document.querySelector("#label-email-address");

const inputFirstName = document.querySelector("#input-first-name");
const inputLastName = document.querySelector("#input-last-name");
const inputPhoneNumber = document.querySelector("#input-phone-number");
const inputEmailAddress = document.querySelector("#input-email-address");


form.addEventListener("submit", (e) =>{
    if(inputFirstName.value.length < 2 || !inputFirstName.value.match(/^[A-Za-z]+$/))
    {
        e.preventDefault();
        labelFirstName.style.color = "red";
        labelFirstName.textContent = "Please, enter a first name!";
        inputFirstName.value = "";
    }

    else
    {
        labelFirstName.style.color = "#fff";
        labelFirstName.textContent = "First Name ✔";
    }

    
    if(inputLastName.value.length < 2 || !inputLastName.value.match(/^[A-Za-z]+$/))
    {
        e.preventDefault();
        labelLastName.style.color = "red";
        labelLastName.textContent = "Please, enter a last name!";
        inputLastName.value = "";
    }

    else
    {
        labelLastName.style.color = "#fff";
        labelLastName.textContent = "Last Name ✔";
    }


    if(inputEmailAddress.value.length < 5 || !String(inputEmailAddress.value).includes("@"))
    {
        e.preventDefault();
        labelEmailAddress.style.color = "red";
        labelEmailAddress.textContent = "Please, enter a e-mail address!";
        inputEmailAddress.value = "";
    }

    else
    {
        labelEmailAddress.style.color = "#fff";
        labelEmailAddress.textContent = "E-mail Address ✔";   
    }

    
    if(inputPhoneNumber.value.length < 5 || inputPhoneNumber.value.match(/^[A-Za-z]+$/))
    {
        e.preventDefault();
        labelPhoneNumber.style.color = "red";
        labelPhoneNumber.textContent = "Please, enter a phone number!";
        inputPhoneNumber.value = "";
    }
    
    else
    {
        labelPhoneNumber.style.color = "#fff";
        labelPhoneNumber.textContent = "Phone Number ✔";
    }

});