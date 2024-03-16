document.addEventListener('DOMContentLoaded', function() {
    var menuCheckbox = document.getElementById('menu-icon');
    menuCheckbox.addEventListener('change', function() {
        var menuBurger = document.querySelector('.menu-burger ul');
        if (menuCheckbox.checked) {
            menuBurger.style.display = 'block';
        } else {
            menuBurger.style.display = 'none';
        }
    });
});