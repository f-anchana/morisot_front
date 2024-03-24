document.addEventListener('DOMContentLoaded', function () {
    var menuCheckbox = document.getElementById('menu-icon');
    var body = document.body;

    menuCheckbox.addEventListener('change', function () {
        var menuBurger = document.querySelector('.menu-burger ul');
        if (menuCheckbox.checked) {
            menuBurger.style.display = 'flex';
            body.classList.add('menu-ouvert');
        } else {
            menuBurger.style.display = 'none';
            body.classList.remove('menu-ouvert');
        }
    });


    var imageContainer = document.getElementById('image-container');
    var defaultImage = document.getElementById('default-image');
    var hoverImage = document.getElementById('hover-image');

    imageContainer.addEventListener('mouseover', function () {
        // Affichage du ticket déchiré et masquage du vrai ticket        
        defaultImage.style.display = 'none';
        hoverImage.style.display = 'block';
    });

    // Événement lorsque la souris quitte l'image
    imageContainer.addEventListener('mouseout', function () {
        // Affichage du vrai ticket entier par défaut et masquage du ticket déchiré au survol
        defaultImage.style.display = 'block';
        hoverImage.style.display = 'none';
    });
});

