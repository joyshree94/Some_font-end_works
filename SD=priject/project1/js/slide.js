$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
	  if ($(window).scrollTop() < 280) {
       $('.navbar-light').addClass('bg-light');
	   $("#Menu").css("background", "transparent");
	   
    }
    if ($(window).scrollTop() > 281) {
      $('.navbar-light').removeClass('bg-light');
      $('.navbar-light').addClass('bg-light1');
	  $("#Menu").css("background", "black");
    }
  });
});