// Get the button that opens the popup
var contactButton = document.getElementById("contactButton");

// Get the popup
var popup = document.getElementById("popup");

// Get the close button
var closeButton = document.getElementById("close");

// When the user clicks the button, open the popup
contactButton.onclick = function() {
    popup.style.display = "block";
}

// When the user clicks on the close button, close the popup
closeButton.onclick = function() {
    popup.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}
