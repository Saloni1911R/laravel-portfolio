const hamburger = document.querySelector('#toggle-btn');

hamburger.addEventListener('click', function() {
    document.querySelector("#sidebar").classList.toggle("expanded");
});

function navigate(page) {

    document.querySelectorAll('.page').forEach(p => {
        p.classList.remove('active');
    });

    document
        .getElementById('page-' + page)
        .classList.add('active');
}