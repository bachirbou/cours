// la const recuperera la class .hamburger

const toggler = document.querySelector(".hamburger");

// fonction const
const toggleButton = e => {
    // annimation du bouton
    toggler.classList.toggle("open");
};

toggler.addEventListener("click", toggleButton);