let btn = document.querySelector("#submit");
let alertas = document.querySelector("#alert");

function validateForm() {
    let vardas = document.querySelector("#name").value;
    let email = document.querySelector("#email").value;
    if (vardas == "" || email == "") {
        alert("Užpildykite abu laukus!");
        return false;
    }
    if (vardas != "" && email.includes("@")) {
        alertas.innerHTML = "Sėkmingai užsiregistravote naujienlaiškiui!"
        window.setTimeout(timer, 6000);
    }
}

btn.addEventListener("click", (e) => {
    e.preventDefault();
    validateForm();
});

function timer() {
    alertas.innerHTML = "";
}
console.log(alertas);