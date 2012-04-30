<?php get_header(); ?>
<?php get_template_part('slider'); ?>
<!-- contaner artigos e sidebar -->
<div class="container" id="blog">
<!-- row -->  
<div class="row">
<!-- artigos -->
<div class="eight columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row artigos">
<!-- thumbnail -->
<div class="three columns show-on-desktops">
<?php if ( has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
<?php endif; ?>
</div>	
<!-- texto -->
<div class="nine columns">
<!-- linha texto -->
<div class="row">
<!-- texto -->
<div class="twelve columns">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
<p>Post escrito por <?php the_author_link(); ?></p>
<p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="button nice white small">Continuar lendo...</a>
</div>                        
</div>
</div>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
<div class="row">
<div class="twelve columns">
<br /><br />
<?php wp_pagenavi(); ?>
<br /><br />
</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>