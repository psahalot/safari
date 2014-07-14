<?php
/**
 * 
 * Description: Displays a full-width front page. The front page template provides an optional
 * featured section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the two featrued widgets. Like the
 * featured widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 * 
 * The front page template also displays EDD featured products and featured posts 
 * depending on the settings from Theme Customizer 
 *
 * @package Safari
 * @since Safari 1.0
 */
get_header();
?>

<section class="slider-wrapper">
      <div class="flexslider col-sm-12"  id="main-slider">
        <ul class="slides">
            <?php 
            // check if the slider is blank.
            // if there are no slides by user then load default slides. 
            
            if ( get_theme_mod('slider_one') =='' ) {  ?>
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/includes/images/slider1.jpg" alt="first-slider-image"/>
                <div class="flex-caption">
                    <div class="slider-text-container">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Showcase Your Restaurant Services', 'safari') ?></a></h2>
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'safari') ?> </p>
                          <a class="slider-button one" href="#">
                            <?php esc_html_e('Live Demo', 'safari') ?>
                        </a>
                          <a class="slider-button two" href="#">
                            <?php esc_html_e('View Work', 'safari') ?>
                        </a>
                    </div>
                </div>
                </li>
                
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/includes/images/slider2.jpg" alt="second-slider-image"/>
                <div class="flex-caption">
                    <div class="slider-text-container">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Showcase Your Restaurant Services', 'safari') ?></a></h2>
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'safari') ?> </p>
                           <a class="slider-button one" href="#">
                            <?php esc_html_e('Live Demo', 'safari') ?>
                        </a>
                          <a class="slider-button two" href="#">
                            <?php esc_html_e('View Work', 'safari') ?>
                        </a>
                    </div>
                 </div>
                </li>
                
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/includes/images/slider2.jpg" alt=""/>
                <div class="flex-caption">
                    <div class="slider-text-container">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Showcase Your Restaurant Services', 'safari') ?></a></h2>
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'safari') ?> </p>
                           <a class="slider-button one" href="#">
                            <?php esc_html_e('Live Demo', 'safari') ?>
                        </a>
                          <a class="slider-button two" href="#">
                            <?php esc_html_e('View Work', 'safari') ?>
                        </a>
                    </div>
                 </div>
                </li>
            <?php } ?>
                
          <?php 
          // if user adds a cusotm slide then display the slides 
          // load first slide
          if ( get_theme_mod('slider_one') !='' ) {  ?>
                    <li id="slider1" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_one_url') !='' ) { echo esc_url(get_theme_mod('slider_one_url')); } ?>" src="<?php echo get_theme_mod('slider_one'); ?>" alt=""/>
                        <?php if ( get_theme_mod('slider_title_one') !='' || get_theme_mod('slider_one_url') !='' || get_theme_mod('slider_one_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                                <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_one_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_one')); ?></a></h2>
                                    <p><?php echo esc_html(get_theme_mod('slider_one_description')); ?></p>
                                
                            <?php if ( get_theme_mod('slider_one_button_one_url') !='' && get_theme_mod('slider_one_button_one_text') !=''  ) {  ?>
                                <a class="slider-button one" href="<?php echo esc_url(get_theme_mod('slider_one_button_one_url')); ?>">
                                    <?php  echo esc_html(get_theme_mod('slider_one_button_one_text')); ?>
                                </a> 
                                <?php } ?> 
                             <?php if ( get_theme_mod('slider_one_button_two_url') !='' && get_theme_mod('slider_one_button_two_text') !=''  ) {  ?>
                                <a class="slider-button two" href="<?php echo esc_url(get_theme_mod('slider_one_button_two_text')); ?>">
                                    <?php  echo esc_html(get_theme_mod('slider_one_button_two_url')); ?>
                                </a> 
                                <?php } ?> 
                            </div>
                         </div>
                         <?php } ?>
                    </li>
                    
                     <?php 
                     // load second slide
                     if ( get_theme_mod('slider_two') !='' ) {  ?>
                    <li id="slider2" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_two_url') !='' ) { echo esc_url(get_theme_mod('slider_two_url')); } ?>" src="<?php echo get_theme_mod('slider_two'); ?>" alt=""/>
                       
                     <?php if ( get_theme_mod('slider_title_two') !='' || get_theme_mod('slider_two_url') !='' || get_theme_mod('slider_two_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                            <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_two_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_two')); ?></a></h2>
                                <p><?php echo esc_html(get_theme_mod('slider_two_description')); ?></p>
                                
                            <?php if ( get_theme_mod('slider_two_button_one_url') !='' && get_theme_mod('slider_two_button_one_text') !=''  ) {  ?>
                          <a class="slider-button one" href="<?php echo esc_url(get_theme_mod('slider_two_button_one_url')); ?>">
                              <?php  echo esc_html(get_theme_mod('slider_two_button_one_text')); ?>
                          </a> 
                          <?php } ?> 
                       <?php if ( get_theme_mod('slider_two_button_two_url') !='' && get_theme_mod('slider_two_button_two_text') !=''  ) {  ?>
                          <a class="slider-button two" href="<?php echo esc_url(get_theme_mod('slider_two_button_two_text')); ?>">
                              <?php  echo esc_html(get_theme_mod('slider_two_button_two_url')); ?>
                          </a> 
                          <?php } ?> 
                            </div>
                         </div>
                         <?php } ?>
                    </li>
                     <?php } ?>
                    
                    <?php
                    // load third slide
                    if ( get_theme_mod('slider_three') !='' ) {  ?>
                    <li id="slider3" class="home-slider">  
                        <img href="<?php if ( get_theme_mod('slider_three_url') !='' ) { echo esc_url(get_theme_mod('slider_three_url')); } ?>" src="<?php echo get_theme_mod('slider_three'); ?>" alt=""/>
                       
                   <?php if ( get_theme_mod('slider_title_three') !='' || get_theme_mod('slider_three_url') !='' || get_theme_mod('slider_three_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                            <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_three_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_three')); ?></a></h2>
                              <p><?php echo esc_html(get_theme_mod('slider_three_description')); ?></p>
                              
                        <?php if ( get_theme_mod('slider_three_button_one_url') !='' && get_theme_mod('slider_three_button_one_text') !=''  ) {  ?>
                        <a class="slider-button one" href="<?php echo esc_url(get_theme_mod('slider_three_button_one_url')); ?>">
                            <?php  echo esc_html(get_theme_mod('slider_three_button_one_text')); ?>
                        </a> 
                        <?php } ?> 
                     <?php if ( get_theme_mod('slider_three_button_two_url') !='' && get_theme_mod('slider_three_button_two_text') !=''  ) {  ?>
                        <a class="slider-button two" href="<?php echo esc_url(get_theme_mod('slider_three_button_two_text')); ?>">
                            <?php  echo esc_html(get_theme_mod('slider_three_button_two_url')); ?>
                        </a> 
                        <?php } ?> 
                            </div>
                         </div>
                   <?php } ?>
                    </li>
                     <?php } ?>
                    
                    <?php 
                    // load fourth slide
                    if ( get_theme_mod('slider_four') !='' ) {  ?>
                    <li id="slider4" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_four_url') !='' ) { echo esc_url(get_theme_mod('slider_four_url')); } ?>" src="<?php echo get_theme_mod('slider_four'); ?>" alt=""/>
                       
                    <?php if ( get_theme_mod('slider_title_four') !='' || get_theme_mod('slider_four_url') !='' || get_theme_mod('slider_four_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                            <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_four_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_four')); ?></a></h2>
                                <p><?php echo esc_html(get_theme_mod('slider_four_description')); ?></p>
                                
                            <?php if ( get_theme_mod('slider_four_button_one_url') !='' && get_theme_mod('slider_four_button_one_text') !=''  ) {  ?>
                          <a class="slider-button one" href="<?php echo esc_url(get_theme_mod('slider_four_button_one_url')); ?>">
                              <?php  echo esc_html(get_theme_mod('slider_four_button_one_text')); ?>
                          </a> 
                          <?php } ?> 
                       <?php if ( get_theme_mod('slider_four_button_two_url') !='' && get_theme_mod('slider_four_button_two_text') !=''  ) {  ?>
                          <a class="slider-button two" href="<?php echo esc_url(get_theme_mod('slider_four_button_two_text')); ?>">
                              <?php  echo esc_html(get_theme_mod('slider_four_button_two_url')); ?>
                          </a> 
                          <?php } ?> 
                            </div>
                        </div>
                    <?php } ?>
                    </li>
                     <?php } ?>
                         
                    <?php
                    // load fifth slide
                    if ( get_theme_mod('slider_five') !='' ) {  ?>
                    <li id="slider5" class="home-slider">  
                                <img href="<?php if ( get_theme_mod('slider_five_url') !='' ) { echo esc_url(get_theme_mod('slider_five_url')); } ?>" src="<?php echo get_theme_mod('slider_five'); ?>" alt=""/>
                         
                    <?php if ( get_theme_mod('slider_title_five') !='' || get_theme_mod('slider_five_url') !='' || get_theme_mod('slider_five_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                            <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_five_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_five')); ?></a></h2>
                              <p><?php echo esc_html(get_theme_mod('slider_five_description')); ?></p>
                              
                        <?php if ( get_theme_mod('slider_five_button_one_url') !='' && get_theme_mod('slider_five_button_one_text') !=''  ) {  ?>
                        <a class="slider-button one" href="<?php echo esc_url(get_theme_mod('slider_five_button_one_url')); ?>">
                            <?php  echo esc_html(get_theme_mod('slider_five_button_one_text')); ?>
                        </a> 
                        <?php } ?> 
                     <?php if ( get_theme_mod('slider_five_button_two_url') !='' && get_theme_mod('slider_five_button_two_text') !=''  ) {  ?>
                        <a class="slider-button two" href="<?php echo esc_url(get_theme_mod('slider_five_button_two_text')); ?>">
                            <?php  echo esc_html(get_theme_mod('slider_five_button_two_url')); ?>
                        </a> 
                        <?php } ?> 
                            </div>
                         </div>
                    <?php } ?>
                    </li>
                     <?php } ?>
           <?php } ?>
        </ul>
      </div>
</section><!-- /.slider-wrapper -->

     <!-- Start business-tagline area -->
        <section class="business-tagline-area">
            <div class="container">
                <div class="row">
                    <div class="business-tagline col-sm-12">
                        <?php if ( get_theme_mod('tagline_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('tagline_title')); ?></h3>

                          <?php } else {  ?> <h3><?php esc_html_e('Welcome to Safari', 'safari') ?></h3>
                                   <?php } ?>

                          <?php if ( get_theme_mod('tagline_description') !='' ) {  ?>
                          <p><?php echo esc_html(get_theme_mod('tagline_description')); ?></p>
                                   <?php } else { ?>
                                  <p><?php esc_html_e('Creating your Restaurant & Food based website with Safari is completely easy.
                                      You just need to perform few tweaks in the theme option panel and your website will be ready to use.
                                      Showcase all important features of your website on homepage.', 'safari') ?> </p>
                                                   <?php } ?>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- end business tagline area -->
        <!-- Start home featured area -->
        
    <section class="home-featured-area">
        <div class="container">
                <div class="row">
            <div class="home-featured col-sm-12">
                <div class="home-featured-one col-sm-3">
                    <?php if ( get_theme_mod('home_featured_one') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_one'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/img4.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_one') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_one')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Products', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_one') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_one')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Showcase your best quality products on home page to grab visitor&rsquo;s attention.', 'safari') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_one_link_url') !='' ) { echo esc_url(get_theme_mod('home_one_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_one_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_one_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'safari') ?>
                           <?php } ?></a>
                </div>

                <div class="home-featured-two  col-sm-3">
                    <?php if ( get_theme_mod('home_featured_two') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_two'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/img7.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_two') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_two')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Services', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_two') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_two')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show your multiple services that will explore your website among the audience.', 'safari') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_two_link_url') !='' ) { echo esc_url(get_theme_mod('home_two_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_two_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_two_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'safari') ?>
                           <?php } ?></a>
                </div>


                <div class="home-featured-three col-sm-3">
                    <?php if ( get_theme_mod('home_featured_three') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_three'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/img8.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_three') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_three')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Clients', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_three') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_three')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show testimonials of your clients that will build the trust among the audience.', 'safari') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_three_link_url') !='' ) { echo esc_url(get_theme_mod('home_three_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_three_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_three_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'safari') ?>
                           <?php } ?></a>
                </div>
                
                <div class="home-featured-four col-sm-3">
                    <?php if ( get_theme_mod('home_featured_four') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_four'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/img9.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_four') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_four')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Our Services', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_four') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_four')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Show testimonials of your clients that will build the trust among the audience.', 'safari') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_four_link_url') !='' ) { echo esc_url(get_theme_mod('home_four_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_four_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_four_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'safari') ?>
                           <?php } ?></a>
                </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
     </section><!-- end home featured area -->
     
     
     <section class="home-counter-area">
        <div class="container">
                <div class="row">
            <div class="home-counter col-sm-12">
                <div class="home-counter-one counter col-sm-3">
                           <?php if ( get_theme_mod('counter_title_one') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('counter_title_one')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('568', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('counter_description_one') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('counter_description_one')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Clients.', 'safari') ?> </p>
                                           <?php } ?>
                </div>

                <div class="home-counter-two counter col-sm-3">
                           <?php if ( get_theme_mod('counter_title_two') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('counter_title_two')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('862', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('counter_description_two') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('counter_description_two')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Projects', 'safari') ?> </p>
                                           <?php } ?>
                </div>


                <div class="home-counter-three counter col-sm-3">
                  
                           <?php if ( get_theme_mod('counter_title_three') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('counter_title_three')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('243', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('counter_description_three') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('counter_description_three')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Posts', 'safari') ?> </p>
                                           <?php } ?>
                </div>
                
                <div class="home-counter-four counter col-sm-3">
                 
                           <?php if ( get_theme_mod('counter_title_four') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('counter_title_four')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('243', 'safari') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('counter_description_four') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('counter_description_four')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Templates', 'safari') ?> </p>
                                           <?php } ?>

                </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
     </section><!-- end home featured area -->
     
 
        
        <?php
            get_template_part('content', 'frontteam');
            // Display featured posts on front page
            get_template_part('content', 'frontposts'); ?>
       
        
      
         <span class="top"><a class="back-to-top"><i class="fa fa-arrow-up"></i></a></span>
            
  
<?php
get_footer();
?>