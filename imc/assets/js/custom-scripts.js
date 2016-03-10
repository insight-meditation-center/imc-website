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

  // Remove the last widget from the DOM and then take
  // its contents and put them in the second-to-last
  // widget.
	var $footerWidgets = $('#footer-widgets .widget'),
    $lastFooterWidget = $footerWidgets.last();
  $lastFooterWidget.remove();
  $footerWidgets.eq(-2).append($lastFooterWidget.contents());

  // Use an address HTML element for the address footer widget.
  var $addressContainer = $('.menu-footer-address-container'),
    $addressContainerHtml = $addressContainer.html();
  $addressContainer.replaceWith('<address>'
      + $addressContainerHtml + '</address>');
})(jQuery);
