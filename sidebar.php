            <div class="four columns">
            
            	<div class="row">
                	
                    <div class="twelve columns widget">
                    	<?php if (class_exists('wpBanners')) : ?>
							<?php $wpBanners = new wpBanners(); ?>
                            <?php $wpBanners -> zone(3, true); ?>
                        <?php endif; ?>
                    </div>'
                    
                    
                    <div class="twelve columns widget">

						<div class="row">
                        
                        	<div class="six columns">
                        
                                <ul>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(8, true); ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(9, true); ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(10, true); ?>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                
                        	</div>
                            
                            <div class="six columns">
                        
                                <ul>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(11, true); ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(12, true); ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
											<?php if (class_exists('wpBanners')) : ?>
                                            <?php $wpBanners = new wpBanners(); ?>
                                            <?php $wpBanners -> zone(13, true); ?>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                
                        	</div>
                                
                        </div>
                
                    </div>
                    
                    <div class="twelve columns widget">
                    
                    	<div class="row">
                        
                        	<div class="six columns">
                            
                            	<h3>Arquivos</h3>
                        
                                    <ul>
                                        <?php wp_get_archives(); ?>
                                    </ul>
                                    
                       			</div>
                                
                                <div class="six columns">
                                
                                	<h3>Links</h3>
                                    
                                    <ul>
                                    	<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                                    </ul>
                                
                                </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="twelve columns widget">
                    
                    	<h3>Tags Mais Usadas</h3>
                        
                        <?php wp_tag_cloud('smallest=8&largest=22'); ?>
                    
                    </div>
                    
                    <?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : 
					?>					
					<?php endif; ?>
                    
                
               </div>
            
            </div>
        
        </div>
    
    </div>