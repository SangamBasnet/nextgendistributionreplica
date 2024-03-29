<?php 
/**
 * Posts Layout 4 for Perfect Lite
 *
 * Displays The Posts in Layout 4 
 *
 * @package Perfect Lite
 * 
 * @since Perfect Lite 1.0
 */
global $complete;?>
 
    <div class="lay4">
        <div class="center">
            <div class="lay4_wrap">
                <div class="lay4_inner">
					<?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 

                <!--POST THUMBNAIL START-->
                        <div class="post_image">
                             <!--CALL TO POST IMAGE-->
                            <?php if ( has_post_thumbnail() ) : ?>
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></div>

                          <?php elseif(!complete_gallery_thumb() == ''): ?>
                          <div class="imgwrap">
							<div class="icon_wrap animated fadeInUp">
                              		<a href="<?php the_permalink();?>" title="<?php echo _e('Read More','complete'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                          <a href="<?php the_permalink();?>"><img src="<?php echo complete_gallery_thumb();?>" alt="<?php the_title_attribute(); ?>" class="thn_thumbnail"/></a></div>

                            <?php elseif(!complete_first_image() == ''): ?>
            
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><img alt="<?php the_title(); ?>" src="<?php echo complete_first_image(); ?>" /></a></div>
                          
                          <?php else : ?>
                            
                            <div class="imgwrap">
                            <a href="<?php the_permalink();?>"><img src="<?php echo complete_placeholder_image();?>" alt="<?php the_title_attribute(); ?>" class="complete_thumbnail"/></a></div>   
                                     
                            <?php endif; ?>
                        </div>
                 <!--POST THUMBNAIL END-->

                    <!--POST CONTENT START-->
                        <div class="post_content">
                            <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            
                         <!--META INFO START-->   
                            <?php if (!empty ($complete['post_info_id'])) { ?>
                            <div class="single_metainfo">
                            	<!--DATE-->
                                <i class="fa-calendar"></i><a class="comm_date"><?php the_time( get_option('date_format') ); ?></a>
                                <!--AUTHOR-->
                                <i class="fa-user"></i><?php global $authordata; $post_author = "<a class='auth_meta' href=\"".get_author_posts_url( $authordata->ID, $authordata->user_nicename )."\">".get_the_author()."</a>\r\n"; echo $post_author; ?>
                                <!--COMMENTS COUNT-->
                                <i class="fa-comments"></i><?php if (!empty($post->post_password)) { ?>
                            <?php } else { ?><div class="meta_comm"><?php comments_popup_link( __('0 Comment', 'complete'), __('1 Comment', 'complete'), __('% Comments', 'complete'), '', __('Off' , 'complete')); ?></div><?php } ?>
                            	<!--CATEGORY-->
                              	<i class="fa-th-list"></i><div class="catag_list"><?php the_category(', '); ?></div>
                            </div>
                            <?php } ?>
                         <!--META INFO START-->  
                         
                            <?php complete_excerpt('complete_excerptlength_teaser', 'complete_excerptmore'); ?>
                            
                        </div>
                    <!--POST CONTENT END-->
					<!--Read More Button-->
                    <div class="blog_mo"><a href="<?php the_permalink();?>">+ <?php _e('Read More', 'complete'); ?></a></div>
                    
                </div>
                <?php endwhile ?> 
    
                <?php endif ?>
                </div><!--lay4_inner class END-->
                
        <!--PAGINATION START-->
            <div class="ast_pagenav">
					<?php the_posts_pagination( array('mid_size' => 2,'prev_text' => '','next_text' => '','screen_reader_text ' => '') );  ?>
            </div>
        <!--PAGINATION END-->
            
            <?php wp_reset_postdata(); ?>
            
            </div><!--lay4_wrap class END-->
                    
                <!--SIDEBAR START-->    
            		<?php get_sidebar('blog');?>
            	<!--SIDEBAR END--> 
                
            </div><!--center class END-->
        </div><!--lay4 class END-->
