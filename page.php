<?php 
/**
 * The Default Page Template for Perfect Lite
 *
 * Displays the Pages.
 *
 * @package Perfect Lite
 * 
 * @since SKT Perfect Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>
    <div class="page_wrap layer_wrapper">
     <?php if (!is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>

<?php if ( is_front_page() || is_home() ) { ?>
<div class="fixed_site layer_wrapper">
  <div class="fixed_wrap fixindex">
    <!-- Home Section 1 -->
	<?php if($complete['hide_boxes_section1'] == ''){?>   
    <section class="home1_section_area <?php if($complete['section1_bg_image']){ ?>home1_section_area_bg<?php } ?>" <?php if(!empty($complete['section1_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec1bgvideo = $complete['section1_bg_video']; echo do_shortcode($sec1bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
            <div class="home_section1_content">
             	  <?php
				  	$pagesetting1 = get_theme_mod( 'page-setting1');
					if ($pagesetting1 == '0'){
						echo '<div class="center-title"><h2 style="color:#282828">Welcome To Perfect Theme</h2><span style="border-bottom-color:#e8e7e7"></span></div><p style="text-align: center;">Perfect theme is perfect to build up various websites using pre-built themes as well as fully customizable due to the fact it has color picker and several shortcodes and plugin compatibility.</p><p style="text-align: center;"><img width="1068" height="401" sizes="(max-width: 1068px) 100vw, 1068px" alt="welcome-banner" src="'.get_template_directory_uri().'/images/welcome-banner.jpg" class="aligncenter size-full wp-image-1719"></p>';	
					}
					else
					{
					$secone = new WP_Query('page_id='.$pagesetting1.'');
					while ($secone->have_posts()) : $secone->the_post();
					?>
					<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php
					}
					?>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php wp_reset_postdata(); ?>
    <!-- Home Section 1 -->
    <!-- Home Section 2 -->
    <?php if($complete['hide_boxes_section2'] ==''){?>
    <section class="home2_section_area <?php if($complete['section2_bg_image']){ ?>home2_section_area_bg<?php } ?>" <?php if(!empty($complete['section2_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec2bgvideo = $complete['section2_bg_video']; echo do_shortcode($sec2bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
            <div class="home_section2_content">
                    <?php
				  	$pagesetting2 = get_theme_mod( 'page-setting2');
					if ($pagesetting2 == '0'){
						echo '<div class="center-title"><h2 style="color:#ffffff">Perfect Boxes.</h2><span style="border-bottom-color:#ffffff"></span></div><div style="height:50px;" class="spacecode"></div><a href="#"><div class="servicebox boxpattern-1"><div class="serviceboxbg"><img src="'.get_template_directory_uri().'/images/responsive.png">
<h3>Responsive Layout</h3><p>Fully 100% responsive and tested with several hand held devices for great mobile friendly and tablet friendly approach. </p><div class="sktgo"><i aria-hidden="true" class="fa fa-angle-right"></i></div></div></div></a><a href="#"><div class="servicebox boxpattern-1"><div class="serviceboxbg"><img src="'.get_template_directory_uri().'/images/retina.png"><h3>Retina Ready Graphics</h3><p>Fully HD ready and retina ready theme with tested on several higher resolution monitors and devices for sharper view.</p><div class="sktgo"><i aria-hidden="true" class="fa fa-angle-right"></i></div></div></div></a><a href="#"><div class="servicebox boxpattern-1"><div class="serviceboxbg"><img src="'.get_template_directory_uri().'/images/performance.png"><h3>Great Performance</h3><p>Faster loading theme with speeded up performance and compatibility with cache plugins for optimum approach.</p><div class="sktgo"><i aria-hidden="true" class="fa fa-angle-right"></i></div></div></div></a><a href="#"><div class="servicebox boxpattern-1"><div class="serviceboxbg"><img src="'.get_template_directory_uri().'/images/user-friendly.png"><h3>User Friendly</h3><p>User friendly with extensive documentation available and access to support forums and email for coder contact.</p><div class="sktgo"><i aria-hidden="true" class="fa fa-angle-right"></i></div></div></div></a>';	
					}
					else
					{
					$sectwo = new WP_Query('page_id='.$pagesetting2.'');
					while ($sectwo->have_posts()) : $sectwo->the_post();
					?>
					<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php
					}
					?>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php wp_reset_postdata(); ?>
    <!-- Home Section 2 -->            
  </div>
</div>
<?php }  ?>
        <div id="content">
            <div class="center">
                <div class="single_wrap">
                    <div class="single_post">
                        <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                                    
                        <!--EDIT BUTTON START-->
                            <!-- <?php if ( is_user_logged_in() || is_admin() ) { ?>
                                    <div class="edit_wrap">
                            			<a href="<?php echo get_edit_post_link(); ?>">
                            				<?php _e('Edit','complete'); ?>
                                		</a>
                            		</div>
                            <?php } ?> -->
                        <!--EDIT BUTTON END-->
                        
                        <!--PAGE CONTENT START-->   
                        <div class="single_post_content">
                        
                                <!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                    	<h1><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </div>
                                        <div style="clear:both"></div>
                                    <div class="thn_post_wrap wp_link_pages">
                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                    </div>
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END--> 
                        </div>
                   <?php endwhile ?> 
                    </div>
                 
                  
                  <?php endif ?>
                    </div>
                <!--PAGE END-->
                <!--SIDEBAR START--> 
                <!-- <?php get_sidebar('page'); ?> -->
                <!--SIDEBAR END-->
                    </div>
            </div>
    </div><!--layer_wrapper class END-->
<?php get_footer(); ?>