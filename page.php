<?php get_header(); ?>
<!-- contaner artigos e sidebar -->
<div class="container" id="blog">
<!-- row -->  
<div class="row">
<!-- artigos -->
<div class="eight columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row artigos">
<div class="twelve columns">
<!-- linha texto -->
<div class="row">
<!-- texto -->
<div class="twelve columns">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
<p>Post escrito por <?php the_author_link(); ?></p>
<p><?php the_content(); ?></p>
</div>                        
</div>
</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>