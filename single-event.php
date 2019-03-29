<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vto
 */

get_header('inner'); ?>
	<main id="primary" class="site-main">
	<section class="cc-single-blog container">
  <div>
    <?php 
      the_title( '<h1 class="entry-title">', '</h1>' );
    ?>
  </div>
  <div>
    <?php 
      if ( has_post_thumbnail() ) :
        	 the_post_thumbnail();
      endif;
    ?>
  </div>
</section>
<div class="container padding">
  <div class="blog-content">
<!--     <?php 
      the_content();
    ?> -->
    <?php echo $post->post_content ?>
  </div><!-- eo blog-content -->
</div>

<div class="post-nav container">
  <div class="prev-blog">
    <?php previous_post_link(' %link'); ?> 
  </div>
  <div class="next-blog">
    <?php next_post_link('%link'); ?> 
  </div>
</div>
	</main><!-- #primary -->

<?php
get_footer();
