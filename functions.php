<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/wp_bootstrap_navwalker.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function zoetrecepten_recept_cpt() {
// Create custom post type: Recepten
$labels = array(
  'name' => 'Recepten',
  'singular_name' => 'Recepten',
  'add_new' => 'Nieuw Recept',
  'add_new_item' => 'Voeg Nieuw Recept Toe',
  'edit_item' => 'Bewerk Recept',
  'new_item' => 'Nieuw Recept',
  'view_item' => 'Bekijk Recept',
  'search_items' => 'Zoek Recept',
  'not_found' =>  'Geen Recept Gevonden',
  'not_found_in_trash' => 'Geen Recepten Gevonden In De Prullenbak',
  );
$args = array(
  'labels' => $labels,
  'menu_position' =>  5,
  'has_archive' => true,
  'public' => true,
  'hierarchical' => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
  'taxonomies' => array('category', 'post_tag'),
  'supports' => array(
    'title',
    'editor',
    'excerpt',
    'custom-fields',
    'thumbnail',
    'page-attributes',
    'comments'
    )
  );
register_post_type( 'recepten', $args );
}
add_action('init', 'zoetrecepten_recept_cpt', 0);

function zoetrecepten_blog_cpt() {
// Create custom post type: Blog
$labels = array(
  'name' => 'Blog',
  'singular_name' => 'Blog',
  'add_new' => 'Nieuw Bericht',
  'add_new_item' => 'Voeg Nieuw Bericht Toe',
  'edit_item' => 'Bewerk Bericht',
  'new_item' => 'Nieuw Bericht',
  'view_item' => 'Bekijk Bericht',
  'search_items' => 'Zoek Bericht',
  'not_found' =>  'Geen Bericht Gevonden',
  'not_found_in_trash' => 'Geen Bericht Gevonden In De Prullenbak',
  );
$args = array(
  'labels' => $labels,
  'menu_position' =>  6,
  'has_archive' => true,
  'public' => true,
  'hierarchical' => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'taxonomies'  => array( 'category', 'post_tag'),
  'supports' => array(
    'title',
    'editor',
    'excerpt',
    'custom-fields',
    'thumbnail',
    'page-attributes',
    'comments'
    )
  );
register_post_type( 'blog', $args );
}
add_action('init', 'zoetrecepten_blog_cpt', 0);