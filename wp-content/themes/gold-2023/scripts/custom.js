
window.addEventListener('click', function (event) {



    if (event.target.matches('[rel="hamburger"]')) {
        event.preventDefault();

        var body = document.querySelector("body");
        body.classList.toggle("new");
    }
}
)

// var body = document.querySelector("body");
// var toggle = document.querySelector('[rel="hamburger"]')

// function toggleMenu() {
//     event.preventDefault();
//     body.classList.toggle('new');
// }

// toggle.addEventListener('click', toggleMenu);