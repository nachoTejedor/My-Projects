window.addEventListener('load', function() {
    const servicios = document.querySelector('.servicios');
    
    function checkVisibility() {
        const rect = servicios.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        
        // Verifica si el elemento está dentro del viewport
        if (rect.top <= windowHeight * 0.75 && rect.bottom >= windowHeight * 0.25) {
            servicios.classList.add('visible');
        } else {
            servicios.classList.remove('visible');
        }
    }
  
    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Llama a la función al cargar la página para aplicar la animación si ya está en el viewport
  });
  