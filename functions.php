<?php

/**
 * Egenutgivare
 * Author: Kristian Erendi
 * Author URI: http://reptilo.se/
 * Date: 2014-02-07
 * @package WordPress
 * @subpackage egenutgivare
 * @since Egenutgivare 1.0
 */

//include_once get_template_directory() . "/bin/ReptiloCarousel.php";
//include_once get_template_directory()."/bin/ReptiloFAQ.php";




/**
 * custom size for images
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size('homepage-thumb', 250, 180, true);
}





/**
 * Display posts from a category.
 * Bootstrap 3 style
 * 
 * @global type $post
 * @param type $category  - the slug
 * @param type $nbr - nbr of posts to show
 */
function ar_printPostsPerCat($category = 'news', $nbr = 1, $offset = 0, $nbrDigits = 100, $extraclass = '', $nbrDigitsTitle = 30) {
  global $post;
  $nbr = $nbr + $offset;
  $args = array('category_name' => $category, 'posts_per_page' => $nbr);
  $loop = new WP_Query($args);
  if ($loop->have_posts()):
    $i = 0;
    while ($loop->have_posts()) : $loop->the_post();
      if ($i >= $offset) {
        $guid = get_permalink();
        if ($extraclass == 'cat-minimum') {  //small version
          $title = mb_substr(get_the_title(), 0, $nbrDigitsTitle);
          $content = mb_substr(get_the_excerpt(), 0, $nbrDigits) . ' &nbsp;' . '<a href="' . $guid . '" target="" class="">Läs mer...</a>';
        } else {
          $title = get_the_title();
          $content = mb_substr(get_the_excerpt(), 0, $nbrDigits) . '...' . '<br/><a href="' . $guid . '" target="" class="">Read More</a>';
        }
        $modified_date = get_the_modified_date();
        $author = get_the_author();
        $the_tags = '';
        $posttags = get_the_tags();
        if ($posttags) {
          foreach ($posttags as $tag) {
            $the_tags .= $tag->name . ' ';
          }
        }
        $img = '';
        if (has_post_thumbnail()) {
          $img = get_the_post_thumbnail(null, 'homepage-thumb');
        }
        $readingbox .= <<<RB
  <div class="row arvea-row">
    <div class="col-sm-3 headline-img">
      $img
    </div>
    <div class="col-sm-6 headline-txt">
      <h3>$title</h3>
      <div class="pub-info"><time pubdate="pubdate">$modified_date</time></div>
      <div class="cat-content">
        $content
      </div>          
    </div>
  </div>
RB;
      }
      $i++;
    endwhile;
  endif;
  wp_reset_query();
  echo $readingbox;
}




function ar_printCareers($category = 'careers', $nbr = 1, $offset = 0, $nbrDigitsTitle = 100) {
  global $post;
  $nbr = $nbr + $offset;
  $args = array('category_name' => $category, 'posts_per_page' => $nbr);
  $loop = new WP_Query($args);
  if ($loop->have_posts()):
    $i = 0;
    while ($loop->have_posts()) : $loop->the_post();
      if ($i >= $offset) {
        $permalink = get_permalink();
        $title = mb_substr(get_the_title(), 0, $nbrDigitsTitle);
        $readingbox .= <<<RB
        <div class="career-content">
          $title <a href="$permalink" target="" class="">Read More</a>
        </div>
RB;
      }
      $i++;
    endwhile;
  endif;
  wp_reset_query();
  echo $readingbox;
}



