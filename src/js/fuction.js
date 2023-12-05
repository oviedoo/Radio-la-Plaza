

//AÑO ACTUAL
function yearAgo() {
  const d = new Date();
  const n = d.getFullYear();

  document.getElementById("yearAgo").innerText = n;

}
yearAgo();


// BOTON VER MÁS
document.addEventListener("DOMContentLoaded", function () {
  // Obtener elementos de noticias
  const noticias = document.querySelectorAll(".noticias");

  // Obtener el botón "Ver más"
  const verMasButton = document.getElementById("verMas");

  // Manejar el clic en el botón "Ver más"
  verMasButton.addEventListener("click", function () {
    // Mostrar las siguientes noticias
    for (let i = 8; i < noticias.length; i++) {
      noticias[i].style.display = "block";
    }

    // Ocultar el botón "Ver más" después de mostrar todas las noticias
    verMasButton.style.display = "none";
  });


})();
