<?php get_header(); ?>
<div class="container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="row cat-list">  
        <div class="col-sm-3">
          <?php echo get_the_post_thumbnail(null, 'homepage-thumb'); ?>
        </div>
        <div class="col-sm-7">
          <article id="post-<?php the_ID(); ?>" class="col-sm-12">
            <header>
              <h2><?php the_title(); ?></h2>
            </header>
            <div class="archive-content">
              <?php the_content(); ?>
            </div>
          </article>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      </div>
    </div>
  </div>
<?php endif; ?>  
<?php get_footer(); ?>