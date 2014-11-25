  
    
    
<div class="navbar-header">
  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"menú</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <span class="visible-xs navbar-brand">
  <?php
	$category = get_the_category(); 
	echo $category[0]->cat_name;
	?>
  </span> </div>
<div class="collapse navbar-collapse bs-navbar-collapse">
  <?php
    wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'nav',
        'container_class'   => '',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );
?>
</div>
