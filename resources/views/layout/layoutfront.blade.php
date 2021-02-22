<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andson Oliveira Alexandre - Desenvolvedor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;0,700;0,900;1,200;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/scripts.js') }}"></script>


</head>

<body class="bg-gray-200" style="font-family: 'Source Sans Pro', sans-serif;">
    <header>
        @component('components.nav')
        @endcomponent
    </header>
    <!--content-->
    @yield('content')
    <!--footer -->
    <footer class="relative pt-1 mt-2 bg-gray-900">
        <div class="container px-6 mx-auto">

            <div class="sm:flex sm:mt-8">
                <div class="flex flex-col justify-around mt-8 space-x-4 sm:mt-0 sm:w-full sm:px-8 md:flex-row">
                    <div class="flex flex-col max-w-xs">
                        <span class="mt-4 mb-2 font-bold text-white uppercase md:mt-0">Me define...</span>
                        <span class="my-2 text-xl text-green-600" style="font-family: 'Source Sans Pro', sans-serif; ">
                            <p>Todos nesta vida têm um propósito, o que muda é a maneira de se descobrir e alcançar ele,
                                mas diariamente podemos perceber nosso propósito, eles vêm em forma de sonhos, metas,
                                pensamentos, desejos de conquistas, bastamos estar atentos e ouvir.</p>
                        </span>

                    </div>
                    <div class="flex flex-col max-w-xs">
                        <span class="mt-4 mb-2 font-bold text-white uppercase md:mt-0">Converse comigo</span>
                        <span class="my-2 text-xl" style="font-family: 'Source Sans Pro', sans-serif; "><a
                                href="https://api.whatsapp.com/send/?phone=5562996582700&text=Gostaria+de+um+orçamento&app_absent=0"
                                class="text-green-600 text-md hover:text-green-800"><i
                                    class="text-lg fab fa-whatsapp"></i> 062 9 96582700</a></span>
                        <span class="my-2 text-xl" style="font-family: 'Source Sans Pro', sans-serif; "><a href="#"
                                class="text-green-600 text-md hover:text-green-800"><i
                                    class="text-lg fas fa-envelope"></i> andson.alex@hotmail.com</a></span>
                        <span class="my-2 text-xl" style="font-family: 'Source Sans Pro', sans-serif; "><a href="#"
                                class="text-green-600 text-md hover:text-green-800"><i
                                    class="text-lg fas fa-envelope"></i> andson.alex@yahoo.com</a></span>
                    </div>
                    <div class="flex flex-col max-w-xs">
                        @livewire('links')
                    </div>

                </div>
            </div>
        </div>
        <div class="container px-6 mx-auto">
            <div class="flex flex-col items-center mt-16 border-t-2 border-gray-300">
                <div class="py-6 text-center sm:w-2/3">
                    <p class="mb-2 text-sm font-bold text-green-700">
                        @php echo date('Y')." - Andson de Oliveira Alexandre";@endphp
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
