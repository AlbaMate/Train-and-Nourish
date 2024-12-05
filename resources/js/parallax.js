// Effet parallaxe sur toutes les images ayant la classe "parallax-img"
document.addEventListener('scroll', function () {
    const images = document.querySelectorAll('.parallax-img');
    const scrollPosition = window.scrollY;

    images.forEach((img) => {
        const offset = img.offsetTop - scrollPosition;
        img.style.transform = `translateY(${offset * 0.2}px)`; // Réglage de la vitesse
    });
});
