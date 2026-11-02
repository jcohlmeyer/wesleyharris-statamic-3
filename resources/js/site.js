// Mobile menus: toggles the `hidden` class on the menu a button controls. On
// wider screens the menu's nav:block class overrides `hidden`.
document.querySelectorAll('[data-menu-toggle]').forEach((toggle) => {
    const menu = document.getElementById(toggle.getAttribute('aria-controls'));
    const icons = toggle.querySelectorAll('[data-menu-icon]');

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.toggle('hidden');
        toggle.setAttribute('aria-expanded', isOpen);
        icons.forEach((icon) => icon.classList.toggle('hidden'));
    });
});
