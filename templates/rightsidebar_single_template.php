<div id="content">
		<div class="center">
           <!--POST START-->
			<div class="single_wrap">
				<div class="single_post">

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                        
                                        
                    <!--POST START-->
                        <div class="single_post_content">
                        
                            <h1 class="postitle entry-title"><?php the_title(); ?></h1>
                            <!--POST INFO START-->
								<?php if (!empty ($complete['post_info_id']) || is_customize_preview()) { ?>
                                <div class="single_metainfo <?php if (empty($complete['post_info_id'])){ echo 'hide_singlemeta';}?>">
                                	<!--DATE-->
                                    <i class="fa-calendar"></i><a class="comm_date post-date updated"><?php the_time( get_option('date_format') ); ?></a>
                                  
                                </div>
                                <?php } ?>
                            <!--POST INFO END-->
                            
                            <!--POST CONTENT START-->
                                <div class="thn_post_wrap">

									<?php the_content(); ?>
                                    
                                </div>
                                	<div style="clear:both"></div>
                                <div class="thn_post_wrap wp_link_pages">
									<?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                </div>
                            <!--POST CONTENT END-->
                            
                            
                            
                            <!--POST FOOTER START-->
                                <div class="post_foot">
                                    <div class="post_meta">
										 <?php if( has_tag() ) { ?>
                                             <div class="post_tag">
                                                 <div class="tag_list">
                                                   <?php if(get_the_tag_list()) {
    													echo get_the_tag_list('<ul><li><i class="fa-tag"></i>','</li><li><i class="fa-tag"></i>','</li></ul>');
													}
													?>
                                                 </div>
                                             </div>
                                         <?php } ?>
                                    </div>
                               </div>
                           <!--POST FOOTER END-->
                            
                        </div>
                    <!--POST END-->
                    </div>
                        
            <?php endwhile ?> 
       
            <?php endif ?>
            
				<?php if (!empty ($complete['post_nextprev_id']) || is_customize_preview()) { ?>
				<!--NEXT AND PREVIOUS POSTS START--> 
					<?php if ( get_post_status ( get_the_ID() ) !== 'private' ) { ?>
							<?php get_template_part('sktframe/core','nextprev'); ?>
                    <?php } ?>
                <!--NEXT AND PREVIOUS POSTS END-->          
                <?php }?>


			</div>
</div>
            
            <!--SIDEBAR START--> 
            	<?php get_sidebar('blog'); ?>
            <!--SIDEBAR END--> 



		</div><!--center class END-->
	</div>