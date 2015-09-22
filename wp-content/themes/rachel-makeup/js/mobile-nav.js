jQuery(document).ready(function ($) {
  // Side Menu Trigger Function
  $('.mobile-nav-link').on('click', function(e) {
    e.preventDefault();
    $('#site-navigation').toggleClass('mobile-nav-top');
    $('#page').toggleClass('side-open');
    return false;
  });

  // Close Menu Trigger Function
  //$('a.closeTrigger').click(function() {
  //  $('body').removeClass('sideOpen');
  //  return false;
  //});

});
