document.addEventListener('DOMContentLoaded', function() {
    // Encontrar el h1
    const h1 = document.querySelector('.site-header h1');
    
    if (h1) {
        // Guardar el texto original
        const textoOriginal = h1.textContent;
        
        // Modificar el texto añadiendo "¡Bienvenido a " al principio
        h1.textContent = '¡Bienvenido a ' + textoOriginal;
        
        // Añadir clase para la animación
        h1.classList.add('texto-animado');
    }
}); 