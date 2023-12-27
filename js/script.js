const sidelinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sidelinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () =>{
        sidelinks.forEach(i =>{
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});






