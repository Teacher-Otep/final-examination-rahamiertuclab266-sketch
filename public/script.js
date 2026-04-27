function showSection(sectionID) {
    const sections = document.querySelectorAll('.content');

    sections.forEach(section => {
        section.style.display = 'none';
    });

    const activeSection = document.getElementById(sectionID);
    if (activeSection) {
        activeSection.style.display = 'block';
    }
}

// Show HOME by default
window.onload = function () {
    showSection('home');

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
        const toast = document.getElementById('success-toast');
        if (toast) {
            toast.classList.remove('toast-hidden');

            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => toast.classList.add('toast-hidden'), 500);
            }, 3000);
        }

        window.history.replaceState({}, document.title, window.location.pathname);
    }
};