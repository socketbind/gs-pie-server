$(document).ready(function() {

	// Attach the method to any link with the "smoothie" class
  $("a.smoothie").on("click", function(e) {

  	// define this
  	var link;
  	link = $(this)

  	// don't jump to anchor
  	e.preventDefault();

  	// where are we going?
    var elementId;
    elementId = link.attr("href");

    // how fast should we scroll?
    var speed;
    if(link.attr("data-smoothie-speed")){
    	speed = parseInt(link.attr("data-smoothie-speed"));
    } else {
    	speed = 600; // defaults to 600 ms
    }

    // scroll away!
    $("html, body").animate({
      scrollTop: $(elementId).offset().top
    }, speed);

  });

});