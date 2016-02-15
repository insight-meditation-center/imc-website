<?php
/**
 * Bootstrap functions that act dependently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Insight_Meditation_Center
 */


// Adding Bootstrap features in Comments Form inputs
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="row"><div class="form-group comment-form-author col-sm-4">' . '<label for="author" class="control-label">' . __( 'Name' ) . ( $req ? ' <span class="required text-danger">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email col-sm-4"><label for="email" class="control-label">' . __( 'Email' ) . ( $req ? ' <span class="required text-danger">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url col-sm-4"><label for="url" class="control-label">' . __( 'Website' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>'        
    );
    
    return $fields;
}
add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );


// Adding Bootstrap Classes to Textarea
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment" class="control-label">' . _x( 'Comment', 'noun' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-success col-sm-6'; // since WP 4.1
    
    return $args;
}
add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );


// Adding Bootstrap Classes to Search Form
function my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="form-group"><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control" placeholder="Start Typing..." />
	<!--<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />-->
	</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'my_search_form' );


// Adding Bootstrap Classes to Calendar widget
function aus_calendar( $markup ) {
	$markup = str_replace( '<table id="wp-calendar"' , '<table id="wp-calendar" class="table table-bordered"' , $markup ) ;
	return $markup;
}
add_filter( 'get_calendar' , 'aus_calendar' , 2 ) ;

