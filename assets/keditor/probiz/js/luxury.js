/* Shared presentation enhancements; no form submission or data changes. */
document.addEventListener('DOMContentLoaded', function () {
    const menu = document.getElementById('navbarNav');
    const toggle = document.querySelector('.probiz-mobile-trigger');
    function closeMenu() {
        if (!menu || !toggle) return;
        menu.classList.remove('probiz-menu-open');
        toggle.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
    }
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && menu && menu.classList.contains('probiz-menu-open')) {
            closeMenu();
            toggle.focus();
        }
    });
    document.addEventListener('click', function (event) {
        if (menu && toggle && !menu.contains(event.target) && !toggle.contains(event.target)) closeMenu();
    });
    window.matchMedia('(min-width: 992px)').addEventListener('change', closeMenu);
    document.querySelectorAll('.main-header a[href]').forEach(function (link) {
        if (link.getAttribute('href').startsWith('#')) return;
        if (new URL(link.href).pathname.replace(/\/$/, '') === location.pathname.replace(/\/$/, '')) {
            link.setAttribute('aria-current', 'page');
        }
    });
    document.querySelectorAll('.probiz-filter-buttons button').forEach(function (button) {
        button.setAttribute('aria-pressed', button.classList.contains('active') ? 'true' : 'false');
        button.addEventListener('click', function () {
            document.querySelectorAll('.probiz-filter-buttons button').forEach(function (item) {
                item.setAttribute('aria-pressed', item === button ? 'true' : 'false');
            });
        });
    });
    const empty = document.getElementById('categoryNoResults');
    if (empty) empty.setAttribute('role', 'status');
});
