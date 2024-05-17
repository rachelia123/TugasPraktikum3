import "./bootstrap";
import.meta.glob(["../images/**"]);

const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
    if (this.window.scrollY > 0) {
        navbar.classList.replace('bg-transparent','nav-color')
    } else if(this.window.scrollY <= 0) {
        navbar.classList.replace('nav-color','bg-transparent')
    }
})
