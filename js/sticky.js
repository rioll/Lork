$(window).scroll(function (event) {
    
    var y = $(this).scrollTop(); 

    if (y >= 100) {
      $('.header-sticky').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.header-sticky').removeClass('fixed');
    }
    
  });
