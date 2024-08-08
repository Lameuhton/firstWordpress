document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('imageSlider');
    let isDown = false;
    let startX;
    let scrollLeft;

    // Désactiver le glisser-déposer pour toutes les images
    slider.querySelectorAll('img').forEach(img => img.draggable = false);

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        // Désactiver la sélection de texte et d'images
        document.body.style.userSelect = 'none';
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
        // Réactiver la sélection de texte et d'images
        document.body.style.userSelect = '';
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
        // Réactiver la sélection de texte et d'images
        document.body.style.userSelect = '';
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1; // Ajustez la vitesse de défilement ici
        slider.scrollLeft = scrollLeft - walk;
    });
});
