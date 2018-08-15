<?php

// Used at AIScripts.com

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );


// Remove this action and callback function if you are not adding CSS in the style.css file.
add_action( 'wp_enqueue_scripts', 'beans_child_enqueue_assets' );
function beans_child_enqueue_assets() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}

/* ------ Custom Code --*/


//Remove title tagline 
beans_remove_action( 'beans_site_title_tag' );


/* Search box
add_action( 'beans_fixed_wrap[_main]_prepend_markup', 'example_search_form' );
function example_search_form() {
  if (is_front_page()) {
  	echo get_search_form();
  }  
}*/

/* Adds search to primary menu. */
beans_add_smart_action( 'beans_menu[_navbar][_primary]_append_markup', 'myprefix_primary_menu_search' );

    function myprefix_primary_menu_search() {
        ?>
        <li class="tm-search uk-large-visible uk-margin-large-left">
            <?php get_search_form(); ?>
        </li>
        <?php
    }

/* ----- Remove all page titles, but do not remove post titles.
 https://community.getbeans.io/discussion/remov-title-and-change-archive-h1/ ----*/
 add_action( 'wp', 'setup_document_remove_pagetitle' );
 	function setup_document_remove_pagetitle() {
 		if ( false === is_single() and !is_home() ) {
 			beans_remove_action( 'beans_post_title' );
 		}
 	}
 
 
 /*----- Copyright information bottom left and right ----*/
  
  // LEFT text
  add_filter( 'beans_footer_credit_text_output', 'modify_left_copyright' );
  function modify_left_copyright() {
  	// Add your copyright html, text, Dynamic date and times etc.
  	 ?><p>© <?php echo date('Y'); ?> AI Scripts <a href="<?php echo admin_url();?>" title="Login to the backend of WordPress." />Login.</a></p>
  	<?php
  }
  
  // RIGHT text 
  add_action( 'beans_footer_credit_right_text_output', 'modify_right_copyright' );
  function modify_right_copyright() {
   	?> Built by <a href="http://easywebdesigntutorials.com/" target="_blank" title="Easy Web Design Tutorials"> Paal Joachim</a> with <a href="http://www.getbeans.io/" title="Beans Framework for WordPress" target="_blank">Beans WordPress Framework</a>.
   	<?php
  } 
 
 
 /* Widgets */
 
 
 /*---- Hero Widget ----*/
  add_action( 'widgets_init', 'beans_child_widgets_init' );
  function beans_child_widgets_init() {
  beans_register_widget_area( array(
  	'name' => 'Hero',
  	'id' => 'hero',
  	'description' => 'Widgets in this area will be shown in the hero section as a grid.',
  	'beans_type' => 'grid'
  	) );
  }
 
 // Display hero widget area in the front end 
 add_action( 'beans_main_grid_before_markup', 'beans_child_hero_widget_area' );
 function beans_child_hero_widget_area() {
 
 // Stop here if no widget
  if( !beans_is_active_widget_area('hero') === is_front_page () )
  return;
  ?>
  <div class="widget-hero uk-block">
  <div class="uk-container uk-container-center">
  <?php echo beans_widget_area( 'hero' ); ?>
  </div>
  </div>
  <?php
 }
 

/*  META information */
add_filter( 'beans_post_meta_items', 'post_meta_items' );
function post_meta_items() {
  return array(
       'date' => 10,
       'author' => 20, 
    // 'comments' => 30,
    // 'categories' => 40,
    // 'tags' => 50
   );
}

// Remove the post meta categories below the content.
beans_remove_action( 'beans_post_meta_categories' );

// Removes Posted on prefix
beans_remove_output( 'beans_post_meta_date_prefix' );

// Removes uk-subnav and uk-subnav-line
//beans_remove_attribute( 'beans_post_meta', 'class', 'uk-subnav uk-subnav-line' );
 
 // https://community.getbeans.io/discussion/how-to-add-3-widgte-area-in-one-place/
 add_action( 'widgets_init', 'footer_widgets_init' );
 function footer_widgets_init() {
 
 // Create 3 widget area.
 for( $i = 1; $i <= 3; $i++ ) {
 	beans_register_widget_area( array(
 		'name' => "Footer Widget {$i}",
 		'id' => "footer_widget_area_{$i}",
 	) );
 	}
 }
  
 // Output widget area above the footer.
 add_action( 'beans_footer_before_markup', 'example_footer_widget_area' );
 function example_footer_widget_area() {
 
 ?>
 		<div class="footer-widget uk-block">
 		<div class="uk-container uk-container-center">
 		<div class="uk-grid uk-grid-width-medium-1-1" data-uk-grid-margin>
 <?php for( $i = 1; $i <= 3; $i++ ) : ?>
 		<div><?php echo beans_widget_area( "footer_widget_area_{$i}" ); ?></div>
 <?php endfor; ?>
 		</div>
 		</div>
 		</div>
 <?php
 }
 
 
 
 
 /* --------  Adds on top of page menu instead of offcanvas menu. ------ */
 
 // Remove all traces of the offcanvas.
 remove_theme_support( 'offcanvas-menu' );
 
 // Add class to hide desktop primary nav which was removed with the off-canvas support.
 beans_add_attribute( 'beans_menu[_navbar][_primary]', 'class', 'uk-visible-large' );
 
 // Add the "toggle" uikit component, make sure you don't duplicate the 'beans_uikit_enqueue_scripts' callback if you already have one.
 add_action( 'beans_uikit_enqueue_scripts', 'example_enqueue_uikit_assets' );
 
 function example_enqueue_uikit_assets() {
   beans_uikit_enqueue_components( array( 'toggle' ) );
 }
 
 // Add primary mobile nav toggle button.
 add_action( 'beans_primary_menu_append_markup', 'example_primary_menu_toggle' );
 
 function example_primary_menu_toggle() {
 
  ?><button class="uk-button uk-hidden-large" data-uk-toggle="{target:'#example-primary-mobile-menu'}"><i class="uk-icon-navicon uk-margin-small-right"></i><?php _e( 'Menu', 'example' ); ?></button><?php
 
 }
 
 // Add primary mobile nav.
 add_action( 'beans_header_append_markup', 'example_primary_mobile_menu' );
 
 function example_primary_mobile_menu() {
 
   ?>
   <div id="example-primary-mobile-menu" class="uk-hidden uk-container uk-container-center">
    <div class="uk-panel-box uk-panel-box-secondary uk-margin-top">
      <?php wp_nav_menu( array(
        'theme_location' => has_nav_menu( 'primary' ) ? 'primary' : '',
        'fallback_cb' => 'beans_no_menu_notice',
         'container' => '',
         'beans_type' => 'sidenav' // This is giving the sidenav menu style for the sake of the example.
      ) ); ?>
    </div>
   </div>
   <?php
 
 }
