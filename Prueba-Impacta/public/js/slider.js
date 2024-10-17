let currentIndex = 0;
const images = document.querySelectorAll('.slider-inner img');
const totalImages = images.length;
const circles = document.querySelectorAll('.circle');

function showNextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    updateSlider();
}

function navigateToSlide(index) {
    currentIndex = index;
    updateSlider();
}

function updateSlider() {
    const offset = -currentIndex * 100;
    document.querySelector('.slider-inner').style.transform = `translateX(${offset}%)`;

    // Actualizar los círculos
    circles.forEach((circle, index) => {
        if (index === currentIndex) {
            circle.classList.remove('opacity-50');
        } else {
            circle.classList.add('opacity-50');
        }
    });
}

setInterval(showNextImage, 5000); // Cambia de imagen cada 5 segundos