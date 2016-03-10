(function($) {

	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();


	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

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
