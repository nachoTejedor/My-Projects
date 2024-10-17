// Función para animar elementos al hacer scroll
function scrollAnimation() {
    const elements = document.querySelectorAll('.scroll-animation');
  
    elements.forEach(element => {
      const elementPosition = element.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.2; // Puedes ajustar este valor según tu preferencia
  
      if (elementPosition < screenPosition) {
        element.classList.add('show');
      }
    });
  }
  
  // Detecta el evento de scroll y llama a la función scrollAnimation
  window.addEventListener('scroll', scrollAnimation);
  