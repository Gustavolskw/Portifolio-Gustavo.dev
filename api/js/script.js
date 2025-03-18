let lastScrollY = window.scrollY;

function checkScreenPos() {

}


window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navBar");
    const btnHamb = document.getElementById("button-nav");

    if (window.scrollY > 200) {
        navbar.classList.add("nav-hide");
        btnHamb.classList.add("d-md-block");

    } else {
        if (window.scrollY < 100) {
            btnHamb.classList.remove("d-md-block");
        }
        if (window.scrollY > lastScrollY) {
            navbar.classList.add("nav-hide"); // Esconde ao rolar para baixo
        } else {
            navbar.classList.remove("nav-hide"); // Mostra ao rolar para cima
        }
    }
    lastScrollY = window.scrollY;
});

document.getElementById('copyButton').addEventListener('click', function () {
    // O e-mail que você deseja copiar para o clipboard
    var email = "gustavolschmidt13@gmail.com";

    // Usa a Clipboard API para copiar o texto
    navigator.clipboard.writeText(email).then(function () {
        // Exibe o alerta
        var alertDiv = document.getElementById('emailAlert');
        alertDiv.style.display = 'block'; // Torna o alerta visível

        // Esconde o alerta após 5 segundos
        setTimeout(function () {
            alertDiv.style.display = 'none'; // Torna o alerta invisível
        }, 5000); // 5000ms = 5 segundos
    }).catch(function (err) {
        // Se ocorrer um erro ao tentar copiar
        console.error("Erro ao copiar: ", err);
    });
});


document.getElementById("button-nav").addEventListener('click', function () {
    const navbar = document.getElementById("navBar");
    if (navbar.classList.contains("nav-hide")) {
        navbar.classList.remove("nav-hide");
    } else {
        navbar.classList.add("nav-hide");
    }


});
