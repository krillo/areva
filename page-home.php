<?php
/**
 * Template Name: Förstasidan
 * @author Kristain Erendi
 * @subpackage Template
 * 
 */
get_header();
?>
<div class="container" id="main-container">
  <div class="row">
    <div class="col-sm-3">&nbsp;</div>
    <div class="col-sm-6 news-heading"><h2>News</h2></div>
  </div>
  <?php if (function_exists('printPostsPerCat')) ar_printPostsPerCat('news', 3, 0, 300); ?>
</div>






<div class="clearfix"></div>
<div id="footer-puff" class="splash-puff">
  <div class="container">
    <div class="row arvea-footer-row">
      <div class="col-sm-3 headline-img">
        <img width="250" height="180" src="http://areva.dev/wp-content/uploads/2014/02/BobHund-250x180.jpg" class="attachment-homepage-thumb wp-post-image" alt="BobHund">
      </div>
      <div class="col-sm-6 headline-txt">
        <h1>Careers</h1>
        <?php if (function_exists('ar_printCareers')) ar_printCareers('careers', 3, 0, 100); ?>
      </div>
    </div>        
  </div>
</div>

<?php get_footer(); ?>

