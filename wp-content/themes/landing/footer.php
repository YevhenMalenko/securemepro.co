<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing
 */

?>



<div class="footer">
  <a href="#header" class="anchor-link button-elevator footer-button-elevator d-md-none">
    <i class="button-elevator-icon ci-arrow-top"></i>
  </a>
  <div class="container-fluid">
    <div class="content">
      <div class="footer-inner">
        <div class="footer-side footer-side-left">
          <div class="footer-logo-container">    	
            <a href="#">
              <div class="footer-logo" style="background-image:url('<?php the_field('footer_logo'); ?>')"></div>
            </a>
            
          </div>
        </div>
        <div class="footer-side footer-side-center">
          <div class="social-action-list">
            <div class="social-action-list-inner">
            	<?php if (get_field('visible_fb')) : ?>
              <a href="<?php the_field('facebook_link'); ?>" target="_blank" class="social-action" >
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/fb.png" class="social-action-icon" style="height:17px" >
              </a>
                <?php endif; ?>
                <?php if (get_field('visible_linkedin')) : ?>
              <a href="<?php the_field('linkedin_link'); ?>" target="_blank" class="social-action">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/linkedin.png" class="social-action-icon" style="height:17px" >
              </a>
                <?php endif; ?>
                <?php if (get_field('visible_twitter')) : ?>
              <a href="<?php the_field('twitter_link'); ?>" target="_blank" class="social-action">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/twitter.png" class="social-action-icon" style="height:17px" >
              </a>
                <?php endif; ?>
                <?php if (get_field('visible_instagram')) : ?>
              <a href="<?php the_field('instagram_link'); ?>" target="_blank" class="social-action">
                <i class="social-action-icon ci-instagram"></i>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/insta.png" class="social-action-icon" style="height:17px" >
              </a>
              	<?php endif; ?>
                <?php if (get_field('visible_medium')) : ?>
              <a href="<?php the_field('medium_link'); ?>" target="_blank" class="social-action" >
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/medium.png" class="social-action-icon" style="height:17px" >
              </a>
                <?php endif; ?>
                <?php if (get_field('visible_quora')) : ?>
              <a href="<?php the_field('quora_link'); ?>" target="_blank" class="social-action" >
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/quora.png" class="social-action-icon" style="height:17px" >
              </a>
                <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="footer-side footer-side-right">
          <p class="footer-copyright"><?php the_field('footer_copyright'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>


<?php wp_footer(); ?>