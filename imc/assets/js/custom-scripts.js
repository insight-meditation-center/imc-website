(function($) {

	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();


	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

  // Add an offset column to the first footer widget column
  console.log('Adding a class...' + $('#footer-widgets .widget').length);
  $('#footer-widgets .widget').first().addClass('col-md-offset-1');

  // Remove the last footer widget from the DOM and then
  // take its contents and put them in the second-to-last
  // widget.
	var $footerWidgets = $('#footer-widgets .widget'),
    $lastFooterWidget = $footerWidgets.last();
  $lastFooterWidget.remove();
  $footerWidgets.eq(-2).append($lastFooterWidget.contents());

  // Use an address HTML element for the address footer widget.
  var $addressContainer = $('.menu-footer-address-container'),
    $addressContainerHtml = $addressContainer.html();
  $addressContainer.replaceWith('<address class="menu-footer-address-container">'
      + $addressContainerHtml + '</address>');
})(jQuery);
