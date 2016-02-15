// first set the body to hide and show everyhthing when fully loaded ;)
document.write("<style>body{display:none;}</style>");

(function($){
	
	// here for each comment reply link of wordpress
	$( '.comment-reply-link' ).addClass( 'btn btn-default btn-sm' );
	$( '.comment-list' ).addClass( 'media-list' );
	$( '.comment-list > .comment' ).addClass( 'media' );
	
	// The WordPress Default Widgets 
	// Now we'll add some classes for the wordpress default widgets - let's go  
	
	$( '.widget_rss ul' ).addClass( 'media-list' );
	
	//$( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav' );
	//$( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
	//$( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');
	
	$( 'table' ).addClass( 'table');
	
	$(document.body).show();

})(jQuery);



