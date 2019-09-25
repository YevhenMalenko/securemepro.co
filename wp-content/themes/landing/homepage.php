<?php /* Template Name: Home Page Template */ 

get_header(); ?>


<div class="page page-landing">
  <div class="page-wave-list d-none d-md-block">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-1.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-2.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-3.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-4.svg" alt="" class="page-wave">
  </div>
  <div class="page-wave-list d-md-none">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-1-sm.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-2-sm.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-3-sm.svg" alt="" class="page-wave">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/wave-4-sm.svg" alt="" class="page-wave">
  </div>
  <div class="page-inner">
    <div class="section section-main">
      <div class="container-fluid">
        <div class="content">
          <div class="section-header wow fadeIn">
            <h1 class="page-title"><?php the_field('main_title'); ?></h1>
            <div class="section-text"><?php the_field('main_sub_title'); ?></div>

			<div class="form-single-input section-form">
				<?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]') ?>
			</div>
          
          </div>
          <div class="multi-img-container">
            <div class="multi-img">
              <img src=<?php the_field('center_image'); ?>
                   alt="" class="img-1 wow fadeIn">
              <!--<img src=<?php the_field('right_image'); ?> alt=""
                   class="img-2 wow slideInUpCustom">-->
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/main/3.png" alt=""
                   class="img-3 d-none d-md-inline-block wow fadeIn"
                   data-wow-delay="0.5s">
              <!--<img src=<?php the_field('left_image'); ?>
                   alt="" class="img-4 d-none d-md-inline-block wow slideInUpCustom">-->
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/main/5.png" alt=""
                   class="img-5 wow fadeInUp"
                   data-wow-delay="1s">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/main/6.png" alt=""
                   class="img-6 wow fadeInUp"
                   data-wow-delay="1s">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/main/7.png" alt=""
                   class="img-7 wow fadeInUp"
                   data-wow-delay="1s">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-features" id="section-features">
      <div class="container-fluid">
        <div class="content">
          <div class="section-header wow fadeInUp">
            <h2 class="section-title"><?php the_field('features_title'); ?></h2>
            <p class="section-text"><?php the_field('features_subtitle'); ?></p>
          </div>
          <div class="feature-list">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/features-arrow.svg" alt=""
                 class="feature-list-arrow first wow fadeIn"
                 data-wow-delay="0.25s">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/features-arrow.svg" alt=""
                 class="feature-list-arrow second wow fadeIn"
                 data-wow-delay="0.25s">
            <div class="feature-list-inner">
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src=<?php the_field('feature_image_1'); ?> alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title"><?php the_field('feature_title_1'); ?></p>
                <p class="section-text feature-text"><?php the_field('feature_description_1'); ?></p>
              </div>
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src=<?php the_field('feature_image_2'); ?> alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title"><?php the_field('feature_title_2'); ?></p>
                <p class="section-text feature-text"><?php the_field('feature_description_2'); ?></p>
              </div>
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src=<?php the_field('feature_image_3'); ?> alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title"><?php the_field('feature_title_3'); ?></p>
                <p class="section-text feature-text"><?php the_field('feature_description_3'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-workflow" id="section-workflow">
      <div class="container-fluid">
        <div class="content">
          <div class="section-header wow fadeIn">
            <h2 class="section-title"><?php the_field('works_title'); ?></h2>
            <p class="section-text"><?php the_field('works_subtitle'); ?></p>
          </div>
          <div class="section-step-list">
            <div class="section-step">
              <div class="row align-items-center no-gutters">
                <div class="col-12 col-md-6 order-1 order-md-0">
                  <div class="multi-img-1-container">
                    <div class="multi-img-1">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/1.svg"
                           alt="" class="img-1 d-none d-md-inline-block wow fadeInUp"
                           data-wow-delay="0.25s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/2.svg"
                           alt="" class="img-2 wow slideInUpCustom"
                           data-wow-duration="1.1s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/3.png"
                           alt="" class="img-3 wow fadeInUp">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/4.svg"
                           alt="" class="img-4 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/5.svg"
                           alt="" class="img-5 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/6.svg"
                           alt="" class="img-6 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/7.png"
                           alt="" class="img-7 wow slideInUpCustom">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-1/8.svg"
                           alt="" class="img-8 wow fadeInUp">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title"><?php the_field('works_block_title_1'); ?></p>
                    <p class="section-text"><?php the_field('works_block_description_1'); ?></p>
                    <ul class="list-dotted section-step-list-dotted">
                      <li class="section-text"><?php the_field('works_block_description_item_1'); ?></li>
                      <li class="section-text"><?php the_field('works_block_description_item_2'); ?></li>
                      <li class="section-text"><?php the_field('works_block_description_item_3'); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-step">
              <div class="row align-items-center no-gutters">
                <div class="col-12 col-md-5">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title"><?php the_field('works_block_title_2'); ?></p>
                    <p class="section-text"><?php the_field('works_block_description_2'); ?></p>
                  </div>
                </div>
                <div class="col-12 col-md-7">
                  <div class="multi-img-2-container">
                    <div class="multi-img-2">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/1.svg"
                           alt="" class="img-1 d-none d-md-inline-block wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/2.svg"
                           alt="" class="img-2 wow fadeInUp">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/3.svg"
                           alt="" class="img-3 wow slideInUpCustom"
                           data-wow-duration="1.3s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/4.png"
                           alt="" class="img-4 wow slideInUpCustom">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/5.svg"
                           alt="" class="img-5 wow fadeInUp"
                           data-wow-delay="0.75s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/6.svg"
                           alt="" class="img-6 wow slideInUpCustom"
                           data-wow-duration="1.6s">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-2/7.png"
                           alt="" class="img-7 wow slideInUpCustom"
                           data-wow-duration="1.9s">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-step">
              <div class="row no-gutters align-items-center">
                <div class="col-12 col-md-6 order-1 order-md-0">
                  <div class="section-step-img">
                    <div class="multi-img-3-container">
                      <div class="multi-img-3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/1.svg"
                             alt="" class="img-1 wow fadeInUp" data-wow-delay="0.25s">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/2.svg"
                             alt="" class="img-2 wow fadeInUp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/3.png"
                             alt="" class="img-3 wow slideInUpCustom"
                             data-wow-duration="1.2s">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/4.svg"
                             alt="" class="img-4 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/5.png"
                             alt="" class="img-5 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/6.png"
                             alt="" class="img-6 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/multi-img/workflow-3/7.png"
                             alt="" class="img-7 wow fadeInUp" data-wow-delay="0.6s">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title"><?php the_field('works_block_title_3'); ?></p>
                    <p class="section-text"><?php the_field('works_block_description_3'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-step wow fadeInUp" id="introduction-video-block">
              <div class="section-step-content">
                <h2 class="section-title section-step-title"><?php the_field('introduction_title'); ?></h2>
                <p class="section-text"><?php the_field('introduction_subtitle'); ?></p>
              </div>
              <div class="section-step-video-container">
                <iframe class="section-step-video" src=<?php the_field('video'); ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-subscribe wow fadeInUp" id="section-subscribe">
      <div class="container-fluid">
        <div class="content">
          <div class="section-inner">
            <div class="row align-items-center">
              <div class="col-12 col-md-5 order-1 order-md-0">
                <img src=<?php the_field('acces_image'); ?> class="img-fluid section-img" alt="">
              </div>
              <div class="col-12 col-md-7">
                <div class="section-content">
                  <h2 class="section-title"><?php the_field('acces_title'); ?></h2>
                  <p class="section-text"><?php the_field('acces_description'); ?></p>
                  <?php echo do_shortcode('[contact-form-7 id="130" title="Form Footer"]') ?>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer();