<?php get_header(); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="row artigos">
                    
                    <div class="twelve columns">
                                        
                    	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
                        <p><small>Categorias: <?php the_category(','); ?> | Tags: <?php the_tags(); ?></small> | <?php if (function_exists('wpfp_link')) { wpfp_link(); } ?></p>
                        <p><?php the_content(); ?></p>           
                                                             
                    </div>
                    
                    <div class="twelve columns">
                    
                    	<div class="row">
                        
                        	<div class="four columns">
                            	<?php echo get_avatar( get_the_author_email(), '140' ); ?>
                            </div>
                            
                            <div class="eight columns">
                            
                            <h4><?php the_author(); ?></h4>
                            <br />
                            
                            <p><?php the_author_meta('description'); ?></p>
                            
                            <div class="panel">
                            	
                             <a href="http://twitter.com/<?php the_author_meta('twitter'); ?>">@<?php the_author_meta('twitter'); ?></a> | <a href="http://facebook.com/<?php the_author_meta('facebook'); ?>">Facebook</a> | Confira outros artigos por <?php the_author_posts_link(); ?>
                            
                            </div>
                            
                            </div>
                        
                        </div>
                    
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
