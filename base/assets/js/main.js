jQuery(document).ready(function($){ 

$('img.steak').click(function(){
	$('div.about-meaty').fadeIn();
	$('div.back').fadeIn();
});

$('a.team').click(function(){
	$('div.team-meaty').fadeIn();
});

$('a.services').click(function(){
	$('div.services-meaty').fadeIn();
});

$('a.contact').click(function(){
        $('div.contact-meaty').fadeIn();
});

/*$('a#top').click(function(){
	$('div.about-meaty').fadeOut();
	$('div.team-meaty').fadeOut();
	$('div.services-meaty').fadeOut();
	$('div.back').fadeOut();
});
*/

//Timer Function Below
/*
$('#nav-helper a').click(function(){
		setTimeout(function(){ 
			$(".numbers").each(function(i) {
				$(this).delay((i + 1) * 50).fadeIn();
       		}); 
			}, 1500
		);				
		return false;
	});
*/

//SMOOTH SCROLL care of CSS TRICKS 
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


});
