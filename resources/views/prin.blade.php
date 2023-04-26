<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Haustier</title>
  </head>
  <body class="text-gray-800 antialiased overflow-x-hidden">
    
    
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-lg  leading-relaxed inline-block mr-10 py-5 font-semibold text-4xl whitespace-nowrap uppercase text-white"
           
            >Haustier</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <!-- Icon 1 -->
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="text-orange-500 fab fa-facebook text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <!-- Icono 1 -->
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="text-orange-500 fab fa-twitter text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <!-- Icono 2 -->
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Principal-->
    <main>
      <!-- Contenedor -->
      <div
        class="relative h-screen pt-16 pb-32 flex content-center items-center justify-center"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://a-static.besthdwallpaper.com/cute-kitties-staring-wallpaper-2000x1333-12195_39.jpg");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-in">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <h1 class="text-white font-semibold text-5xl">
                El inicio de un <span class="text-orange-500">heroe</span>
              </h1>
              <p class="mt-4 text-lg text-gray-300">
               Bienvenido a nuestro sitio web, en haustier ayudamos a los animales a que encuentren un nuevo hogar
              </p>
              <a href="{{ route('login') }}" class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-10 cursor-pointer transition">Iniciar sesión</a>
              <a href="{{ route('register') }}" class="ml-4 bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-10 cursor-pointer transition">Registrarse</a>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
       
        </div>
      </div>

     
     
    </main>

    <!-- Footer -->
    <footer class="relative bg-white pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
      >
    
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Siguenos en nuestras redes</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Siguenos en nuestra plataforma para hacernos crecer
            </h5>
            <div class="mt-6">
              <button
                class="bg-naranja text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-4 p-3"
                type="button"
              >
                <i class="flex fab fa-twitter text-orange-500"></i></button
              ><button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-4 p-3"
                type="button"
              >
                <i class="flex fab fa-facebook-square text-orange-500"></i></button
              >
               
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
           
                
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Terminos y condiciones</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Politicas de privacidad</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Contactanos</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2023 MANUX
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }

    AOS.init({
      delay: 200,
      duration: 1200,
      once: false,
    });
  </script>
</html>