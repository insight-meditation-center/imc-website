(function($) {

	// Triggering Tooltip Function
	$('[data-toggle="tooltip"], .tooltip-toggle').tooltip();


	// Triggering Dropdown Function
	$('[data-toggle="dropdown"], .dropdown-toggle').dropdown();

  // Add an offset column to the first footer widget column
  $('#footer-widgets .widget').first().addClass('col-md-offset-1');

  // Set up sidebar (if there is one on the page)
  var $sidebar = $('.sidebar');

  // Set sidebar's width to its parent's width
  // This is so that when the sidebar affixes (i.e., it becomes
  // position: fixed), its width will remain constant.
  $sidebar.width($sidebar.parent().width());

  $sidebar.affix({
    offset: {
      top: function() {
        return (this.top = $sidebar.offset().top);
      },
      bottom: function() {
        return (this.bottom = $('#footer').outerHeight(true));
      }
    }
  });
})(jQuery);
