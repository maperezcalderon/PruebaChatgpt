(function () {
    const links = document.querySelectorAll('.sidebar a');
    const params = new URLSearchParams(window.location.search);
    const currentAction = params.get('action') || 'inicio';

    links.forEach((link) => {
        if (link.dataset.action === currentAction) {
            link.classList.add('active');
        }
    });
})();
