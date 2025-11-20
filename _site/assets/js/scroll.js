    let lastScroll = 0;
    const header = document.querySelector('header');
    let ticking = false;

    window.addEventListener('scroll', () => {
    if (!ticking) {
    window.requestAnimationFrame(() => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScroll && currentScroll > 50) {
    // scrolling down
    header.classList.add('hidden');
} else {
    // scrolling up
    header.classList.remove('hidden');
}

    lastScroll = currentScroll;
    ticking = false;
});

    ticking = true;
}
});
