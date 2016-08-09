(function($) {

	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();


	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

  // Add an offset column to the first footer widget column
  console.log('Adding a class...' + $('#footer-widgets .widget').length);
  $('#footer-widgets .widget').first().addClass('col-md-offset-1');
})(jQuery);
