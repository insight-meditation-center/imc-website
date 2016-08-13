(function($) {

	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();


	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

  // Add an offset column to the first footer widget column
  $('#footer-widgets .widget').first().addClass('col-md-offset-1');
})(jQuery);
