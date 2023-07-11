var hamburgerMenu = document.querySelector('.dashboard-hamburger');
var dashboardMenu = document.querySelector('.dashboard-menu');

hamburgerMenu.addEventListener('click', () => {
    dashboardMenu.classList.toggle('active')
});