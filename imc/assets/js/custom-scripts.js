(function($) {

  // Set up sidebar (if there is one on the page)
  var $sidebar = $('.sidebar');

  // Set sidebar's width to its parent's width
  // This is so that when the sidebar affixes (i.e., it becomes
  // position: fixed), its width will remain constant.
  $sidebar.width($sidebar.parent().width());

  $sidebar.affix({
    offset: {
      top: function() {
        return (this.top = 0);
      },
      bottom: function() {
        return (this.bottom = $('#footer').outerHeight(true) + parseInt($sidebar.css('margin-bottom'), 10));
      }
    }
  });
})(jQuery);
