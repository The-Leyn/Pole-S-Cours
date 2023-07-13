const navlinksContainerLeft = document.querySelector(".navlinks-container-left");
const togglerMenuIn = document.querySelector(".toggler-menu");
const togglerMenuOut = document.getElementById("toggler-out");
const navlinksPartRight = document.querySelector(".navlinks-part-right");

function toggleNav() {
    navlinksContainerLeft.classList.toggle("open");

    if(navlinksContainerLeft.classList.contains("open")); {
        navlinksPartRight.classList.toggle("hide");
        navlinksPartRight.addEventListener("click", toggleNav);
    }
}

togglerMenuIn.addEventListener("click", toggleNav);

togglerMenuOut.addEventListener("click", toggleNav);

// ------------------


