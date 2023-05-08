// Variable declarations
const openMenuIcon = document.getElementById("menu-toggle-open");
const closeMenuIcon = document.getElementById("menu-toggle-close");
const mobileMenu = document.getElementById("mobile-menu");
const headerOverlay = document.getElementById("header");

// Open menu & add overlay
openMenuIcon.addEventListener("click", () => {
  mobileMenu.classList.add("menu-opened");
  headerOverlay.classList.add("menu-opened");
});

// Close menu & remove overlay
closeMenuIcon.addEventListener("click", () => {
  mobileMenu.classList.remove("menu-opened");
  headerOverlay.classList.remove("menu-opened");
});

//Open & Close Account Dropdown
function account_toggle() {
  const toggle = document.querySelector(".dropdown");
  toggle.classList.toggle("active");
}

function Logout() {
  var link = window.location.href;
  //Popup declaration
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    heightAuto:false,
    didOpen: (toast) => {}
  })
  $.ajax({
    url: "Resources/Php/logout.php",
    method: "post",
    data: {
      link: link,
    },
    success: function (response) {
      if (response == "sqlerror") {
        Toast.fire({
            icon: 'error',
            title: 'Error,Try Again after a few seconds'
          })
      } else if (response == "success") {
        Toast.fire({
            icon: 'success',
            title: 'Successfully logged Off'
          })      
          setTimeout(changedropdown(), 2000);
          function changedropdown(){
            document.getElementById("account-dropdown").innerHTML ="<li><a href='LogIn.php' class='nav-link'>Log In</a></li>"
          };
        }
    },
  });
}
