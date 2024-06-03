document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky Header on Scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
        if (nextElement) nextElement.classList.add('sticked-header-offset');
      } else {
        selectHeader.classList.remove('sticked');
        if (nextElement) nextElement.classList.remove('sticked-header-offset');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = document.querySelectorAll('#navbar a');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function (event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function (event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function (el) {
        el.addEventListener('click', function () {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});


// Función para obtener parámetros de la URL
function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var codigo;
var ronda;
var logro;
var df1;
var df2;
var df3;
var codigoSala;

// Obtener los valores de los parámetros de la URL
codigo = getParameterByName('codigoSala');
df1 = getParameterByName('df1');
df2 = getParameterByName('df2');
df3 = getParameterByName('df3');


if ((codigo !== null) && (df1 !== null) && (df2 !== null) && (df3 !== null)) {
  localStorage.setItem('codigoSala', codigo);
  localStorage.setItem('df1', df1);
  localStorage.setItem('df2', df2);
  localStorage.setItem('df3', df3);
  // console.log(codigo);
  const codigoSalaElement = document.getElementById('sala');
  codigoSalaElement.innerText = "Sala: " + codigo;
} else {
  window.onload = () => {
    obtenerCodigoSala();
  }

  codigoSala = localStorage.getItem('codigoSala');



  function obtenerCodigoSala() {
    fetch(`bd/obtener_codigo_sala.php?codigo_sala=${codigoSala}`)
      .then(response => response.text()) // Usar response.text() para obtener el código de sala como texto
      .then(codigoSala => {
        const codigoSalaElement = document.getElementById('sala');
        codigoSalaElement.innerText = "Sala: " + codigoSala;
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  df1 = localStorage.getItem('df1');
  df2 = localStorage.getItem('df2');
  df3 = localStorage.getItem('df3');
}

if (codigo === 'A0123' || codigoSala === 'A0123') {
  // console.log(ronda)
  // console.log(logro)
  t1.addEventListener("click", function () {
    mostrarDificultad('t1');
  });

  t2.addEventListener("click", function () {
    mostrarDificultad('t2');
  });

  t3.addEventListener("click", function () {
    mostrarDificultad('t3');
  });

  t4.addEventListener("click", function () {
    mostrarDificultad('t4');
  });

  function mostrarDificultad(tema) {
    Swal.fire({
      title: 'Selecciona la dificultad',
      input: 'select',
      inputOptions: {
        'facil': 'Fácil',
        'medio': 'Medio',
        'dificil': 'Difícil'
      },
      inputPlaceholder: 'Selecciona una opción',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Aceptar',
      inputValidator: (value) => {
        return new Promise((resolve) => {
          if (value !== '') {
            resolve()
          } else {
            resolve('Debes seleccionar una opción')
          }
        })
      }
    }).then((result) => {
      if (result.isConfirmed) {
        localStorage.setItem('tema', tema);
        localStorage.setItem('dificultad', result.value); // Guardar la dificultad seleccionada en localStorage
        window.location.href = "juego.php";
      }
    })
  }


} else {

  const admin = document.getElementById('admin');

  const btn_admi = document.getElementById('btn-admin');

  window.onload = () => {
    obtenerAdministrador(codigo);
  }

  t1.addEventListener("click", function () {
    mostrarDificultad('t1');
  });

  t2.addEventListener("click", function () {
    mostrarDificultad('t2');
  });

  t3.addEventListener("click", function () {
    mostrarDificultad('t3');
  });

  t4.addEventListener("click", function () {
    mostrarDificultad('t4');
  });

  function mostrarDificultad(tema) {
    var options = {}; // Objeto para almacenar las opciones del SweetAlert

    // Verificar si df1 es true y agregarlo como opción si lo es
    if (df1 === 'true') {
      options['facil'] = 'Fácil';
    }

    // Verificar si df2 es true y agregarlo como opción si lo es
    if (df2 === 'true') {
      options['medio'] = 'Medio';
    }

    // Verificar si df3 es true y agregarlo como opción si lo es
    if (df3 === 'true') {
      options['dificil'] = 'Difícil';
    }

    // Mostrar el SweetAlert con las opciones disponibles
    Swal.fire({
      title: 'Selecciona la dificultad',
      input: 'select',
      inputOptions: options,
      inputPlaceholder: 'Selecciona una opción',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Aceptar',
      inputValidator: (value) => {
        return new Promise((resolve) => {
          if (value !== '') {
            resolve()
          } else {
            resolve('Debes seleccionar una opción')
          }
        })
      }
    }).then((result) => {
      if (result.isConfirmed) {
        localStorage.setItem('tema', tema);
        localStorage.setItem('dificultad', result.value); // Guardar la dificultad seleccionada en localStorage
        window.location.href = "juego.php";
      }
    });
  }


  var nombre = localStorage.getItem('admin');
  admin.innerText = "Administrador: " + nombre;
  var esAdministrador = localStorage.getItem('esAdmin');
  if (esAdministrador === 'true') {
    btn_admi.innerText = "Administrar sala";
  }


}


function obtenerAdministrador(codigoSala) {
  fetch('bd/administrar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      action: 'admin',
      codigoSala: codigoSala
    })
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // console.log('Nombre del Administrador:', data.);
        localStorage.setItem('admin', data.nombreAdministrador);
        esAdmin(codigo);
      } else {
        console.log("¿Qué haces por aquí?");
        // console.error('Error:', data.error);
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

function esAdmin(codigoSala) {
  fetch('bd/administrar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      action: 'verificar',
      codigoSala: codigoSala
    })
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        console.log('Es administrador:', data.esAdmin);
        if (data.esAdmin) {
          localStorage.setItem('esAdmin', 'true');
        }
      } else {
        console.error('Error:', data.error);
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

function obtenerUsuarios(codigoSala) {
  fetch('administrar.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({
          action: 'obtenerUsuarios',
          codigoSala: codigoSala
      })
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          const usuarios = data.usuarios;
          const accordionBody = document.querySelector('#collapseOne .accordion-body');
          const ul = document.createElement('ul');
          usuarios.forEach(usuario => {
              const li = document.createElement('li');
              li.textContent = usuario;
              const button = document.createElement('button');
              button.textContent = 'Eliminar';
              button.classList.add('btn', 'btn-danger', 'ms-3');
              button.onclick = () => eliminarUsuario(usuario, codigoSala);
              li.appendChild(button);
              ul.appendChild(li);
          });
          accordionBody.appendChild(ul);
      } else {
          console.error('Error:', data.error);
      }
  })
  .catch(error => {
      console.error('Error:', error);
  });
}


// console.log('Ronda:', ronda);
// console.log('Logro:', logro);