document.addEventListener('DOMContentLoaded', function() {
    const h1Elements = document.getElementsByTagName('h1');
    if (h1Elements.length > 0) {
        const originalText = h1Elements[0].textContent;
        h1Elements[0].textContent = 'Bienvenido a ' + originalText;
    }
}); 