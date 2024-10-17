<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="icon" href="{{ asset('/img/logos/impacta.svg') }}" type="image/x-icon">

    <title>Document</title>
</head>
<body>
        <div class="publi">
            <p>MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong></p>
            <p class="link"><a href="">Clic aquí</a></p>
        </div>
@include('menu')

<!-- Slider -->
<div class="container-slider w-full relative h-64"> <!-- Añade la clase h-64 para ajustar la altura -->
    <div class="slider relative w-full overflow-hidden h-full">
        <!-- Degradado -->
        <div class="degradado absolute inset-0"></div>

        <!-- Imágenes del slider -->
        <div class="slider-inner flex transition-transform duration-500 ease-in-out h-full">
            <img src="{{ asset('img/slider/edit 1 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 1" id="imgSlider">
            <img src="{{ asset('img/slider/edit 2 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 2" id="imgSlider">
            <img src="{{ asset('img/slider/edit 3 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 3" id="imgSlider">
            <img src="{{ asset('img/slider/edit 4 copia.webp') }}" class="w-full h-full object-cover" alt="Imagen 4" id="imgSlider">
        </div>
    </div>
    <!-- Texto superpuesto -->
    <p class="textoSuperpuesto absolute top-1/2 left-10 text-white text-4xl md:text-8xl font-bold bg-black bg-opacity-0 p-4 w-full md:w-1/4 transform -translate-y-1/2">
        A veces, somos gente normal
    </p>
    <!-- Controles de navegación en forma de círculos -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <div class="circle bg-white w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(0)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(1)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(2)"></div>
        <div class="circle bg-white opacity-50 w-3 h-3 rounded-full cursor-pointer" onclick="navigateToSlide(3)"></div>
    </div>
</div>

    <!-- Incluir el selector de servicios -->
    <section id="servicios" class="servicios">
    <div class="container">
        <div class="servicio">
            <img src="{{ asset('/img/images/salud-mental.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
                <div class="redOver"></div>
                <img src="{{ asset('/img/images/brain.jpg') }}" alt="Creatividad" class="imgWrapper">
            </div>
            <h2 class="titulo">CREATIVIDAD SIN LÍMITES
            PARA IMPULSAR TU MARCA</h2>
            <p class="descripcion">Transformamos ideas en experiencias inolvidables, creando campañas
que capturan la esencia de tu marca y resuenan profundamente con tu
audiencia.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/esperma.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
            <div class="redOver"></div>
            <img src="{{ asset('/img/images/dard.jpg') }}" alt="Agilidad" class="imgWrapper">
            </div>
            <h2 class="titulo">AGILIDAD Y EFICIENCIA
EN CADA PROYECTO</h2>
            <p class="descripcion">Respuesta rápida y eficiente para un mercado en constante cambio,
adaptándonos a tus necesidades y superando tus expectativas con cada
entrega.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/chincheta.svg') }}" alt="Ideas" class="imgOver">
            <div class="imgWrapperContainer">
            <div class="redOver"></div>
            <img src="{{ asset('/img/images/women.jpg') }}" alt="Tecnología" class="imgWrapper">
            </div>
            <h2 class="titulo">TECNOLOGÍA PARA
            RESULTADOS ÓPTIMOS</h2>
            <p class="descripcion">Innovación tecnológica para potenciar tus campañas publicitarias,
utilizando las herramientas más avanzadas para alcanzar y superar tus
objetivos.</p>
        </div>
        <div class="servicio">
            <img src="{{ asset('/img/images/jarro-de-cerveza.svg') }}" alt="Ideas" class="imgOver">
 <div class="imgWrapperContainer">
 <div class="redOver"></div>
            <img src="{{ asset('/img/images/hands.jpg') }}" alt="Expertos" class="imgWrapper">
            </div>
            <h2 class="titulo">EQUIPO DE EXPERTOS
APASIONADOS
Y DEDICADOS</h2>
            <p class="descripcion">Profesionales apasionados dedicados a impulsar tu marca, combinando
talento y experiencia para ofrecer resultados excepcionales y transformar
tu visión en realidad.</p>
        </div>
    </div>
</section>

<div class="containerSmoke">
<div class="base-div"></div>
        <img src="/img/images/humo.png" alt="Man with colorful smoke" class="overlay-image">
        <div class="overlay-text">VENDEMOS HUMO CON MUCHA PASIÓN</div>
        <div class="gradientEmpresas"></div>
    </div>
<div class="empresasContainer">
    <h2 class="titulo2">¿Nuestros Clientes?</h2>
@include('bannerEmpresas')
</div>

<div>
@include('userForm')
</div>
<div class="publiWhite">
            <p>MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong></p>
            <p class="link"><a href="">Clic aquí</a></p>
        </div>
@include('footer')
</body>
<script src="/js/animations.js"></script>
<script src="/js/slider.js"></script>
</html>