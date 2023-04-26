<!DOCTYPE html>
<html>
<head>
	<title>Haustier</title>
	
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  
	<link rel="shortcut icon" href="./assets/img/favicon.ico" />
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
	<style>
		.font-pt-serif{
			font-family: 'PT Serif', serif;
			font-weight: 400;
		}
		.h-50{
			height: 50vh;
		}
		.h-65{
			height: 65vh;
		}
	</style>
</head>
<body class="bg-blue-100">
    <nav class="flex items-center bg-yellow-800 p-3 flex-wrap">
      <a href="#" class="p-2 mr-4 inline-flex items-center">
        <svg
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          class="fill-current text-white h-8 w-8 mr-2"
        >
          <path
            d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"
          />
        </svg>
        <span class="text-xl text-white font-bold uppercase tracking-wide"
          >HAUSTIER</span
        >
      </a>
      <button
        class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation"
      >
        <i class="material-icons">menu</i>
      </button>
      <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto"
        >
		<input name="q" class="w-full outline-none rounded-sm shadow appearance-none border pl-10 pr-4 py-2" placeholder="Buscar" aria-label="Search Input">
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Inicio</span>
          </a>
           
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Adoptar</span>
          </a>
          
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Donar</span>
          </a>
         
          <a
            href="#"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white"
          >
            <span>Contactos</span>
          </a>
		  
        </div>
      </div>
	  <a href="#" class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor">
		<img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-indigo-400" src=data:image/jpeg;base64,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 >
	  </a>
    </nav>
	
<main class="bg-yellow-800">
	 
    
<div class="bg-yellow-800 relative h-screen  flex content-center items-center justify-center" style='background-image: url("https://los40.com/los40/imagenes/2022/01/05/actualidad/1641378487_419887_1641378601_gigante_normal.jpg");background-repeat: no-repeat; background-size:cover;  ' class="  flex items-center justify-center" style=" background-size:cover;">
	<div class="flex flex-col items-center justify-center ">
        
		<h1 class="font-pt-serif my-4 text-white text-5xl text-center">GRACIAS POR FORMAR PARTE DE NOSOTROS<br/></h1>
		<a class="uppercase bg-white tracking-widest text-center text-xs text-gray-700 w-auto px-3 py-2 border border-gray-300" href="#">DONAR MASCOTA</a>
	</div>
</div>
<div class="flex justify-center py-2" style="bg-yellow-800;
)">
	<div class="w-3/5">
		<p class="text-xl text-white text-center font-pt-serif leading-loose my-8">
			Independientemente de la procedencia de una mascota, la mayoría de propietarios establecen un estrecho vínculo con ella, la ven como un miembro más de la familia y disfrutan de muchos de los beneficios previamente listados.
		</p>
		
	</div>
</div>
<section class="bg-yellow-800 my-12 mx-10 relative text-white">
	<h2 class="font-extrabold mb-4 text-3xl">
	Mascotas para adoptar
	</h2>
	<div class="flex flex-wrap">
	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			 
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>

	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			 
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>

	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>

	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			  
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>

	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			  <
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>


	  <div class="mb-10 pr-4 relative text-center text-sm w-1/6">
		<div class="relative">
		  <img
			src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg"
			alt=""
			class="rounded"
		  />
		  <div
			class="absolute bg-black-alpha-400 flex h-full hover:opacity-100 items-center justify-center left-0 opacity-0 top-0 w-full"
		  >
			<button
			  class="border border-white flex h-16 hover:scale-up items-center justify-center rounded-full transition-transform-100 w-16"
			>
			 
			</button>
		  </div>
		</div>
		<span class="block pt-3">Tom</span>
		<span class="block  pt-1">
		  <a href="" class="hover:underline opacity-50 hover:opacity-100">Oaxaca</a>
		</span>
	  </div>



  </section>
</main>
</section>

<footer class="relative bg-gray-300 pt-8 pb-6">
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
              class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-4 p-3"
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
      <hr class="my-6 border-gray-500" />
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
</html>