let btn = document.querySelector("#submit");

function validateForm() {
    let vardas = document.querySelector("#name").value;
    let email = document.querySelector("#email").value;
    if (vardas == "" || email == "") {
        alert("Užpildykite abu laukus!");
        return false;
    }
    if (vardas != "" && email.includes("@")) {
        // alert("all good!");
        // setTimeout(function () { alert.close(); }, 5000)
        var w = window.open('', '', 'width=300,height=300')
        w.document.write('Sėkmingai užsiprenumeravote naujienlaiškį!')
        w.focus()
        setTimeout(function () { w.close(); }, 6000)
    }
}

btn.addEventListener("click", validateForm);