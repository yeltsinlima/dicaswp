<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="row artigos">
                    
                    <div class="twelve columns">
                                        
                    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
                        <p><small>Post escrito por <?php the_author_link(); ?></small></p>
                        <p><?php the_content(); ?></p>           
                                                             
                    </div>
                    
                    <div class="twelve columns">
                    
                    	
                    
                    </div>
                    
                    <div class="twelve columns">
                    
                    </div>
                
                </div>
                <?php endwhile; else: ?>
				<?php endif; ?>
                
            </div>
                        
        </div>
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
