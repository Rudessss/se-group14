document.addEventListener("DOMContentLoaded", function () {
    const currentTime = new Date();
    const hours = currentTime.getHours();
    let greeting;

    if (hours < 12) {
        greeting = "Good morning!";
    } else if (hours < 18) {
        greeting = "Good afternoon!";
    } else {
        greeting = "Good evening!";
    }

    document.getElementById("greeting").innerText = greeting;
});

var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>4) counter = 1;
}, 5000);

// Curently Showing
const wrapers = document.querySelectorAll(".wraper");
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
}

function addAnimation() {
    wrapers.forEach((wraper) => {
        wraper.setAttribute("data-animated", "true");

        const wraperInner = wraper.querySelector('.flex-container');
        const wraperContent = Array.from(wraperInner.children);

        wraperContent.forEach(item => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute('aria-hidden', true);
            wraperInner.appendChild(duplicatedItem);
        });
    });
}

document.addEventListener("DOMContentLoaded", function () {
    // Get the wrapper element
    var wrapper = document.querySelector(".wraper");
    
    // Get the flex container element
    var flexContainer = document.querySelector(".flex-container");
    
    // Calculate the total width of all movies
    var totalWidth = flexContainer.scrollWidth;
    
    // Set up a scroll event listener
    wrapper.addEventListener("scroll", function () {
        console.log(wrapper.scrollLeft, totalWidth, wrapper.clientWidth)
        // Check if the scroll position is at the end
        if (wrapper.scrollLeft >= 1825) {
            // Reset the scroll position to the beginning
            wrapper.scrollLeft = 174;
        }
        else if(wrapper.scrollLeft == 0){
            wrapper.scrollLeft = 1651; 
        }
    });
});
