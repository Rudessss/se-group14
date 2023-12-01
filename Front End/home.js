function goToSeats() {
    window.location.href = 'seats.html';
}



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
// infite scroll
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



// Ticket
document.addEventListener("DOMContentLoaded", function () {
    createGrid(9, 9);
});
function createGrid(rows, cols) {
    const grid = document.getElementById("grid");
    const rowLabels = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

    const headerRow = grid.insertRow(0);
    headerRow.insertCell(0); // Empty cell at the top-left corner
    for (let i = 0; i < cols; i++) {
        const headerCell = headerRow.insertCell(i + 1);
        headerCell.textContent = i + 1;
    } 


    for (let i = 0; i < rows; i++) {
        const row = grid.insertRow(i + 1);
        const headerCell = row.insertCell(0);
        headerCell.textContent = rowLabels[i];

        for (let j = 0; j < cols; j++) {
            const cell = row.insertCell(j+1);
            cell.id = `${i + 1}${rowLabels[j]}`

            cell.addEventListener("click", function () {
                toggleCellSelection(this);
                updateSelectedInfo();
            });

            // Add preselected class to specific cells
            if ((i + 1 === 1 && (j + 1 === 1 || j + 1 === 3)) || (i + 1 === 2 && j + 1 === 6)) {
                cell.classList.add("preselected");
                cell.removeEventListener("click", function () {
                    toggleCellSelection(this);
                });
            }
        }
    }
}

function toggleCellSelection(cell) {
    if (!cell.classList.contains("preselected")) {
        cell.classList.toggle("selected");
    }
}

function toggleSelectedToPreselected() {
    const selectedCells = document.querySelectorAll(".selected");
    const numberOfSelectedCells = selectedCells.length;

    selectedCells.forEach(cell => {
        cell.classList.remove("selected");
        cell.classList.add("preselected");
    });

    updateSelectedInfo();
    alert(`Number of selected cells: ${numberOfSelectedCells}`);
}

function updateSelectedInfo() {
    const selectedSeats = document.querySelectorAll(".selected");
    const totalPriceElement = document.getElementById("totalPrice");
    const selectedSeatsElement = document.getElementById("selectedSeats");

    const numberOfSelectedSeats = selectedSeats.length;
    const totalPrice = numberOfSelectedSeats * 50; // Assuming $50 per seat

    const selectedSeatIds = Array.from(selectedSeats).map(cell => cell.id);

    selectedSeatsElement.textContent = `Selected Seats: ${selectedSeatIds.join(", ")}`;
    totalPriceElement.textContent = `Total Price: $${totalPrice}`;
}
