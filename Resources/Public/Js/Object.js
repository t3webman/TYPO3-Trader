jQuery(document).ready(function($) {

 // handles the carousel thumbnails
 $('[id^=carousel-selector-]').click(function () {
     var id_selector = $(this).attr("id");
     var id = id_selector.substr(id_selector.length - 1);
     id = parseInt(id);
     $('.carousel-fade').carousel(id);
     $('[id^=carousel-selector-]').removeClass('selected');
     $(this).addClass('selected');
 });

 // when the carousel slides, auto update
 $('.carousel-fade').on('slid', function (e) {
     var id = $('.item.active').data('slide-number');
     id = parseInt(id);
     $('[id^=carousel-selector-]').removeClass('selected');
     $('[id^=carousel-selector-' + id + ']').addClass('selected');
 });

 // clickable table row
 $(".clickable-row").click(function() {
     window.location = $(this).data("href");
 });
});

$(window).on("load resize", function () {

	//  page resize
	var element=$(".object");
	var max=300;
	element.children().each(function(index, child) {
	    child=$(child);
	    var childPos=child.position();
	    var childMax=childPos.top+child.outerHeight();
	    if(childMax>max) {
	        max=childMax;
	    }
	});
	element.css({height: max+'px'});
}).resize();
