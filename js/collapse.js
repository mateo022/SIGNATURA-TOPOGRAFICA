document.getElementById("config").addEventListener("click", mostrarOcultar);

function mostrarOcultar (){
    config = document.getElementById("box_collapse");
    if (config.style.display === "flex") {
        config.style.display = "none";
    } else {
        config.style.display = "flex";
    }
}

