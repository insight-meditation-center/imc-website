(function($) {
			
	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();
	
	
	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

	
	// Initiating Animation to Top on Click
	var topBtn = $('#toTop');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			topBtn.fadeIn(1200);
		} else {
			topBtn.fadeOut(200);
		}
	}); 
	topBtn.click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	
	
	// Adding Dynamic Bootstrap Classes to Footer Widgets
	var $footerWidgets = $('#footer-widgets .widget'),
		$widgetLength = $footerWidgets.size();
	
	if ($widgetLength == '6') {
		$footerWidgets.removeClass('col-md-3').addClass('col-md-2');
	} else if ($widgetLength == '5') {
		$footerWidgets.removeClass('col-md-3').addClass('col-md-15');
	} else if ($widgetLength == '3') {
		$footerWidgets.removeClass('col-md-3').addClass('col-md-4');
	} else if ($widgetLength == '2') {
		$footerWidgets.removeClass('col-md-3').addClass('col-md-6');
	}
	
	
})(jQuery);