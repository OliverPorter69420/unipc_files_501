document.addEventListener("DOMContentLoaded", function() {
    const menuTrigger1 = document.getElementById('box1');
    const menu1 = document.getElementById('text_box1');

    const menuTrigger2 = document.getElementById('box2');
    const menu2 = document.getElementById('text_box2');

    const menuTrigger3 = document.getElementById('box3');
    const menu3 = document.getElementById('text_box3');
  
    menuTrigger1.addEventListener('mouseenter', function() {
      menu1.style.width = '340px'; // Adjust width as needed
      menu1.style.height = '250px'
    });
  
    menuTrigger1.addEventListener('mouseleave', function() {
      menu1.style.width = '0px';
      menu1.style.height = '0px';
    });

    menuTrigger2.addEventListener('mouseenter', function() {
      menu2.style.width = '340px'; // Adjust width as needed
      menu2.style.height = '250px'
    });
  
    menuTrigger2.addEventListener('mouseleave', function() {
      menu2.style.width = '0px';
      menu2.style.height = '0px';
    });

    menuTrigger3.addEventListener('mouseenter', function() {
      menu3.style.width = '340px'; // Adjust width as needed
      menu3.style.height = '250px'
    });
  
    menuTrigger3.addEventListener('mouseleave', function() {
      menu3.style.width = '0px';
      menu3.style.height = '0px';
    });
  });
  