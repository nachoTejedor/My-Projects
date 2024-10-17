<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/nosotros.css" >
    <link rel="stylesheet" href="/css/footer.css">
    <title>Impacta Comunicación</title>
</head>
<body>
    @include('menu')
    <header>
        <div class="container mx-auto">
            <h1>SOBRE NOSOTROS</h1>
        </div>
    </header>
    <div class="container mx-auto main-content">
        <!-- Slider -->
        <div class="slider w-full md:w-2/3 lg:w-3/4">
            <div class="relative w-full overflow-hidden rounded-lg">
                <div class="slider-inner flex transition-transform duration-500 ease-in-out h-full">
                    <img src="{{ asset('img/slider/edit 1 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 1">
                    <img src="{{ asset('img/slider/edit 2 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 2">
                    <img src="{{ asset('img/slider/edit 3 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 3">
                    <img src="{{ asset('img/slider/edit 4 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 4">
                </div>
                <!-- Controles de navegación en forma de círculos -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <div class="circle bg-white w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(0)"></div>
                    <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(1)"></div>
                    <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(2)"></div>
                    <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(3)"></div>
                </div>
            </div>
        </div>
        <!-- Quiénes Somos -->
        <div class="content w-full md:w-1/3 lg:w-1/4">
            <h2>Quiénes Somos</h2>
            <p>
                Bienvenido a una agencia de publicidad que, ante todo, ofrece un servicio personalizado y de valor.
            </p>
            <p>
                Si buscas la estrategia adecuada, con una sólida creatividad, vinculada a los canales de difusión correctos utilizando 
                la tecnología más eficiente y la integración de todo esto en un servicio personalizado, esta es tu agencia de publicidad. 
                Y todo con un equipo humano integrado en la agencia.
            </p>
            <p>
                Con un equipo de expertos apasionados por la comunicación y el marketing, trabajamos estrechamente con nuestros clientes 
                para crear campañas personalizadas que resuenen con su audiencia objetivo. Nos enorgullece ofrecer servicios de alta 
                calidad que generan impacto real.
            </p>
        </div>
    </div>
    @include('footer')
    <script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>
