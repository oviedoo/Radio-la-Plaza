(function () {
  const listElements = document.querySelectorAll(".menu__item--show");
  const list = document.querySelector(".menu__links");
  const menu = document.querySelector(".menu__hamburguer");

  const addClick = () => {
    listElements.forEach((element) => {
      element.addEventListener("click", () => {
        let subMenu = element.children[1];
        let height = 0;
        element.classList.toggle("menu__item--active");

        if (subMenu.clientHeight === 0) {
          height = subMenu.scrollHeight;
        }

        subMenu.style.height = `${height}px`;
      });
    });
  };

  const deleteStyleHeight = () => {
    listElements.forEach((element) => {
      if (element.children[1].getAttribute("style")) {
        element.children[1].removeAttribute("style");
        element.classList.remove("menu__item--active");
      }
    });
  };

  window.addEventListener("resize", () => {
    if (window.innerWidth > 800) {
      deleteStyleHeight();
      if (list.classList.contains("menu__links--show"))
        list.classList.remove("menu__links--show");
    } else {
      addClick();
    }
  });

  if (window.innerWidth <= 800) {
    addClick();
  }

  menu.addEventListener("click", () =>
    list.classList.toggle("menu__links--show")
  );

  const menuLinks = document.querySelectorAll('.menu__inside a[href^="#"]');

  menuLinks.forEach((menuLink) => {
    menuLink.addEventListener("click", function () {
      list.classList.remove("menu__links--show");
    });
  });
})();

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
