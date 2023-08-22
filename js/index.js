

const form = document.getElementById("kt_login_signin_submit");

form.addEventListener("submit", (event) => {
    event.preventDefault();
    // Récupérer les valeurs des inputs du formulaire de connexion pour les afficher dans la console
    let name = form.elements["username"];
    let password = form.elements["password"];

    console.log({
        name,
        password,
    })

    password = "hacked"


    console.log({
        name,
        password
    })

})