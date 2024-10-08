<?php include 'header.php'; ?>

<title>Nosotros</title>

<?php include 'nav.php'; ?>

<main class="flex-grow mt-[96px]"> <!-- Ajustado para compensar la altura del header en pantallas grandes -->

  <!-- Sección de Introducción -->
  <section id="intro" class="bg-gray-100 py-16 text-gray-800 fade-in-section" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-extrabold mb-4 text-orange-600">Sobre Nosotros</h2>
      <p class="text-xl sm:text-2xl mb-10">
        En <span class="font-bold">TOPOCOL CONSTRUCCIONES J&D S.A.S</span>, somos una empresa dedicada a ofrecer soluciones de topografía, geofísica y construcción con los más altos estándares de calidad y precisión.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 mt-12">
        <!-- Misión -->
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl">
          <i class="fas fa-bullseye text-orange-600 text-6xl mb-4"></i>
          <h3 class="text-2xl font-bold mb-2">Misión</h3>
          <p>Brindar servicios integrales de topografía y construcción, asegurando precisión, calidad y satisfacción a nuestros clientes.</p>
        </div>
        <!-- Visión -->
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl">
          <i class="fas fa-eye text-orange-600 text-6xl mb-4"></i>
          <h3 class="text-2xl font-bold mb-2">Visión</h3>
          <p>Ser líderes en soluciones topográficas y geofísicas a nivel nacional, innovando constantemente en tecnología y procesos.</p>
        </div>
        <!-- Valores -->
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl">
          <i class="fas fa-handshake text-orange-600 text-6xl mb-4"></i>
          <h3 class="text-2xl font-bold mb-2">Valores</h3>
          <p>Compromiso, innovación, integridad y respeto son los pilares que guían todas nuestras acciones y decisiones.</p>
        </div>
      </div>
    </div>
  </section>

 <!-- Sección de Historia (Línea de Tiempo Vertical con Indicadores Sobresalientes) -->
<section id="historia" class="bg-white py-16 text-gray-800" style="background-image: url('img/section-bg.png'); background-size: cover;">
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-extrabold mb-12 text-orange-600 text-center">Nuestra Historia</h2>

    <!-- Contenedor de la línea de tiempo -->
    <div class="timeline relative">

      <!-- Línea vertical de la línea de tiempo -->
      <div class="absolute border-l-4 border-orange-600 h-full left-1/2 transform -translate-x-1/2"></div>

      <!-- Hitos de la historia -->
      <div class="timeline-item mb-10 flex items-center">
        <div class="w-1/2 text-right pr-8">
          <h3 class="text-2xl font-bold text-gray-700">2010</h3>
          <p class="text-lg text-gray-500">Fundación de la empresa</p>
        </div>
        <div class="relative w-10 h-10 bg-orange-600 rounded-full flex items-center justify-center border-4 border-white z-10 transform hover:scale-125 transition duration-300">
          <!-- <i class="fas fa-building text-white"></i> -->
        </div>
        <div class="w-1/2 bg-white shadow-lg rounded-lg p-6 ml-8">
          <p class="text-lg text-gray-600">TOPOCOL CONSTRUCCIONES J&D S.A.S comienza sus operaciones con un equipo pequeño, ofreciendo servicios de topografía y diseño geofísico.</p>
        </div>
      </div>

      <!-- Segundo hito -->
      <div class="timeline-item mb-10 flex items-center flex-row-reverse">
        <div class="w-1/2 text-left pl-8">
          <h3 class="text-2xl font-bold text-gray-700">2015</h3>
          <p class="text-lg text-gray-500">Expansión de servicios</p>
        </div>
        <div class="relative w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center border-4 border-white z-10 transform hover:scale-125 transition duration-300">
          <!-- <i class="fas fa-chart-line text-white"></i> -->
        </div>
        <div class="w-1/2 bg-white shadow-lg rounded-lg p-6 mr-8">
          <p class="text-lg text-gray-600">Ampliamos nuestra oferta a estudios geotécnicos y topografía para proyectos de infraestructura vial a gran escala.</p>
        </div>
      </div>

      <!-- Tercer hito -->
      <div class="timeline-item mb-10 flex items-center">
        <div class="w-1/2 text-right pr-8">
          <h3 class="text-2xl font-bold text-gray-700">2020</h3>
          <p class="text-lg text-gray-500">Nuevas tecnologías</p>
        </div>
        <div class="relative w-10 h-10 bg-green-600 rounded-full flex items-center justify-center border-4 border-white z-10 transform hover:scale-125 transition duration-300">
          <!-- <i class="fas fa-drone text-white"></i> -->
        </div>
        <div class="w-1/2 bg-white shadow-lg rounded-lg p-6 ml-8">
          <p class="text-lg text-gray-600">Implementamos el uso de drones y sensores de alta tecnología para la recolección precisa de datos geoespaciales.</p>
        </div>
      </div>

      <!-- Cuarto hito -->
      <div class="timeline-item mb-10 flex items-center flex-row-reverse">
        <div class="w-1/2 text-left pl-8">
          <h3 class="text-2xl font-bold text-gray-700">2022</h3>
          <p class="text-lg text-gray-500">Crecimiento internacional</p>
        </div>
        <div class="relative w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center border-4 border-white z-10 transform hover:scale-125 transition duration-300">
          <!-- <i class="fas fa-globe text-white"></i> -->
        </div>
        <div class="w-1/2 bg-white shadow-lg rounded-lg p-6 mr-8">
          <p class="text-lg text-gray-600">Expandimos nuestras operaciones a nuevos mercados en América Latina, consolidando nuestra presencia en la región.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>




 <!-- Sección de Equipo -->
<section id="equipo" class="bg-gray-100 py-12 text-gray-800 fade-in-section" style="background-image: url('img/section-bg.png'); background-size: cover;">
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-extrabold mb-8 text-orange-600 text-center">Nuestro Equipo</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Integrante 1 -->
      <div class="team-member bg-white p-6 rounded-lg shadow-lg text-center transform transition-transform duration-300 ease-in-out hover:scale-105 opacity-0 translate-y-10"> <!-- Añadimos animación de entrada -->
        <img src="img/team1.jpg" alt="Integrante 1" class="w-32 h-32 rounded-full mx-auto mb-4 transition-transform duration-300 ease-in-out hover:scale-110"> <!-- Zoom en hover -->
        <h3 class="font-bold text-xl">Juan Pérez</h3>
        <p class="text-orange-600">CEO & Fundador</p>
      </div>
      <!-- Integrante 2 -->
      <div class="team-member bg-white p-6 rounded-lg shadow-lg text-center transform transition-transform duration-300 ease-in-out hover:scale-105 opacity-0 translate-y-10">
        <img src="img/team2.jpg" alt="Integrante 2" class="w-32 h-32 rounded-full mx-auto mb-4 transition-transform duration-300 ease-in-out hover:scale-110">
        <h3 class="font-bold text-xl">Ana Martínez</h3>
        <p class="text-orange-600">Gerente de Operaciones</p>
      </div>
      <!-- Integrante 3 -->
      <div class="team-member bg-white p-6 rounded-lg shadow-lg text-center transform transition-transform duration-300 ease-in-out hover:scale-105 opacity-0 translate-y-10">
        <img src="img/team3.jpg" alt="Integrante 3" class="w-32 h-32 rounded-full mx-auto mb-4 transition-transform duration-300 ease-in-out hover:scale-110">
        <h3 class="font-bold text-xl">Carlos López</h3>
        <p class="text-orange-600">Ingeniero Topográfico</p>
      </div>
      <!-- Integrante 4 -->
      <div class="team-member bg-white p-6 rounded-lg shadow-lg text-center transform transition-transform duration-300 ease-in-out hover:scale-105 opacity-0 translate-y-10">
        <img src="img/team4.jpg" alt="Integrante 4" class="w-32 h-32 rounded-full mx-auto mb-4 transition-transform duration-300 ease-in-out hover:scale-110">
        <h3 class="font-bold text-xl">María Gómez</h3>
        <p class="text-orange-600">Jefa de Proyectos</p>
      </div>
    </div>
  </div>
</section>

  <!-- Sección de Galería de Proyectos -->
  <section id="proyectos" class="bg-white py-12 text-gray-800 fade-in-section" style="background-image: url('img/section-bg.png'); background-size: cover;">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-extrabold mb-8 text-orange-600 text-center">Nuestros Proyectos</h2>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 items-center justify-center">

        <!-- Proyecto 1 -->
        <div class="project-item relative group bg-gray-100 rounded shadow-lg overflow-hidden h-min flex items-center justify-center">
          <img src="img/project1.jpg" alt="Proyecto 1" class="w-full h-auto object-contain transition-transform duration-300 group-hover:scale-110">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <h3 class="font-bold text-white text-xl text-center">Profundización de Oleoductos</h3>
          </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="project-item relative group bg-gray-100 rounded shadow-lg overflow-hidden h-min flex items-center justify-center">
          <img src="img/project2.jpg" alt="Proyecto 2" class="w-full h-auto object-contain transition-transform duration-300 group-hover:scale-110">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <h3 class="font-bold text-white text-xl text-center">Nivelación Vía Interna Abadías Condominios</h3>
          </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="project-item relative group bg-gray-100 rounded shadow-lg overflow-hidden h-min flex items-center justify-center">
          <img src="img/project3.jpg" alt="Proyecto 3" class="w-full h-auto object-contain transition-transform duration-300 group-hover:scale-110">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <h3 class="font-bold text-white text-xl text-center">Cortes y Empalmes Oleductos y Poliductos</h3>
          </div>
        </div>

        <!-- Proyecto 4 -->
        <div class="project-item relative group bg-gray-100 rounded shadow-lg overflow-hidden h-min flex items-center justify-center">
          <img src="img/project4.jpg" alt="Proyecto 4" class="w-full h-auto object-contain transition-transform duration-300 group-hover:scale-110">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <h3 class="font-bold text-white text-xl text-center">Planta de Tratamiento</h3>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<!-- Intersection Observer y Animaciones de Aparición/Desaparición -->
<script>
  // Usamos Intersection Observer para detectar cuando una sección está visible en la pantalla
  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.fade-in-section');
    const options = {
      root: null, // viewport por defecto
      threshold: 0.1 // Al menos el 10% del elemento debe estar visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fadeIn');
        } else {
          entry.target.classList.remove('animate-fadeIn');
        }
      });
    }, options);

    sections.forEach(section => {
      observer.observe(section);
    });
  });
</script>

<!-- Estilos Tailwind Customizados -->
<style>
  /* Animación de aparición */
  .fade-in-section {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  .fade-in-section.animate-fadeIn {
    opacity: 1;
    transform: translateY(0);
  }
</style>


<!-- Script para activar la animación al hacer scroll -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const teamMembers = document.querySelectorAll('.team-member');
    const observerOptions = {
      root: null,
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-slideUp');
        } else {
          entry.target.classList.remove('animate-slideUp');
        }
      });
    }, observerOptions);

    teamMembers.forEach(member => {
      observer.observe(member);
    });
  });
</script>

<!-- Estilos adicionales para la animación -->
<style>
  .team-member {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  .team-member.animate-slideUp {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<?php include 'footer.php'; ?>
