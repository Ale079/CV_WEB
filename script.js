// Esperamos a que todo el HTML esté cargado
document.addEventListener("DOMContentLoaded", function() {

    // 1. Selecciona tu barra de navegación
    const navbar = document.querySelector(".opciones");

    // 2. Guarda la última posición del scroll (empezamos en 0)
    let lastScrollTop = 0;

    // 3. "Escucha" cada vez que el usuario hace scroll
    window.addEventListener("scroll", function() {
        
        // 4. Obtiene la posición vertical actual del scroll
        let currentScrollTop = window.scrollY || document.documentElement.scrollTop;

        // 5. Compara la posición actual con la anterior

        // Si estamos en la parte superior (menos de 100px) O estamos subiendo
        if (currentScrollTop < lastScrollTop || currentScrollTop < 100) {
            // MUESTRA la barra (quitando la clase)
            navbar.classList.remove("opciones--hidden");
        } 
        // Si estamos bajando Y ya pasamos los 100px
        else if (currentScrollTop > lastScrollTop && currentScrollTop > 100) {
            // OCULTA la barra (añadiendo la clase)
            navbar.classList.add("opciones--hidden");
        }
        
        // 6. Actualiza la "última posición" para la próxima vez
        lastScrollTop = Math.max(0, currentScrollTop);
        
    }, false);



    
    // 1. Configurar el observador
    const observador = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            // si el elemento (entry) está intersectando (visible)
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1 // 10% del elemento debe estar visible
    });

    // 2. Decirle al observador qué elementos observar
    const seccionesOcultas = document.querySelectorAll('.seccion-oculta');
    seccionesOcultas.forEach((el) => observador.observe(el));
});

