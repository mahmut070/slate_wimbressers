jQuery(document).ready(function($) {


  $('.header-winkelmandje').click(function(event) {
    event.preventDefault();
    $('img.header-winkelmandje').toggleClass('collapsed');
    $('#shopping-cart-dropdown').slideToggle();
  })
})
