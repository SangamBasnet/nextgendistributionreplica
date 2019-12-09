<?php 
/**
 * The Footer for Perfect Lite
 *
 * Displays the footer area of the template.
 *
 * @package Perfect Lite
 * 
 * @since SKT Perfect Lite 1.0
 */
global $complete;?>
<?php /*To Top Button */?>

<a class="to_top <?php if (empty ($complete['totop_id'])) { ?>hide_totop<?php } ?>"><i class="fa-angle-up fa-2x"></i></a> 
<!--Footer Start-->
<div class="footer_wrap layer_wrapper">
  <?php
  global $complete;
?>
  
  <!--Footer END--> 
</div>
<!--layer_wrapper class END-->
<?php wp_footer(); ?>
</body></html>