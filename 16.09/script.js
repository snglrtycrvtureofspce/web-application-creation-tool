const mainMenuItems = document.querySelectorAll('.main-menu li');
mainMenuItems.forEach((item) => {
    item.addEventListener('mouseleave', () => {
        const subMenu = item.querySelector('.sub-menu');
        if (subMenu) {
            subMenu.style.display = 'none';
        }
    });
});