let nav = document.getElementsByClassName("navigation")[0];
let video = document.getElementById("video");
let stickyNav = document.getElementById("ul");
let readMore = document.querySelectorAll('.readMore');

/*------Thank you page------*/
window.onload = function () {

    (function () {
        var counter = 5;

        setInterval(function () {
            counter--;
            if (counter >= 0) {
                span = document.getElementById("5");
                span.innerHTML = counter;
            }
            // Display 'counter' wherever you want to display it.
            if (counter === 0) {
                //    alert('this is where it happens');
                clearInterval(counter);
                window.location="/index.html"
            }

        }, 1000);

    })();

}


/************* Burger Nav ****************/
function myFunction(x) {
    x.classList.toggle("change");
}

function toggleHam() {
    nav.classList.toggle("responsive");
}

function toggleStickyHam() {
    stickyNav.classList.toggle("sticky-nav-toggle");
}

/************* Sticky Nav ****************/
window.addEventListener("scroll", () => {
    let navTop = video.offsetTop;
    let scrollPos = window.scrollY;

    if (scrollPos >= navTop + nav.offsetHeight) {
        nav.classList.add("navigation-fixed");
    } else {
        nav.classList.remove("navigation-fixed");
    }
})

/************What We Do Animation***********/
for (var i = 0; i < readMore.length; i++) {
    readMore[i].addEventListener("click", (e) => {
        let parentTarget = e.target.parentElement;
        parentTarget.classList.toggle("hidden");
        /*Hide Show Read More Text*/
        if (parentTarget.className.substr(-6) == "hidden") {
            e.target.innerHTML="X";
        } else {
            e.target.innerHTML="Read More";
        }
    })
}

/************* Typed.JS Jquery ****************/
var typed = new Typed('#typed', {
    strings: ["Click<span class='orange'>it</span> Social", "Your Digital Assets Service Provider"],
    typeSpeed: 60,
    backSpeed: 30,
    backDelay: 500,
    startDelay: 0,
    loop: true,
    showCursor: true
})


