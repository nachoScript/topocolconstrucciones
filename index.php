<?php include 'header.php'; ?>

<title>TOPOCOL CONSTRUCCIONES J&D S.A.S</title>

<?php include 'nav.php'; ?>

<main class="flex-grow mt-[96px]">

  <!-- Sección Hero con imagen de fondo -->
  <section class="hero-section text-center text-white bg-cover bg-center relative overflow-hidden min-h-screen flex flex-col justify-center items-center animate-fadeIn">
    <div class="hero-bg absolute inset-0 bg-cover bg-center" style="background-image: url('img/bg-principal.png');"></div>
    <div class="flex flex-col justify-start items-center relative z-10">
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4">Servicios Profesionales de Topografía y Construcción</h2>
      <p class="text-lg sm:text-xl lg:text-2xl mb-8">Calidad y precisión en cada proyecto.</p>
      <a href="contacto.php" class="bg-blue-600 text-white hover:bg-orange-600 hover:text-white font-bold py-2 px-6 rounded-md shadow-md shadow-white border-2 border-orange-600 hover:border-white transform hover:scale-105 transition-all duration-300 ease-in-out">
        <i class="fas fa-file-invoice-dollar mr-2"></i> Cotizar
      </a>
    </div>
  </section>

 <!-- Sección de Bienvenida -->
<section id="bienvenida" class="relative py-32 bg-white text-gray-800 opacity-0 translate-y-10 transition-all duration-700">
  <div class="carousel-bg absolute inset-0 w-full h-full">
    <div class="carousel-item absolute w-full h-full bg-cover bg-center" style="background-image: url('img/carousel-1.jpg');"></div>
    <div class="carousel-item absolute w-full h-full bg-cover bg-center" style="background-image: url('img/carousel-2.jpg');"></div>
    <div class="carousel-item absolute w-full h-full bg-cover bg-center" style="background-image: url('img/carousel-3.jpg');"></div>
    <div class="carousel-item absolute w-full h-full bg-cover bg-center" style="background-image: url('img/carousel-4.jpg');"></div>
    <div class="carousel-item absolute w-full h-full bg-cover bg-center" style="background-image: url('img/carousel-5.jpg');"></div>
  </div>
  <div class="absolute inset-0 bg-orange-600 opacity-30"></div>
  <div class="relative container mx-auto p-6">
    <div class=" p-8 rounded-lg  text-center">
      <h2 class="text-3xl font-extrabold text-white">Bienvenidos a <br>TOPOCOL CONSTRUCCIONES J&D. </h2>
      <p class="mt-4 text-lg text-white">Especialistas en estudios geofísicos, topográficos y construcción a nivel nacional.</p>
      <a href="nosotros.php" class="mt-6 inline-block bg-orange-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-orange-500 transition-transform duration-300">Leer más</a>
    </div>
  </div>

  <!-- Sección de Estadísticas -->
  <div class="relative container mx-auto p-6">
    <div class="container mx-auto px-6 text-center">
      <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-8">
        <!-- Indicador 1: Años de Experiencia -->
        <div class="statistic-item">
          <i class="fas fa-calendar-alt text-5xl text-white mb-2"></i>
          <h3 class="text-5xl font-extrabold text-orange-600" id="yearsExperience">0</h3>
          <p class="text-xl font-semibold text-white">Años de Experiencia</p>
        </div>
        <!-- Indicador 2: Servicios Prestados -->
        <div class="statistic-item">
          <i class="fas fa-tools text-5xl text-white mb-2"></i>
          <h3 class="text-5xl font-extrabold text-orange-600" id="servicesProvided">0</h3>
          <p class="text-xl font-semibold text-white">Servicios Prestados</p>
        </div>
        <!-- Indicador 3: Empleos Generados -->
        <div class="statistic-item">
          <i class="fas fa-briefcase text-5xl text-white mb-2"></i>
          <h3 class="text-5xl font-extrabold text-orange-600" id="jobsGenerated">0</h3>
          <p class="text-xl font-semibold text-white">Empleos Generados</p>
        </div>
        <!-- Indicador 4: Proyectos Completados -->
        <div class="statistic-item">
          <i class="fas fa-project-diagram text-5xl text-white mb-2"></i>
          <h3 class="text-5xl font-extrabold text-orange-600" id="projectsCompleted">0</h3>
          <p class="text-xl font-semibold text-white">Proyectos Completados</p>
        </div>
        <!-- Indicador 5: Clientes Satisfechos -->
        <div class="statistic-item">
          <i class="fas fa-users text-5xl text-white mb-2"></i>
          <h3 class="text-5xl font-extrabold text-orange-600" id="clientsSatisfied">0</h3>
          <p class="text-xl font-semibold text-white">Clientes Satisfechos</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Sección de Experiencia en Hidrocarburos -->
  <section id="experiencia-hidrocarburos" class="bg-gradient-to-r from-gray-50 to-gray-200 text-gray-900 py-12 opacity-0 translate-y-10 transition-all duration-700" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto px-6">
      <div class="text-center mb-8">
        <h2 class="text-4xl sm:text-4xl font-extrabold tracking-wide text-orange-600">EXPERIENCIA EN HIDROCARBUROS</h2>
      </div>
      <div class="bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row transform hover:scale-105 transition-transform duration-300">
        <div class="md:w-1/2 bg-orange-600 text-white p-8 flex flex-col justify-center space-y-6">
          <h3 class="text-3xl sm:text-4xl font-extrabold tracking-wide mb-6">Nuestra Experiencia</h3>
          <p class="flex items-start mb-4">
            <i class="fas fa-hard-hat text-white bg-orange-800 p-2 rounded-full mr-4"></i>
            Nuestra empresa cuenta con una vasta experiencia en la industria de los hidrocarburos, participando en proyectos clave de exploración y producción.
          </p>
          <ul class="text-white space-y-4 pl-6">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-white bg-orange-800 p-2 rounded-full mr-4"></i> Oleoducto (Ayacucho - Galán)
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-white bg-orange-800 p-2 rounded-full mr-4"></i> Combustoleoducto (Galán - Ayacucho)
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-white bg-orange-800 p-2 rounded-full mr-4"></i> Combustoleoducto (Coveñas - Cartagena)
            </li>
          </ul>
          <p class="flex items-start">
            <i class="fas fa-drafting-compass text-white bg-orange-800 p-2 rounded-full mr-4"></i>
            Elaboración y digitalización de planos de diseño para proyectos en los diferentes frentes de trabajo.
          </p>
        </div>
        <div class="md:w-1/2 relative h-96 md:h-auto">
          <img src="img/hidrocarburos.png" alt="Experiencia en Hidrocarburos" class="w-full h-full object-cover rounded-lg shadow-lg">
          <span class="absolute bottom-0 right-0 bg-orange-600 text-white py-1 px-4 text-sm font-bold rounded-tl-md">HIDROCARBUROS</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Experiencia en Urbanismo -->
  <section id="experiencia-urbanismo" class="bg-gray-100 text-gray-900 py-12 opacity-0 translate-y-10 transition-all duration-700" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto px-6">
      <div class="text-center mb-8">
        <h2 class="text-4xl sm:text-4xl font-extrabold tracking-wide text-orange-600">EXPERIENCIA EN URBANISMO</h2>
      </div>
      <div class="bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row transform hover:scale-105 transition-transform duration-300">
        <div class="w-full md:w-1/2 relative">
          <img src="img/urbanismo.png" alt="Experiencia en Urbanismo" class="w-full h-full object-cover rounded-lg shadow-lg">
          <span class="absolute bottom-0 left-0 bg-orange-600 text-white py-1 px-4 text-sm font-bold rounded-tr-md">URBANISMO</span>
        </div>
        <div class="w-full md:w-1/2 bg-white p-8 flex flex-col justify-start space-y-6">
          <div class="flex items-start space-x-4">
            <div class="text-orange-600">
              <i class="fas fa-city text-4xl"></i>
            </div>
            <p class="text-lg leading-relaxed text-gray-600">
              Realización de levantamientos topográficos para la titulación de tierras para entidades públicas y privadas, con elaboración de informes de acuerdo a las normas catastrales.
            </p>
          </div>
          <div class="relative">
            <img src="img/plano-urbanismo.png" alt="Plano Urbanismo" class="w-full h-auto rounded-lg shadow-lg">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Experiencia en Vías -->
  <section id="experiencia-vias" class="bg-gradient-to-r from-gray-50 to-gray-200 text-gray-900 py-32 opacity-0 translate-y-10 transition-all duration-700" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto px-6">
      <div class="text-center mb-8">
        <h2 class="text-4xl sm:text-4xl font-extrabold tracking-wide text-orange-600">EXPERIENCIA EN VÍAS</h2>
      </div>
      <div class="bg-white shadow-xl rounded-lg overflow-hidden flex flex-col md:flex-row-reverse transform hover:scale-105 transition-transform duration-300">
        <div class="w-full md:w-1/2 relative">
          <img src="img/vias.png" alt="Experiencia en Vías" class="w-full h-full object-cover rounded-lg shadow-lg">
          <span class="absolute bottom-0 right-0 bg-orange-600 text-white py-1 px-4 text-sm font-bold rounded-tl-md">VÍAS</span>
        </div>
        <div class="w-full md:w-1/2 bg-orange-600 p-8 flex flex-col justify-center space-y-6">
          <p class="text-lg sm:text-xl text-white leading-relaxed">
            Nuestra empresa cuenta con una sólida trayectoria en la ejecución de levantamientos topográficos que son fundamentales para el diseño y la construcción de infraestructuras viales.
            Nos especializamos en la elaboración de estudios topográficos para vías nacionales, secundarias y veredales, asegurando que cada levantamiento se realice con los estándares más altos de la industria.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Experiencia en Obras Civiles -->
  <section id="experiencia-obras-civiles" class="relative bg-white text-gray-900 py-12 opacity-0 translate-y-10 transition-all duration-700">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('img/obras-civiles-bg.png');"></div>
    <div class="relative z-10 container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-white tracking-wider">EXPERIENCIA EN OBRAS CIVILES</h2>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center flex flex-col items-center space-y-4 transform transition-all duration-500 hover:scale-105 hover:shadow-xl">
          <div class="bg-orange-600 text-white p-4 rounded-full flex items-center justify-center w-20 h-20">
            <i class="fas fa-water text-4xl"></i>
          </div>
          <p class="text-lg font-semibold">Construcción de obras para la estabilización de taludes, gavionería, canales de escorrentía.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 text-center flex flex-col items-center space-y-4 transform transition-all duration-500 hover:scale-105 hover:shadow-xl">
          <div class="bg-orange-600 text-white p-4 rounded-full flex items-center justify-center w-20 h-20">
            <i class="fas fa-tools text-4xl"></i>
          </div>
          <p class="text-lg font-semibold">Construcción de todo tipo de obra civil.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 text-center flex flex-col items-center space-y-4 transform transition-all duration-500 hover:scale-105 hover:shadow-xl">
          <div class="bg-orange-600 text-white p-4 rounded-full flex items-center justify-center w-20 h-20">
            <i class="fas fa-project-diagram text-4xl"></i>
          </div>
          <p class="text-lg font-semibold">Programación y control de proyectos.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 text-center flex flex-col items-center space-y-4 transform transition-all duration-500 hover:scale-105 hover:shadow-xl">
          <div class="bg-orange-600 text-white p-4 rounded-full flex items-center justify-center w-20 h-20">
            <i class="fas fa-house-user text-4xl"></i>
          </div>
          <p class="text-lg font-semibold">Adecuaciones para viviendas urbanas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Nuestros Clientes -->
  <section id="nuestros-clientes" class="bg-gray-50 text-gray-900 py-20 opacity-0 translate-y-10 transition-all duration-700" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto text-center px-8">
      <h2 class="text-4xl font-extrabold mb-10 text-orange-600">NUESTROS CLIENTES</h2>
      <p class="text-lg sm:text-xl mb-12 text-gray-600">Hemos tenido el privilegio de trabajar con una variada cartera de clientes en múltiples sectores, brindando soluciones a medida que responden a sus necesidades específicas.</p>
      <div class="relative overflow-hidden h-48">
        <div class="marquee flex items-center space-x-12">
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo1.png" alt="Cliente 1" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo2.png" alt="Cliente 2" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo3.png" alt="Cliente 3" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo4.png" alt="Cliente 4" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo1.png" alt="Cliente 1" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo2.png" alt="Cliente 2" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo3.png" alt="Cliente 3" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo4.png" alt="Cliente 4" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo1.png" alt="Cliente 1" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo2.png" alt="Cliente 2" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo3.png" alt="Cliente 3" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo4.png" alt="Cliente 4" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo1.png" alt="Cliente 1" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo2.png" alt="Cliente 2" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo3.png" alt="Cliente 3" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo4.png" alt="Cliente 4" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo1.png" alt="Cliente 1" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo2.png" alt="Cliente 2" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo3.png" alt="Cliente 3" class="w-full h-full object-contain">
          </div>
          <div class="client-logo border-solid border-2 border-orange-600">
            <img src="img/logo4.png" alt="Cliente 4" class="w-full h-full object-contain">
          </div>
        </div>
        
      </div>
    </div>
  </section>

</main>

<!-- JavaScript para la animación de entrada al hacer scroll -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('section');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        } else {
          entry.target.classList.remove('animate');
          entry.target.style.opacity = '0';
          entry.target.style.transform = 'translateY(10px)';
        }
      });
    }, { threshold: 0.1 });

    elements.forEach(el => {
      observer.observe(el);
    });
  });
</script>

<!-- JavaScript para la transición automática -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    setInterval(() => {
      slides.forEach((slide, index) => {
        slide.style.opacity = index === currentIndex ? "1" : "0";
      });
      currentIndex = (currentIndex + 1) % totalSlides;
    }, 3000); // Cambia cada 3 segundos
  });
</script>


<style>
  .carousel-item {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }
  .carousel-item.active {
    opacity: 1;
  }
</style>

<!-- Estilos de marquesina y animación -->
<style>
  .marquee {
    display: flex;
    justify-content: space-between;
    width: max-content;
    animation: scrollMarquee 40s linear infinite;
  }

  @keyframes scrollMarquee {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .client-logo {
    width: 10rem; /* Ampliado */
    height: 10rem; /* Ampliado */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    background-color: white;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  /* Efecto hover para los logos */
  .client-logo:hover {
    transform: scale(1.1);
  }
</style>

<!-- JavaScript para la animación de estadísticas -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.statistic-item');
    let hasAnimated = false;
    
    const incrementStats = () => {
      if (!hasAnimated && window.scrollY + window.innerHeight > statsSection.offsetTop) {
        hasAnimated = true;
        animateValue('yearsExperience', 0, 20, 3000); // Años de experiencia
        animateValue('servicesProvided', 0, 500, 3000); // Servicios prestados
        animateValue('jobsGenerated', 0, 1200, 3000); // Empleos generados
        animateValue('projectsCompleted', 0, 300, 3000); // Proyectos completados
        animateValue('clientsSatisfied', 0, 200, 3000); // Clientes satisfechos
      }
    };

    const animateValue = (id, start, end, duration) => {
      let obj = document.getElementById(id);
      let startTime = null;

      const step = (timestamp) => {
        if (!startTime) startTime = timestamp;
        let progress = timestamp - startTime;
        let value = Math.min(Math.floor(progress / duration * (end - start) + start), end);
        obj.innerText = value + "+"; // Añade el "+" al número
        if (progress < duration) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    };

    window.addEventListener('scroll', incrementStats);
  });
</script>

<style>
  .statistic-item {
    transition: transform 0.5s ease-in-out;
  }
  .statistic-item:hover {
    transform: scale(1.1);
  }
</style>

<?php include 'footer.php'; ?>
