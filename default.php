<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css"/>

  <meta charset="UTF-8" />
  <title>TesisPhd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="styles-v8.css" />
  <style>
    :target {
      scroll-margin-top: 100px; /* evita que el formulario quede tapado por el header fijo */
    }
  </style>
</head>
<body>

<header>
  <nav class="navbar">
    <a class="nav-logo" href="#inicio">
      <img src="imagenes/logo.png" alt="Logo" />
      <span>TesisPhd</span>
    </a>

    <ul class="nav-links">
      <li><a href="#hero">Inicio</a></li>
      <li><a href="#funciona">Proceso</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#formulario">Cotizar</a></li>
      <li><a href="#nosotros">Nosotros</a></li>
      <li><a href="blog.html">Blog</a></li>
    </ul>

<div class="lang-buttons">
  <button id="btn-es" aria-label="Español">
    <img src="https://flagcdn.com/es.svg" alt="España" class="flag-icon" />
  </button>
  <button id="btn-en" aria-label="English">
    <img src="https://flagcdn.com/us.svg" alt="EE.UU." class="flag-icon" />
  </button>
</div>

  </nav>
</header>


<main>

  <section id="hero" class="section-hero">
    <h1>Redactamos hoy la tesis que abrirá tu futuro</h1>
    <p class="sub">Nuestros profesionales se distinguen por<br>su originalidad y confidencialidad</p>
    <a href="#servicios" class="btn-main">Ver Servicios</a>

    <section id="carrusel3d">
      <div class="contenedor-carrusel3d">
        <img src="imagenes/carrusel1.jpg" alt="Carrusel 1" />
        <img src="imagenes/carrusel2.jpg" alt="Carrusel 2" />
        <img src="imagenes/carrusel3.jpg" alt="Carrusel 3" />
        <img src="imagenes/carrusel4.jpg" alt="Carrusel 4" />
        <img src="imagenes/carrusel5.jpg" alt="Carrusel 5" />
        <img src="imagenes/carrusel6.jpg" alt="Carrusel 6" />
      </div>
    </section>
  </section>
<section id="funciona" class="section-funciona futuristic-3d">
  <h2 data-key="funcionaTitulo">Cómo funciona el servicio</h2>
  <div class="card3d-grid">
    <div class="card3d">
      <div class="card3d-inner">
        <div class="card3d-front">
          <span class="icon-card neon">📨</span>
          <h4 data-key="step1-title">Contacto inicial</h4>
        </div>
        <div class="card3d-back">
          <p data-key="step1-text">Envíanos los detalles de tu proyecto y te contactamos en menos de 24 horas.</p>
        </div>
      </div>
    </div>
    <div class="card3d">
      <div class="card3d-inner">
        <div class="card3d-front">
          <span class="icon-card neon">📋</span>
          <h4 data-key="step2-title">Evaluación precisa</h4>
        </div>
        <div class="card3d-back">
          <p data-key="step2-text">Presupuesto personalizado según tus objetivos académicos y tiempos.</p>
        </div>
      </div>
    </div>
    <div class="card3d">
      <div class="card3d-inner">
        <div class="card3d-front">
          <span class="icon-card neon">🛠️</span>
          <h4 data-key="step3-title">Desarrollo profesional</h4>
        </div>
        <div class="card3d-back">
          <p data-key="step3-text">Nuestro equipo trabaja con estándares internacionales y te mantiene al tanto.</p>
        </div>
      </div>
    </div>
    <div class="card3d">
      <div class="card3d-inner">
        <div class="card3d-front">
<span class="icon-card neon">
  <img src="https://cdn-icons-png.flaticon.com/512/3176/3176367.png" alt="Tesis" class="icon-tesis">
</span>
          <h4 data-key="step4-title">Entrega final</h4>
        </div>
        <div class="card3d-back">
          <p data-key="step4-text">Recibes tu entrega pulida y con derecho a ajustes gratuitos durante 10 días.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="servicios" class="section-servicios">
  <h2 data-key="serviciosTitulo">Nuestros Servicios Académicos</h2>
  <div class="servicios-row">

    <div class="servicio-card">
      <h4 data-key="srv1-title">Redacción</h4>
      <p data-key="srv1-text">Ensayos, monografías, informes, revisiones. Redacción profesional y original según normas académicas.</p>
<a href="#formulario" class="servicio-btn" data-key="srv-btn-cotizar">Cotizar</a>
    </div>

    <div class="servicio-card">
      <h4 data-key="srv2-title">Corrección</h4>
      <p data-key="srv2-text">Ortografía, gramática y formato según normas APA, MLA o Vancouver. Revisión exhaustiva por especialistas.</p>
<a href="#formulario" class="servicio-btn" data-key="srv-btn-cotizar">Cotizar</a>
    </div>

    <div class="servicio-card">
      <h4 data-key="srv3-title">Presentaciones</h4>
      <p data-key="srv3-text">PowerPoints, posters y presentaciones orales adaptadas al estilo de tu universidad.</p>
<a href="#formulario" class="servicio-btn" data-key="srv-btn-cotizar">Cotizar</a>
    </div>

    <div class="servicio-card">
      <h4 data-key="srv4-title">Traducción</h4>
      <p data-key="srv4-text">Traducción académica inglés–español y español–inglés con precisión terminológica.</p>
<a href="#formulario" class="servicio-btn" data-key="srv-btn-cotizar">Cotizar</a>
    </div>

    <div class="servicio-card">
      <h4 data-key="srv5-title">Asesorías</h4>
      <p data-key="srv5-text">Acompañamiento metodológico y apoyo integral en trabajos de investigación.</p>
<a href="#formulario" class="servicio-btn" data-key="srv-btn-cotizar">Cotizar</a>
    </div>
  </div>
</section>

  <section id="nosotros" class="section-nosotros">
    <div class="nosotros-columns">
      <div class="nosotros-img"><img src="imagenes/nosotros.jpg" alt="Equipo" /></div>
      <div class="nosotros-info">
        <h2>Sobre Nosotros</h2>
        <p>Tesis Phd es una plataforma comprometida con la excelencia académica, ofreciendo servicios de redacción de tesis y trabajos universitarios de calidad. Nuestro equipo de expertos garantiza la originalidad y profundidad de cada proyecto, brindando soluciones efectivas para estudiantes de grado y posgrado.</p>
        <ul class="nosotros-list">
          <li>Compromiso con la calidad</li>
          <li>Soporte y trato humano</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="originalidad" class="section-originalidad">
  <div class="originalidad-content">
    <img src="imagenes/plagiarism.png" alt="Plagiarism Checker" class="originalidad-icon" />
    <div>
      <h2 data-key="originalidadTitulo">Originalidad Garantizada</h2>
      <p data-key="originalidadTexto">
        Todos nuestros trabajos se revisan y certifican con
        <strong>software profesional de detección de plagio (Plagiarism Checker)</strong>
        antes de la entrega. Garantizamos resultados <strong>100% libres de plagio</strong>,
        cumpliendo los más altos estándares académicos.
      </p>
      <span class="badge" data-key="originalidadCert">Certificado antiplagio</span>
    </div>
  </div>
</section>

<section id="testimonios" class="section-testimonios">
  <h2 data-key="testimoniosTitulo">Testimonios de Nuestros Clientes</h2>
<div class="testimonios-row">

  <div class="testimonio-card">
    <p class="testimonio-text" data-key="test1-text">“Gracias a su equipo logré entregar mi tesis a tiempo y con excelente calidad. Totalmente recomendados.”</p>
    <h4 data-key="test1-author">- María</h4>
  </div>

  <div class="testimonio-card">
    <p class="testimonio-text" data-key="test2-text">“Su servicio de corrección fue impecable. Encontraron cada detalle y mejoraron mis citas APA perfectamente.”</p>
    <h4 data-key="test2-author">- Juan</h4>
  </div>

  <div class="testimonio-card">
    <p class="testimonio-text" data-key="test3-text">“Me ayudaron con la redacción y presentación para mi defensa. Profesionalismo y calidez en todo momento.”</p>
    <h4 data-key="test3-author">- Daniela</h4>
  </div>
</div>


  </div>
</section>


  <section id="formulario" class="section-formulario">
  <div class="form-container">
    <h2>Solicitá tu Cotización</h2>
    <form action="https://formsubmit.co/phdservices@tesisphd.com" method="POST">
      <input type="hidden" name="_next" value="gracias.html" />
      
      <div class="form-row">
        <div>
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div>
          <label for="correo">Correo</label>
          <input type="email" id="correo" name="correo" required />
        </div>
      </div>
      
      <div class="form-row">
        <div>
<div>
  <label for="telefono">Teléfono</label>
  <input type="tel" id="telefono" name="telefono" required />
</div>

        </div>
        <div>
          <label for="carrera">Carrera / Especialidad</label>
          <input type="text" id="carrera" name="carrera" required />
        </div>
      </div>
      
      <div class="form-row">
        <div style="width:100%">
          <label for="servicio">Tipo de servicio</label>
<select id="servicio" name="servicio" required>
  <option value="" selected disabled>Seleccione una opción</option>
  <option value="Redacción" data-key="opt-redaccion">Redacción académica</option>
  <option value="Corrección" data-key="opt-correccion">Corrección y normas</option>
  <option value="Presentaciones" data-key="opt-presentaciones">Presentaciones académicas</option>
  <option value="Traducción" data-key="opt-traduccion">Traducción académica</option>
  <option value="Asesoría" data-key="opt-asesoria">Asesorías/Metodología</option>
  <option value="Otro" data-key="opt-otro">Otro servicio</option>
</select>
        </div>
      </div>
      
      <label for="detalle">Detalle del trabajo</label>
      <textarea id="detalle" name="detalle" rows="4" required></textarea>
      <button type="submit" class="btn-principal">Enviar</button>
      <p class="privacidad">Tu información será tratada con total confidencialidad.</p>
    </form>
  </div>
</section>

</main>

<footer>
        <div class="social-links">
      <a href="https://www.instagram.com/tesisph.d/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      </a>
        <a href="https://www.facebook.com/profile.php?id=61577395980626" target="_blank" rel="noopener noreferrer" aria-label="Facebook">        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
      </a>
      <a href="https://www.linkedin.com/company/tesis-phd" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
      </a>
      <a href="https://www.tiktok.com/@tesisphd" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
      </a>
    </div>
  <p>&copy; 2025 TesisPhd - Todos los derechos reservados</p>
  <p>
    <a href="privacidad.html">Privacidad</a> •
    <a href="accesibilidad.html">Accesibilidad</a> •
    <a href="reembolso.html">Reembolso</a> •
    <a href="terminos.html">Términos</a>
  </p>
</footer>
<script>
window.addEventListener("scroll", () => {
  const header = document.querySelector("header");
  if (window.scrollY > 40) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
</script>
<script>
// Animación de entrada para servicios y proceso
const observerOptions = {
  threshold: 0.2,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, observerOptions);

// Observar tarjetas de servicios y del proceso
document.querySelectorAll('.servicio-card, .card').forEach(el => {
  observer.observe(el);
});
</script>
<script>
// Transición animada para desplazamiento interno con highlight amigable
document.querySelectorAll('a[href^="#"]').forEach(enlace => {
  enlace.addEventListener('click', function(e) {
    const destino = document.querySelector(this.getAttribute('href'));
    if(destino) {
      e.preventDefault();
      document.body.classList.add('fade-out-page');
      setTimeout(() => {
        destino.scrollIntoView({ behavior: 'smooth', block: 'start' });
        document.body.classList.remove('fade-out-page');
        destino.classList.add('highlight-section');
        setTimeout(() => destino.classList.remove('highlight-section'), 1100);
      }, 260);
    }
  });
});

// Transición animada para navegar a otra página
document.querySelectorAll('a[href]:not([href^="#"]):not([target="_blank"])').forEach(enlace => {
  enlace.addEventListener('click', function(e) {
    // Evita efecto para enlaces externos (https) distintos de mismo dominio
    if (
      this.href &&
      (this.href.startsWith(window.location.origin) || this.href.startsWith("file://"))
    ) {
      e.preventDefault();
      document.body.classList.add('fade-out-page');
      setTimeout(() => {
        window.location = this.href;
      }, 300);
    }
  });
});
</script>
<!-- Intl-tel-input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.min.js"></script>
<script>
var input = document.querySelector("#telefono");
window.intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function(callback) {
    fetch("https://ipinfo.io/json?token=fb6e4c09aaa248")
      .then((resp) => resp.json())
      .then((resp) => callback(resp.country))
      .catch(() => callback("us"));
  },
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js"
});
</script>
<script>
// --- Traducciones ---
const translations = {
  es: {
    heroTitle: "Redactamos hoy la tesis que abrirá tu futuro",
    heroSubtitle: "Nuestros profesionales se distinguen por<br>su originalidad y confidencialidad",
    btnVerServicios: "Ver Servicios",
    menu: ["Inicio", "Proceso", "Servicios", "Cotizar", "Nosotros", "Blog"],
    formularioTitulo: "Solicitá tu Cotización",
    nombre: "Nombre",
    correo: "Correo",
    telefono: "Teléfono",
    carrera: "Carrera / Especialidad",
    servicio: "Tipo de servicio",
    detalle: "Detalle del trabajo",
    enviar: "Enviar",
    privacidad: "Tu información será tratada con total confidencialidad."
  },
  en: {
    heroTitle: "We write today the thesis that will open your future",
    heroSubtitle: "Our professionals stand out for<br>their originality and confidentiality",
    btnVerServicios: "View Services",
    menu: ["Home", "Process", "Services", "Quote", "About Us", "Blog"],
    formularioTitulo: "Request Your Quote",
    nombre: "Name",
    correo: "Email",
    telefono: "Phone",
    carrera: "Field / Specialty",
    servicio: "Type of Service",
    detalle: "Project Details",
    enviar: "Send",
    privacidad: "Your information will be handled with complete confidentiality."
  }
};

// --- Detección automática del idioma ---
function detectLang() {
  const saved = localStorage.getItem("preferredLang");
  if (saved) return saved;
  const browserLang = navigator.language || navigator.userLanguage;
  return browserLang.startsWith("en") ? "en" : "es";
}

// --- Aplicar traducción dinámica ---
function applyTranslation(lang) {
  const t = translations[lang];
  document.querySelector(".section-hero h1").innerHTML = t.heroTitle;
  document.querySelector(".section-hero .sub").innerHTML = t.heroSubtitle;
  document.querySelector(".btn-main").textContent = t.btnVerServicios;
  document.querySelector(".form-container h2").textContent = t.formularioTitulo;
  document.querySelector("label[for='nombre']").textContent = t.nombre;
  document.querySelector("label[for='correo']").textContent = t.correo;
  document.querySelector("label[for='telefono']").textContent = t.telefono;
  document.querySelector("label[for='carrera']").textContent = t.carrera;
  document.querySelector("label[for='servicio']").textContent = t.servicio;
  document.querySelector("label[for='detalle']").textContent = t.detalle;
  document.querySelector(".btn-principal").textContent = t.enviar;
  document.querySelector(".privacidad").textContent = t.privacidad;

  // menú
  const menuLinks = document.querySelectorAll(".nav-links li a");
  menuLinks.forEach((link, i) => link.textContent = t.menu[i]);

  // botón actual resaltado
  document.querySelectorAll(".lang-buttons button").forEach(b => b.classList.remove("active"));
  document.getElementById(`btn-${lang}`).classList.add("active");
}

// --- Inicialización ---
document.addEventListener("473
473
", () => {
  const lang = detectLang();
  localStorage.setItem("preferredLang", lang);
  applyTranslation(lang);

  // Cambiar idioma manualmente
  document.getElementById("btn-es").addEventListener("click", () => {
    localStorage.setItem("preferredLang", "es");
    applyTranslation("es");
  });
  document.getElementById("btn-en").addEventListener("click", () => {
    localStorage.setItem("preferredLang", "en");
    applyTranslation("en");
  });
});
</script>
<script src="js/language.js"></script>
    <button id="mentoriaBtn">  MentorIA
<!-- Botón MentorIA flotante -->
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WA" style="height:22px;vertical-align:middle;margin-right:6px;">
  MentorIA
</button>

<!-- Chat estilo WhatsApp -->
<div id="chatMentoria" style="display:none;">
  <div class="mentor-header">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WA" style="height:25px;margin-right:10px;">
    <span id="mentorWelcomeTitle">MentorIA</span>
    <button id="mentorCerrar" aria-label="Cerrar chat" style="margin-left:auto;background:none;border:none;font-size:1.3em;cursor:pointer;color:#2e8fa6;">✕</button>
  </div>
  <div id="mentorWelcome" class="mentor-msg"></div>
  <div id="mentorChatBody"></div>
  <div class="mentor-input-row">
    <input id="mentorUserInput" type="text" placeholder="">
    <button id="sendMentoria"><img src="https://cdn-icons-png.flaticon.com/512/2991/2991135.png" alt="Enviar" style="height:18px;"></button>
  </div>
</div>

509

document.addEventListener('DOMContentLoaded', function() {
console.log("Script MentorIA cargado");
let btnMentoria = document.getElementById('mentoriaBtn');
let chatMentoria = document.getElementById('chatMentoria');
let mentorWelcome = document.getElementById('mentorWelcome');
let mentorInput = document.getElementById('mentorUserInput');
let sendBtn = document.getElementById('sendMentoria');
let cerrarBtn = document.getElementById('mentorCerrar');
let mentorChatBody = document.getElementById('mentorChatBody');

const lang = (localStorage.getItem("preferredLang") || navigator.language).startsWith('en') ? 'en' : 'es';
const welcomeMsg = {
  es: 'Soy MentorIA, ¿cómo podemos ayudarte con tu tesis?',
  en: "I'm MentorIA. How can I help you with your thesis?"
};
const inputPlaceholder = {
  es: 'Escribe tu pregunta aquí...',
  en: 'Type your question here...'
};
const sendBtnText = {
  es: 'Enviar',
  en: 'Send'
};

mentorWelcome.innerHTML = `<span>${welcomeMsg[lang]}</span>`;
mentorInput.placeholder = inputPlaceholder[lang];
sendBtn.title = sendBtnText[lang];

window.addEventListener('scroll', function() {
  if (window.scrollY >= 0) {
    btnMentoria.style.display = 'block';
  } else {
    btnMentoria.style.display = 'none';
    chatMentoria.style.display = 'none';
  }
});
btnMentoria.onclick = function() {
  chatMentoria.style.display = 'block';
};
cerrarBtn.onclick = function() {
  chatMentoria.style.display = 'none';
};

// Conversación para enviar a la API
let messages = [
  {role: "system", content: lang === "es" ? "Eres MentorIA, un experto en tesis universitarias. Responde corto y profesional en español." : "You are MentorIA, an expert in university theses. Respond briefly and professionally in English."}
];

// Añadir mensaje al historial
function agregarMensaje(texto, tipo='user') {
  let msgDiv = document.createElement('div');
  if (tipo === 'user') msgDiv.className = 'mentor-msg-user';
  else msgDiv.className = 'mentor-msg mentor-msg-ai';
  msgDiv.innerText = texto;
  mentorChatBody.appendChild(msgDiv);
  mentorChatBody.scrollTop = mentorChatBody.scrollHeight;
}

// Función para enviar mensaje y obtener respuesta de ChatGPT
async function enviarMensaje() {
  const texto = mentorInput.value.trim();
  if (!texto) return;
  agregarMensaje(texto, 'user');
  messages.push({role: "user", content: texto});
  mentorInput.value = '';

  // Mostrar "escribiendo..." mientras espera respuesta
  let waitingDiv = document.createElement('div');
  waitingDiv.className = 'mentor-msg mentor-msg-ai';
  waitingDiv.innerText = lang === "es" ? "MentorIA está escribiendo..." : "MentorIA is typing...";
  mentorChatBody.appendChild(waitingDiv);
  mentorChatBody.scrollTop = mentorChatBody.scrollHeight;

  // SOLICITUD A LA API DE OPENAI
  try {
    const response = await fetch(/api/mentoria.php, {
      method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
      },
      body: JSON.stringify({
        model: "gpt-3.5-turbo",
        messages: messages
      })
    });
    const data = await response.json();
    mentorChatBody.removeChild(waitingDiv);
    if(data.choices && data.choices.length > 0) {
      const respuestaIA = data.choices[0].message.content;
      agregarMensaje(respuestaIA, 'ai');
      messages.push({role: "assistant", content: respuestaIA});
    } else {
      agregarMensaje(lang === "es" ? "Hubo un error con la respuesta de MentorIA." : "There was an error with MentorIA's response.", 'ai');
    }
  } catch (err) {
    mentorChatBody.removeChild(waitingDiv);
    agregarMensaje(lang === "es" ? "No se pudo conectar con ChatGPT." : "Could not connect to ChatGPT.", 'ai');
  }
}

473
con botón o Enter
sendBtn.onclick = enviarMensaje;
mentorInput.addEventListener('keydown', function(e) {
  if (e.key === 'Enter') {
    e.preventDefault();
    enviarMensaje();
  }
});
});

</script>

</body>
</html>
