<!-- Footer -->
<footer class="bg-black text-white py-8  p-10">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
    
    <!-- Sección de Información de Contacto -->
    <div class="">
      <h4 class="text-lg font-bold mb-4 text-orange-600">Contacto</h4>
      <ul>
        <li class="mb-2 hover:text-orange-600">
          <i class="fa-solid fa-envelope mr-2"></i>
          <a href="mailto:topocolconstruccionesjyd@gmail.com" class="hover:underline">topocolconstruccionesjyd@gmail.com</a>
        </li>
        <li class="mb-2 hover:text-orange-600">
          <i class="fa-solid fa-phone-volume mr-2"></i>
          <a href="tel:+573124233224" class="hover:underline">+57 312 423 3224</a>
        </li>
        <li class="hover:text-orange-600">
          <i class="fa-solid fa-map-marker-alt mr-2"></i>
          Calle Real 5-25 Chico Real 2 Apto 103 Torre1, Bucaramanga, Santander
        </li>
      </ul>
    </div>

    <!-- Sección de Navegación -->
    <div>
      <h4 class="text-lg font-bold mb-4 text-orange-600">Enlaces Útiles</h4>
      <ul>
        <li class="mb-2 hover:text-orange-600"><a href="index.php" class="hover:underline">Inicio</a></li>
        <li class="mb-2 hover:text-orange-600"><a href="nosotros.php" class="hover:underline">Nosotros</a></li>
        <li class="mb-2 hover:text-orange-600"><a href="servicios.php" class="hover:underline">Servicios</a></li>
        <li class="mb-2 hover:text-orange-600"><a href="proyectos.php" class="hover:underline">Proyectos</a></li>
        <li class="hover:text-orange-600"><a href="contacto.php" class="hover:underline">Contacto</a></li>
      </ul>
    </div>

    <!-- Sección de Redes Sociales -->
    <div>
      <h4 class="text-lg font-bold mb-4 text-orange-600">Síguenos</h4>
      <div class="flex justify-center md:justify-start space-x-4">
        <a href="https://www.facebook.com/profile.php?id=61559775878051" target="_blank" class="hover:text-orange-600">
          <i class="fab fa-facebook-f text-2xl"></i>
        </a>
        <a href="https://www.instagram.com/topocol_jyd/" target="_blank" class="hover:text-orange-600">
          <i class="fab fa-instagram text-2xl"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="hover:text-orange-600">
          <i class="fab fa-linkedin-in text-2xl"></i>
        </a>
      </div>
    </div>

  </div>

  <!-- Línea divisora -->
  <div class="border-t border-gray-700 mt-8 pt-4">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 TOPOCOLCONSTRUCCIONESJ&D S.A.S. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>

<!-- Botón de WhatsApp fijo -->
<a href="https://wa.me/573124233224" class="fixed bottom-5 right-5 bg-[#25D366] hover:bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg" target="_blank">
  <i class="fab fa-whatsapp text-3xl"></i>
</a>

<!-- Script para cambiar el enlace de WhatsApp según el dispositivo -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var whatsappLink = document.querySelector('a[href*="wa.me"]');
    
    if (isMobile) {
      whatsappLink.setAttribute('href', 'https://wa.me/573124233224');
    } else {
      whatsappLink.setAttribute('href', 'https://web.whatsapp.com/send?phone=573124233224');
    }
  });
</script>

<!-- Script para mostrar/ocultar el menú en pantallas pequeñas -->
<script>
  const menuToggle = document.getElementById('menu-toggle');
  const navMenu = document.getElementById('nav-menu');
  const menuLinks = document.querySelectorAll('#nav-menu ul li a');
  const menuIconBars = document.querySelectorAll('.menu-icon');

  // Función para abrir/cerrar el menú en pantallas pequeñas
  menuToggle.addEventListener('click', function() {
    navMenu.classList.toggle('hidden'); // Mostrar/Ocultar el menú en pantallas pequeñas
    navMenu.classList.toggle('flex');
    
    // Transformar el ícono de hamburguesa en una "X"
    menuIconBars[0].classList.toggle('rotate-45');
    menuIconBars[1].classList.toggle('opacity-0');
    menuIconBars[2].classList.toggle('-rotate-45');
  });

  // Cerrar el menú cuando se hace clic en un enlace
  menuLinks.forEach(link => {
    link.addEventListener('click', function() {
      navMenu.classList.add('hidden'); // Ocultar el menú después de hacer clic en un enlace
      navMenu.classList.remove('flex');
      menuIconBars[0].classList.remove('rotate-45');
      menuIconBars[1].classList.remove('opacity-0');
      menuIconBars[2].classList.remove('-rotate-45');
    });
  });

  // Resaltar el enlace activo según la URL actual
  const currentPage = window.location.pathname.split('/').pop(); // Solo el nombre del archivo
  const navLinks = document.querySelectorAll('#nav-menu a');
  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('text-orange-600', 'border-b-2', 'border-orange-600');
    }
  });
</script>

</body>
</html>