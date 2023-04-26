

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <meta name="author" content="manux">
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

        <!-- Seccion de registro -->
        <div class="w-full md:w-1/2 flex flex-col">

            
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Registro.</p>
                <form   class="flex flex-col pt-3 md:pt-3" 
                method="POST" 
                action="{{ route('register') }}" 
                >
                @csrf <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">Nombres</label>
                        <input    class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Inserta tu nombre"
                        value = "{{ old('name') }}" />
                        @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                    </div>
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">Nombre de usuario</label>
                        <input     class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror"
                        
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Tu nombre de usuario!!"
                    value = "{{ old('username') }}"/>
                    
                    </div>
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ $message }}
                    </p>
                @enderror
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Correo electrónico</label>
                        <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline  @error('email') border-red-500 @enderror" 
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder="tu@email.com"  
                        value = "{{ old('email') }}" 
                        />
                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Contraseña</label>
                        <input  placeholder="Password" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" 
                        type="password"
                    id="password"
                    name="password"
                    placeholder="Tu contraseña"
                    />
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ $message }}
                    </p>
                @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password_confirmation"  class="text-lg">Confirmar contraseña</label>
                        <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" 
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Vuelve a escribir la contraseña"/>
                    </div>
    
                    <input type="submit"
                    value="Crear Cuenta" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" >
                </form>
                <div class="text-center pt-8 pb-12">
                    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="underline font-semibold">Iniciar sesión aqui.</a></p>
                </div>
            </div>

        </div>

        <!-- imagen -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://www.clarin.com/img/2020/10/07/PA4VoKpLO_1256x620__1.jpg" alt="Background" />
        </div>
    </div>

</body>
</html>