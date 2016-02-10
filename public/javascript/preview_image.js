
$(document).ready(function() {
	// opacity effect
	$( "div.thumbnail" ).hover(
	  function() {
	    $(this).addClass( "color_on" );
	  }, function() {
	    $(this).removeClass( "color_on" );
	  }
	);

	// magnificPopup effect(s)
    $('div.thumbnail a.pic').magnificPopup({
    	type:'image',

    	// gallery options
		gallery: {
		  	enabled: true, // set to true to enable gallery
			preload: [0,2], // read about this option in next Lazy-loading section
			navigateByImgClick: false,
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
			tPrev: 'Previous (Left arrow key)', // title for left button
			tNext: 'Next (Right arrow key)', // title for right button
			tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
		},

    	// zoom effect
    	mainClass: 'mfp-with-zoom', // this class is for CSS animation below
		zoom: {
			enabled:  true, // By default it's false, so don't forget to enable it
			duration: 200, // duration of the effect, in milliseconds
			easing:   'ease-in-out', // CSS transition easing function

			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
  				// openerElement is the element on which popup was initialized, in this case its <a> tag
  				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
  				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		},	
    });	
});