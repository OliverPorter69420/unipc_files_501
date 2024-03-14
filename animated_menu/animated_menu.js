document.addEventListener("DOMContentLoaded", function() {
    const menuTrigger = document.querySelector('.container');
    const menu = document.querySelector('.menu');
  
    menuTrigger.addEventListener('mouseenter', function() {
      menu.style.width = '150px'; // Adjust width as needed
    });
  
    menuTrigger.addEventListener('mouseleave', function() {
      menu.style.width = '0px';
    });
  });
  