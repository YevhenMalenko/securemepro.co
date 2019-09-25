<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landing
 */

get_header();
?>



<div class="page page-landing">
  <div class="page-wave-list d-none d-md-block">
    <img src="images/wave-1.svg" alt="" class="page-wave">
    <img src="images/wave-2.svg" alt="" class="page-wave">
    <img src="images/wave-3.svg" alt="" class="page-wave">
    <img src="images/wave-4.svg" alt="" class="page-wave">
  </div>
  <div class="page-wave-list d-md-none">
    <img src="images/wave-1-sm.svg" alt="" class="page-wave">
    <img src="images/wave-2-sm.svg" alt="" class="page-wave">
    <img src="images/wave-3-sm.svg" alt="" class="page-wave">
    <img src="images/wave-4-sm.svg" alt="" class="page-wave">
  </div>
  <div class="page-inner">
    <div class="section section-main">
      <div class="container-fluid">
        <div class="content">
          <div class="section-header wow fadeIn">
            <p class="page-title">Turn boring data into powerful presentations.</p>
            <div class="section-text">Build animated spreadsheet presentations within minutes.</div>

			<div class="form-single-input section-form">
				<?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]') ?>
			</div>
          
           <!--  <form method="post" class="form-single-input section-form">
             <div class="form-single-input-inner">
               <div class="input">
                 <div class="input-inner">
                   <input name="email" type="text" placeholder="your_email@gmail.com">
                 </div>
                 <div class="input-message-block"></div>
               </div>
               <button type="submit" class="button button-primary form-single-input-button button-subscribe">
                 <span class="button-inner">
                   <span class="button-label">Subscribe</span>
                   <span class="form-status"><i class="form-status-icon ci-tick"></i>Sent</span>
                 </span>
               </button>
             </div>
           </form> -->
          </div>
          <div class="multi-img-container">
            <div class="multi-img">
              <img src="images/multi-img/main/1.png"
                   alt="" class="img-1 wow fadeIn">
              <img src="images/multi-img/main/2.svg" alt=""
                   class="img-2 wow slideInUpCustom">
              <img src="images/multi-img/main/3.svg" alt=""
                   class="img-3 d-none d-md-inline-block wow fadeIn"
                   data-wow-delay="0.5s">
              <img src="images/multi-img/main/4.svg"
                   alt="" class="img-4 d-none d-md-inline-block wow slideInUpCustom">
              <img src="images/multi-img/main/5.svg" alt=""
                   class="img-5 wow fadeInUp"
                   data-wow-delay="1s">
              <img src="images/multi-img/main/6.svg" alt=""
                   class="img-6 wow fadeInUp"
                   data-wow-delay="1s">
              <img src="images/multi-img/main/7.svg" alt=""
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
            <p class="section-title">We’ve all<br class="d-md-none"> been there</p>
            <p class="section-text">When working on spreadsheets, sharing and presenting the information can sometimes become a struggle. Whether it’s presenting an offer to your potential clients, showcasing the cost estimate to your boss or setting clear goals for your team, Mustly.io has got you covered!</p>
          </div>
          <div class="feature-list">
            <img src="images/features-arrow.svg" alt=""
                 class="feature-list-arrow first wow fadeIn"
                 data-wow-delay="0.25s">
            <img src="images/features-arrow.svg" alt=""
                 class="feature-list-arrow second wow fadeIn"
                 data-wow-delay="0.25s">
            <div class="feature-list-inner">
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src="images/features-1.svg" alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title">Easy to Use</p>
                <p class="section-text feature-text">Visualize your data and make  it easy to understand in just a few clicks.</p>
              </div>
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src="images/features-2.svg" alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title">Fast</p>
                <p class="section-text feature-text">Say goodbye to never-ending copying and pasting data from spreadsheets to your presentation software.</p>
              </div>
              <div class="feature wow fadeInUp">
                <div class="feature-img-container">
                  <img src="images/features-3.svg" alt="" class="img-fluid feature-img">
                </div>
                <p class="section-subtitle feature-title">Interactive</p>
                <p class="section-text feature-text">Animate certain pieces of data and get instant feedback from co-workers or clients anywhere on the screen.</p>
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
            <p class="section-title">How It Works</p>
          </div>
          <div class="section-step-list">
            <div class="section-step">
              <div class="row align-items-center no-gutters">
                <div class="col-12 col-md-6 order-1 order-md-0">
                  <div class="multi-img-1-container">
                    <div class="multi-img-1">
                      <img src="images/multi-img/workflow-1/1.svg"
                           alt="" class="img-1 d-none d-md-inline-block wow fadeInUp"
                           data-wow-delay="0.25s">
                      <img src="images/multi-img/workflow-1/2.svg"
                           alt="" class="img-2 wow slideInUpCustom"
                           data-wow-duration="1.1s">
                      <img src="images/multi-img/workflow-1/3.png"
                           alt="" class="img-3 wow fadeInUp">
                      <img src="images/multi-img/workflow-1/4.svg"
                           alt="" class="img-4 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="images/multi-img/workflow-1/5.svg"
                           alt="" class="img-5 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="images/multi-img/workflow-1/6.svg"
                           alt="" class="img-6 wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="images/multi-img/workflow-1/7.png"
                           alt="" class="img-7 wow slideInUpCustom">
                      <img src="images/multi-img/workflow-1/8.svg"
                           alt="" class="img-8 wow fadeInUp">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title">Upload</p>
                    <p class="section-text">You can either…</p>
                    <ul class="list-dotted section-step-list-dotted">
                      <li class="section-text">Upload a project from your device.</li>
                      <li class="section-text">Synchronize with your Dropbox or Google Drive account.</li>
                      <li class="section-text">Or create a new presentation.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-step">
              <div class="row align-items-center no-gutters">
                <div class="col-12 col-md-5">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title">Create</p>
                    <p class="section-text">Choose cells and fill them with content - text, images, videos or external links. Apply visual effects to highlight or animate the data.</p>
                  </div>
                </div>
                <div class="col-12 col-md-7">
                  <div class="multi-img-2-container">
                    <div class="multi-img-2">
                      <img src="images/multi-img/workflow-2/1.svg"
                           alt="" class="img-1 d-none d-md-inline-block wow fadeInUp"
                           data-wow-delay="0.5s">
                      <img src="images/multi-img/workflow-2/2.svg"
                           alt="" class="img-2 wow fadeInUp">
                      <img src="images/multi-img/workflow-2/3.svg"
                           alt="" class="img-3 wow slideInUpCustom"
                           data-wow-duration="1.3s">
                      <img src="images/multi-img/workflow-2/4.png"
                           alt="" class="img-4 wow slideInUpCustom">
                      <img src="images/multi-img/workflow-2/5.svg"
                           alt="" class="img-5 wow fadeInUp"
                           data-wow-delay="0.75s">
                      <img src="images/multi-img/workflow-2/6.svg"
                           alt="" class="img-6 wow slideInUpCustom"
                           data-wow-duration="1.6s">
                      <img src="images/multi-img/workflow-2/7.png"
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
                        <img src="images/multi-img/workflow-3/1.svg"
                             alt="" class="img-1 wow fadeInUp" data-wow-delay="0.25s">
                        <img src="images/multi-img/workflow-3/2.svg"
                             alt="" class="img-2 wow fadeInUp">
                        <img src="images/multi-img/workflow-3/3.png"
                             alt="" class="img-3 wow slideInUpCustom"
                             data-wow-duration="1.2s">
                        <img src="images/multi-img/workflow-3/4.svg"
                             alt="" class="img-4 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/multi-img/workflow-3/5.png"
                             alt="" class="img-5 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/multi-img/workflow-3/6.png"
                             alt="" class="img-6 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/multi-img/workflow-3/7.png"
                             alt="" class="img-7 wow fadeInUp" data-wow-delay="0.6s">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="section-step-content wow fadeIn">
                    <p class="section-title section-step-title">Collaborate</p>
                    <p class="section-text">Share presentations and get instant feedback. Changes are automatically saved and source file can be easily refreshed if needed.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-step wow fadeInUp" id="introduction-video-block">
              <div class="section-step-content">
                <p class="section-title section-step-title">Simple & Engaging</p>
                <p class="section-text">Introducing <span class="clr-primary">mustly.io</span>. The platform that brings people and numbers together.</p>
              </div>
              <div class="section-step-video-container">
                <iframe class="section-step-video" src="https://www.youtube.com/embed/ApLWHHwT_X8?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <img src="images/subscribe-1.svg" class="img-fluid section-img" alt="">
              </div>
              <div class="col-12 col-md-7">
                <div class="section-content">
                  <p class="section-title">Get early access!</p>
                  <p class="section-text">Sign up to be one of the first to get access to our app as soon as it’s ready, fresh out of the oven. Whether you’re a project manager, a researcher or a small business owner looking to create powerful presentations, Mustly.io is almost here!</p>
                  <!-- <form method="post" class="form-single-input section-form">
                    <div class="form-single-input-inner">
                      <div class="input">
                        <div class="input-inner">
                          <input name="email" type="text" placeholder="your_email@gmail.com">
                        </div>
                        <div class="input-message-block"></div>
                      </div>
                      <button type="submit" class="button button-primary form-single-input-button button-try">
                        <span class="button-inner">
                          <span class="button-label">Try Now</span>
                          <span class="form-status"><i class="form-status-icon ci-tick"></i>Sent</span>
                        </span>
                      </button>
                    </div>
                  </form> -->
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
get_footer();
