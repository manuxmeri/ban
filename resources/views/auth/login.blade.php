<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- seccion de login -->
        <div class="w-full md:w-1/2 flex flex-col">

            
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Bienvenido.</p>
                <form  method="POST" action="{{ route('login') }} "class="flex flex-col pt-3 md:pt-8">
                    @csrf
            @if ( session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{ session('mensaje') }}
                </p>
            @endif
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Correo electrónico</label>
                        <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Tu correo electrónico!!"
                        value = "{{ old('email') }}">
                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Contraseña</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Tu contraseña">
                        @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    </div>
                    <div class="mb-5">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="text-gray-500 text-sm">
                            Mantener mi sesión iniciada
                        </label>
                    </div>
                    <input  type="submit"
                    value="Iniciar Sesión" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="underline font-semibold">Registrate aqui.</a></p>
                </div>
            </div>

        </div>

        <!-- Imagen -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://www.nocturnar.com/imagenes/animales/los-perros-mas-bonitos-del-mundo-30-fotos-01-26.jpg">
        </div>
    </div>

</body>
</html>

