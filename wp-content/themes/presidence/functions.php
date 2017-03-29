<?php
add_action('after_setup_theme', 'after_setup_theme');
if (!function_exists('after_setup_theme')) {

  function after_setup_theme() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    // Pour le document title
    add_theme_support('title-tag');
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    // Hide admin bar in FO
    if (!current_user_can('administrator')) {
      show_admin_bar(FALSE);
    }
    // Remove meta generator
    remove_action('wp_head', 'wp_generator');

    require_once(get_stylesheet_directory() . '/inc/custom-types.php');
    require_once(get_stylesheet_directory() . '/inc/class/CFunctions.class.php');

    register_nav_menus(array(
      'primary' => 'Menu principale',
    ));

    add_image_size('thumbnail', 255, 170, TRUE); // A modifier
    add_image_size('carre', 300, 300, TRUE); // A modifier
  }
} // after_setup_theme


function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = wp_strip_all_tags($content);
    return $content.'...';

}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {
  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>".__('Page','presidence')." ". $paged ." ".__('sur','presidence')." ". $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}