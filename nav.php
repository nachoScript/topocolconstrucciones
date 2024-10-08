
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- DaisyUI CDN -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.4/dist/full.css" rel="stylesheet">


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Archivo CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">

    <style>
     
  </style>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

 <!-- Sección superior con teléfono y redes sociales solo en pantallas pequeñas -->
 <div class="bg-[#fe5900] text-white p-1 fixed top-0 w-full  z-50 ">
  <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center sm:space-y-0">
      <!-- Teléfono visible en todas las pantallas -->
      <div class="flex items-center p-1 hover:text-orange-300">
          <i class="fa-solid fa-phone-volume mr-2"></i>
          <a href="tel:+573124233224" class="hover:underline">+57 312 423 3224</a>
      </div>
      <!-- Redes sociales -->
      <div class="flex items-center p-1 space-x-4">
          <a href="https://www.facebook.com/profile.php?id=61559775878051" target="_blank" class="hover:text-orange-300">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/topocol_jyd/" target="_blank" class="hover:text-orange-300">
              <i class="fab fa-instagram"></i>
          </a>
          <a href="https://linkedin.com" target="_blank" class="hover:text-orange-600">
              <i class="fab fa-linkedin-in text-2xl"></i>
          </a>
      </div>
  </div>
</div>

<!-- Barra de navegación -->
<header class="bg-[#6d6d6d] text-white w-full p-2 fixed top-0 sm:top-[48px] z-50"> <!-- Ajustado a 'top-[48px]' para pantallas grandes -->
  <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center">
          <img src="img/PRINCIPAL.png" alt="Logo TOPOCOLCONSTRUCCIONESJ&D" class="h-12 w-auto ml-1">
      </div>

      <!-- Botón de hamburguesa para pantallas pequeñas -->
      <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
          <span class="menu-icon block w-8 h-1 bg-white mb-1 transition-transform"></span>
          <span class="menu-icon block w-8 h-1 bg-white mb-1 transition-transform"></span>
          <span class="menu-icon block w-8 h-1 bg-white transition-transform"></span>
      </button>

      <!-- Menú de navegación -->
      <nav id="nav-menu" class="hidden md:flex md:space-x-4 font-semibold items-center">
          <ul class="flex flex-col md:flex-row md:space-x-4 text-white">
              <li><a href="index.php" class="text-2xl md:text-base hover:text-orange-600 border-b-2 border-transparent hover:border-orange-600 transition duration-300">Inicio</a></li>
              <li><a href="nosotros.php" class="text-2xl md:text-base hover:text-orange-600 border-b-2 border-transparent hover:border-orange-600 transition duration-300">Nosotros</a></li>
              <li><a href="servicios.php" class="text-2xl md:text-base hover:text-orange-600 border-b-2 border-transparent hover:border-orange-600 transition duration-300">Servicios</a></li>
              <li><a href="proyectos.php" class="text-2xl md:text-base hover:text-orange-600 border-b-2 border-transparent hover:border-orange-600 transition duration-300">Proyectos</a></li>
              <li><a href="contacto.php" class="text-2xl md:text-base hover:text-orange-600 border-b-2 border-transparent hover:border-orange-600 transition duration-300">Contacto</a></li>
          </ul>
      </nav>
  </div>
</header>

<!-- Sección completa con barra superior en pantallas grandes -->
<div class="hidden sm:block bg-[#fe5900] text-white p-1 fixed top-0 w-full z-50"> <!-- Mostrado solo en pantallas grandes -->
  <div class="container mx-auto flex justify-between items-center">
    <!-- Correo a la izquierda -->
    <div class="flex items-center p-1 hover:text-orange-300">
      <i class="fa-solid fa-envelope mr-2"></i>
      <span>topocolconstruccionesjyd@gmail.com</span>
    </div>
    
    <!-- Teléfono en el centro -->
    <div class="flex items-center p-1 hover:text-orange-300">
      <i class="fa-solid fa-phone-volume mr-2"></i>
      <a href="tel:+573124233224" class="hover:underline">+57 312 423 3224</a>
    </div>
    
    <!-- Dirección a la derecha -->
    <div class="flex items-center p-1 hover:text-orange-300">
      <i class="fa-solid fa-map-marker-alt mr-2"></i>
      <span>Calle Real 5-25 Chico Real 2 Apto 103 Torre1, Bucaramanga, Santander</span>
    </div>
    
    <!-- Redes sociales -->
    <div class="flex items-center p-1 space-x-4">
      <a href="https://www.facebook.com/profile.php?id=61559775878051" target="_blank" class="hover:text-orange-300">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/topocol_jyd/" target="_blank" class="hover:text-orange-300">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://linkedin.com" target="_blank" class="hover:text-orange-600">
        <i class="fab fa-linkedin-in text-2xl"></i>
      </a>
    </div>
  </div>
</div>
