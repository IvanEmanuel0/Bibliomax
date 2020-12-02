$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('#icono-sidebar').toggleClass("fas fa-angle-left");
      $('#icono-sidebar').toggleClass("fas fa-angle-right");
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      document.getElementById("bodyContent").style.width="100%";
    });



});