<?php 
/**
 * Header layout 1 for Perfect Lite
 *
 * Displays The Header layout 1. This file is imported in header.php
 *
 * @package Perfect Lite
 * 
 * @since Perfect Lite 1.0
 */
global $complete;?>

<!--HEADER STARTS-->
    	<!--HEAD INFO AREA-->
		<div class="head-info-area">
        	<div class="center">
            	<?php if(!dynamic_sidebar('headerleft')) : ?>
                <div class="left"></div><?php endif; ?>
                <?php if(!dynamic_sidebar('headerright')) : ?>
				<div class="right"><span class="sintp">Subscribe</span> <span class="suptp">Contact</span> </div><?php endif; ?>
                <div class="clear"></div>                
            </div>
        </div>
    <div class="header type1">
        <div class="center">
            <div class="head_inner">
            <!--LOGO START-->
                <div class="logo">
                    <?php if(!empty($complete['logo_image_id']['url'])){   ?>
                        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a>
                        <span class="desc"><?php echo bloginfo('description'); ?></span>
                    <?php }else{ ?>
                            <?php if ( is_home() ) { ?>   
                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php }else{ ?>
                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php } ?>
                    
                    <?php } ?>
                </div>
            <!--LOGO END-->
            <!--MENU START--> 
                <!--MOBILE MENU START-->
                <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
                <!--MOBILE MENU END--> 
                <div id="topmenu" class="<?php if ('header' == $complete['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                </div>
            <!--MENU END-->
            
            </div>
    </div>
    </div>
<!--HEADER ENDS-->