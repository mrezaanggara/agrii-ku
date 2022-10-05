const splash = document.querySelector('.splash');

splash.addEventListener('click', (e) => {
    setTimeout(() => {
        splash.classList.add('.display-none');
    }, 610);
})

