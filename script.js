const container = document.querySelector('.container')
const btnSignIn = document.querySelector('.btnSign-in')
const btnSignUp = document.querySelector('.btnSign-up')

btnSignIn.addEventListener('click', () => {
    container.classList.add('active')
})

btnSignUp.addEventListener('click', () => {
    container.classList.remove('active')
})
      document.addEventListener("DOMContentLoaded", function() {
   var darkmodeToggle = document.getElementById("darkmode-toggle");

   darkmodeToggle.addEventListener("change", function() {
    if (darkmodeToggle.checked) {
      document.body.classList.add("dark-theme"); // Add dark theme class
    } else {
      document.body.classList.remove("dark-theme"); // Remove dark theme class
    }
  });

  // Optional: If you want to persist the dark mode setting across sessions
  var isDarkMode = localStorage.getItem("dark-mode") === "true";
  darkmodeToggle.checked = isDarkMode; // Set checkbox state based on local storage
  if (isDarkMode) {
    document.body.classList.add("dark-theme");
  }

  darkmodeToggle.addEventListener("change", function() {
    var isChecked = darkmodeToggle.checked;
    localStorage.setItem("dark-mode", isChecked); // Store the checkbox state
  });
});

   // Function to open the side menu
   function openMenu() {
       document.getElementById("mySideMenu").style.width = "250px";
   }

   // Function to close the side menu
   function closeMenu() {
       document.getElementById("mySideMenu").style.width = "0";
   }
   // Add this JavaScript code to toggle the visibility of the popup
      function togglePopup() {
      var popup = document.getElementById('myPopup');
      if (popup.style.display === 'none' || popup.style.display === '') {
       popup.style.display = 'block';
       } else {
       popup.style.display = 'none';
       }
      }
