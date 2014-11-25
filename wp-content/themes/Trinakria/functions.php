<?php	
	
	// Remove <p>
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	
	// Enable thumbnails
	add_theme_support( 'post-thumbnails' );
	
	
	// Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'xarop', TEMPLATEPATH . '/languages' );
 	$locale = get_locale();
    $locale_file = TEMPLATEPATH . '/languages/$locale.php';
    if ( is_readable($locale_file) )
    require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// jQuery
	wp_enqueue_script('jquery');
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
    
	// Menus
	require_once(TEMPLATEPATH .'/inc/wp_bootstrap_navwalker.php');
	register_nav_menus( array(
    	'primary' => 'Primary Menu',
		'secondary' => 'Secondary Menu',
		'footer' => 'Footer Menu'
	) );

    // Sidebars
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name'			=> 'Sidebar',
    		'id'   			=> 'sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		register_sidebar(array(
    		'name'			=> 'Home Sidebar',
    		'id'   			=> 'home_sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }
    
    // Add post format theme support.
	//add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));

?>
<?php
// Bootstrap pagination.
function bootstrap_pagination($pages = '', $range = 2)
{
$showitems = ($range * 2)+1;

global $paged;
if(empty($paged)) $paged = 1;

if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}

if(1 != $pages)
{
echo '<div class="text-center"><ul class="pagination">';
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link(1).'">&laquo;</a></li>';
if($paged > 1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged - 1).'">&lsaquo;</a></li>';

for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? '<li class="active"><span class="current">'.$i.'</span></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
}
}

if ($paged < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($paged + 1).'">&rsaquo;</a></li>';
if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($pages).'">&raquo;</a></li>';
echo '</ul></div>';
}
}

?>