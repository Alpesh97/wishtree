<?php 
   get_header();
   
   ?>
<section class="about-baner-section">
   <div class="section-1">
      <div class="row">
         <div class="breadcrumb">
            <div class="container">
               <p id="breadcrumbs" class="breadcrumbs">
                  <?php bcn_display(); ?>
               </p>
            </div>
         </div>
         <div class="container">
            <div class="quote-section-wrapper">
               <div class="quote-section-1">
                  <?php if(get_field("service_title")): ?>
                  <h1><?php echo get_field("service_title"); ?></h1>
                  <?php endif; ?>
                  <?php if(get_field("service_sub_content")): ?>
                  <p><?php echo get_field("service_sub_content"); ?></p>
                  <?php endif; ?>
               </div>
               <div class="quote-form-section-1">
                  <div class="title-heading">
                     <h3><?php echo get_field("request_title", "option"); ?></h3>
                     <p class="confidentail_text_header"><?php echo get_field("request_confidential_text", "option"); ?></p>
                  </div>
                  <div class="safe-light">
                     <p class="close-bt">X</p>
                     <p><?php echo get_field("request_confidential", "option"); ?></p>
                  </div>
                  <div class="quote-form">
                     <?php echo the_field("banner_contact_form","option"); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="trusted-client service-pages container">
      <div class="row">
         <div class="client-logos">
            <?php if (have_rows('client_logos', 'option')):?>
            <?php while (have_rows('client_logos', 'option')): the_row(); ?>
            <div class="logo-item">
               <div class="logo-item-inner">
                  <img class="normal-logo" src="<?php echo get_sub_field("client_logos_logo"); ?>" alt=""/>
                  <img class="hover-logo" src="<?php echo get_sub_field("client_logos_logo_hover"); ?>" class="hover-logo" alt=""/>
               </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>                    
         </div>
      </div>
   </div>
</section>
<!-- <section>
   <div class="top-content-data container">
      <div class="row">
         <div class="top-content">
            <?php if(get_field("main_heading")): ?>
            <h2><?php echo get_field("main_heading"); ?></h2>
            <?php endif; ?>
            <?php if(get_field("sub_heading")): ?>
            <h3><?php echo get_field("sub_heading"); ?></h3>
            <?php endif; ?>
            <div class="top-content-area">
               <ul>
                  <?php 
                     if( have_rows('key_points') ):
                     
                     while ( have_rows('key_points') ) : the_row();
                     
                     ?>
                  <li><?php echo get_sub_field('description'); ?></li>
                  <?php                                 
                     endwhile;
                     
                     endif;
                     
                                            ?>                                  
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="cms-data container">
      <div class="row">
         <div class="cms-content px-15">
            <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>
         </div>
      </div>
   </div>
   <?php 
      $args = array(
      
          'post_parent' => get_the_ID(),
      
          'post_type'   => 'service', 
      
          'numberposts' => -1,
      
          'post_status' => 'publish' 
      
      );
      
      $serviceChildren = get_children( $args );
      
      ?>
   <?php if(!empty($serviceChildren)): ?>
   <div class="company-inputs container">
      <div class="row">
         <?php if(get_the_title($serviceChild->ID) != "App Development" && get_the_title($serviceChild->ID) != "Wearable Devices"): ?>
         <div class="comapny-title">
            <h3>Our Services</h3>
         </div>
         <?php endif; ?>
         <div class="company-inputs-data clearfix">
            <?php
               if(!empty($serviceChildren)):
               
                   foreach($serviceChildren as $serviceChild):
               
               ?>
            <div class="company-data clearfix">
               <a href="<?php echo get_permalink($serviceChild->ID); ?>">
                  <?php if (has_post_thumbnail( $serviceChild->ID ) ): 
                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $serviceChild->ID ), 'single-post-thumbnail' );            
                     
                     ?>
                  <p class="img-data">
                     <img src="<?php echo $image[0]; ?>" alt="<?php echo $serviceChild->title; ?>">
                  </p>
                  <?php endif; ?>
                  <h5><?php echo get_the_title($serviceChild->ID); //get_field("service_title", $serviceChild->ID); ?></h5>
               </a>
               <p class="text-data"><?php echo strip_tags(get_field("service_sub_content", $serviceChild->ID)); ?>
               </p>
            </div>
            <?php 
               endforeach;
               
               endif; ?>                            
            <div class="company-data clearfix">
            </div>
         </div>
      </div>
   </div>
   <?php endif; ?>
   <div class="our-work container">
      <div class="row">
      
          <div class="work-title">
      
              <h4>Our Work</h4>
      
          </div>
      
          <div class="work-list clearfix">
      
              <div class="col-5">
      
                  <div class="works">
      
                      <a href="#" target="_blank">
      
                          <div class="img-in"><img
      
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/orderhive.png"
      
                                  alt=""></div>
      
                          <h4 class="work_title">Orderhive</h4>
      
                          <p class="work_category">Multichannel Order and Inventory Management System</p>
      
                      </a>
      
                  </div>
      
              </div>
      
              <div class="col-5">
      
                  <div class="works">
      
                      <a href="#" target="_blank">
      
                          <div class="img-in"><img
      
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/workhive.png"
      
                                  alt=""></div>
      
                          <h4 class="work_title">Workhive</h4>
      
                          <p class="work_category">Chat App for companies</p>
      
                      </a>
      
                  </div>
      
              </div>
      
              <div class="col-5">
      
                  <div class="works">
      
                      <a href="#"
      
                          target="_blank">
      
                          <div class="img-in"><img
      
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Byjus.png"
      
                                  alt=""></div>
      
                          <h4 class="work_title">Byju's</h4>
      
                          <p class="work_category">India's most preferred Learning App</p>
      
                      </a>
      
                  </div>
      
              </div>
      
              <div class="col-5">
      
                  <div class="works">
      
                      <a href="#" target="_blank">
      
                          <div class="img-in"><img
      
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Freeletics.png"
      
                                  alt=""></div>
      
                          <h4 class="work_title">Freeletics</h4>
      
                          <p class="work_category">World's Popular Fiteness App</p>
      
                      </a>
      
                  </div>
      
              </div>
      
              <div class="col-5">
      
                  <div class="works">
      
                      <a href="#" target="_blank">
      
                          <div class="img-in"><img
      
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/Big-Poppa-Smokers.png"
      
                                  alt=""></div>
      
                          <h4 class="work_title">Big Poppa Smokers</h4>
      
                          <p class="work_category">Serve the best BBQ grill &amp; Smoker Selection Online
      
                          </p>
      
                      </a>
      
                  </div>
      
              </div>
      
          </div>
      
      </div>
      
      </div>
</section> -->
<?php if(get_field("is_testimonial")): ?>
<section class="testimonial-wrapper">
   <div class="testimonial-section container">
      <div class="row">
         <div class="testimonial-title">
            <h4>Client Testimonials</h4>
         </div>
         <div class="testimonials clearfix">
            <div class="left-testimonial">
               <?php 
                  $leftTestimonial = get_field("left_testimonial"); 
                  
                  ?>
               <p>"<?php echo $leftTestimonial->post_content; ?>"</p>
               <h5><?php echo get_the_title($leftTestimonial->ID); ?>,</h5>
               <h6><?php echo get_field("designation",$leftTestimonial->ID); ?>, <?php echo get_field("company_name",$leftTestimonial->ID); ?></h6>
               <?php 
                  $clientImage = get_field("client_image", $leftTestimonial->ID); 
                  
                  if($clientImage):
                  
                  ?>                                    
               <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="" class="testimonial_author_image">
               <?php endif; ?>                                    
            </div>
            <div class="right-testimonial">
               <?php 
                  $rightTestimonial = get_field("right_testimonial"); 
                  
                  ?>
               <p>"<?php echo $rightTestimonial->post_content; ?>"</p>
               <h5><?php echo get_the_title($rightTestimonial->ID); ?>,</h5>
               <h6><?php echo get_field("designation",$rightTestimonial->ID); ?>, <?php echo get_field("company_name",$rightTestimonial->ID); ?></h6>
               <?php 
                  $clientImage = get_field("client_image", $rightTestimonial->ID); 
                  
                  if($clientImage):
                  
                  ?>                                    
               <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="" class="testimonial_author_image">
               <?php endif; ?>
            </div>
         </div>
         <div class="seemore-testimonial">
            <a href="<?php echo get_permalink(360); ?>">View All Testimonials</a>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<section class="wishtree-service-section">
   <div class="container">
      <div class="title-block common-title-block">
         <h2>Accelerate your business growth with Wishtree</h2>
      </div>
      <div class="service-block-wrapper">
         <div class="service-block-row">
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3>Product Consulting</h3>
                     <p>Wishtree acts as a consultant throughout your journey with us. And we help you make the right decision at the right time to grab the apt product for your business.</p>
                  </div>
               </div>
            </div>
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3>Product Development</h3>
                     <p>Our product engineering services include development of a software that helps you grow your revenue and expand your customer base. </p>
                  </div>
               </div>
            </div>
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3>Technology Upgrades (Migration)</h3>
                     <p>We help you migrate from your legacy based systems to the latest technology using agile development methodologies; without hindering your operations. </p>
                  </div>
               </div>
            </div>
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3> Product Implementation</h3>
                     <p>Our team assists you with the 100% deployment and implementation of the product in your team; followed by required training and documentation. </p>
                  </div>
               </div>
            </div>
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3>Product Enhancements</h3>
                     <p>Timely and appropriate product enhancements are also a part of our services. This way, your business efficiency keeps improving with time.</p>
                  </div>
               </div>
            </div>
            <div class="service-block-column">
               <div class="service-block-inner-column">
                  <div class="service-block-content-wrapper">
                     <em>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enterprise_solution.svg" alt="enterprise_solution"/>
                     </em>
                     <h3>Software Maintenance</h3>
                     <p>Our services are not just limited to product development and implementation; but also its prompt maintenance, ensuring a smooth experience.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="wishtree-technologies-section">
   <div class="container">
      <div class="title-block common-title-block">
         <h2>Technologies We Use</h2>
      </div>
      <div class="technologies-wrapper">
          <div class="technologies-list-wrapper">
              <ul>
                  <li class="active" data-id="front-end">Front End</li>
                  <li data-id="backend">Backend</li>
                  <li data-id="frameworks">Frameworks</li>
                  <li data-id="database">Database</li>
                  <li data-id="mobile-apps">Mobile Apps</li>
                  <li data-id="servers-and-hosting">Servers and Hosting</li>
              </ul>
          </div>
          <div class="technologies-content-wrapper">
            <div class="technologies-content-block active" id="front-end">
                <h3>Front End</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                        <li>
                            <a href="#" title="React">
                                <img class="js-lazy-image js-lazy-image--handled" alt="React" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_react.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Angular">
                                <img alt="Angular Js" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_angularjs.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Vue Js">
                                <img alt="Vue Js" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_vuejs.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Backbone JS">
                                <img alt="Backbone JS" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_backbonejs.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Javascripts">
                                <img alt="Javascripts" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_javascript.svg">
                            </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">React JS</a></li>
                        <li><a href="#">Angular JS</a></li>
                        <li><a href="#">Vue JS</a></li>
                        <li><a href="#">Backbone JS</a></li>
                        <li><a href="#">Javascripts</a></li>
                    </ul>
                </div>
            </div>
            <div class="technologies-content-block" id="backend">
                <h3>Backend</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                        <li>
                            <a href="#" title="Node Js">
                                <img class="js-lazy-image js-lazy-image--handled" alt="Node Js" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_nodejs.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Java">
                                <img alt="Java" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_java.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title=".Net">
                                <img alt=".Net" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_microsoft_dotnet.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="PHP">
                                <img alt="PHP" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_php.svg">
                            </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">Node JS</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">.Net</a></li>
                        <li><a href="#">PHP</a></li>
                    </ul>
                </div>
            </div>
            <div class="technologies-content-block" id="frameworks">
                <h3>Frameworks</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                        <li>
                            <a href="#" title="Drupal">
                                <img class="js-lazy-image js-lazy-image--handled" alt="Drupal" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_drupal.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="WordPress">
                                <img alt="WordPress" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_wordPress.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Symfony">
                                <img alt="Symfony" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_symfony.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Laravel">
                                <img alt="Laravel" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_laravel.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Magento">
                                <img alt="Magento" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_magento.svg">
                            </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">Drupal</a></li>
                        <li><a href="#">WordPress</a></li>
                        <li><a href="#">Symfony</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">Magento</a></li>
                    </ul>
                </div>
            </div>
            <div class="technologies-content-block" id="database">
                <h3>Database</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                        <li>
                            <a href="#" title="PostgreSQL">
                                <img class="js-lazy-image js-lazy-image--handled" alt="PostgreSQL" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_postgresql.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="MongoDB">
                                <img alt="MongoDB" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_mongodb.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="MySQL">
                                <img alt="MySQL" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_mysql.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Oracle">
                                <img alt="Oracle" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_oracle.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="SQL Server">
                                <img alt="SQL Server" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_sqlserver.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Firebase">
                                <img alt="Firebase" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_firebase.svg">
                            </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">PostgreSQL</a></li>
                        <li><a href="#">MongoDB</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">Oracle</a></li>
                        <li><a href="#">SQL Server</a></li>
                        <li><a href="#">Firebase</a></li>
                    </ul>
                </div>
            </div>
            <div class="technologies-content-block" id="mobile-apps">
                <h3>Mobile Apps</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                        <li>
                            <a href="#" title="React Native">
                                <img class="js-lazy-image js-lazy-image--handled" alt="React Native" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_react_native.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="IOS">
                                <img alt="IOS" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_apple.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Android">
                                <img alt="Android" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_android.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Swift App">
                                <img alt="Swift App" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_swift.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Kotlin App">
                                <img alt="Kotlin App" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_kotlinlang.svg">
                            </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">React Native</a></li>
                        <li><a href="#">IOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Swift App</a></li>
                        <li><a href="#">Kotlin App</a></li>
                    </ul>
                </div>
            </div>
            <div class="technologies-content-block" id="servers-and-hosting">
                <h3>Servers and Hosting</h3>
                <div class="technology-listing-wrapper">
                    <ul class="technology-logo-list">
                    <li>
                        <a href="#" title="AWS">
                            <img class="js-lazy-image js-lazy-image--handled" alt="AWS" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_aws.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Apache">
                            <img alt="Apache" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_apache.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Nginx">
                            <img alt="Nginx" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_nginx.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Heroku">
                            <img alt="Heroku" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_heroku.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Docker">
                            <img alt="Docker" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_docker.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Lembda">
                            <img alt="Lembda" src="<?php echo get_template_directory_uri(); ?>/assets/images/ic_lembda.svg">
                        </a>
                        </li>
                    </ul>
                    <ul class="technology-name-list">
                        <li><a href="#">AWS</a></li>
                        <li><a href="#">Apache</a></li>
                        <li><a href="#">Nginx</a></li>
                        <li><a href="#">Heroku</a></li>
                        <li><a href="#">Docker</a></li>
                        <li><a href="#">Lembda</a></li>
                    </ul>
                </div>
            </div>
          </div>
      </div>
   </div>
</section>
<section class="wishtree-cta-block">
   <div class="container">
        <div class="wishtree-cta-block-wrapper">
            <div class="title-block common-title-block">
                <h2>Let&rsquo;s talk about your product</h2>
            </div>
            <div class="cta-btn-wrapper">
                <a href="#">Contact us</a>
            </div>
        </div>
    </div>
</section>
<section class="wishtree-testimonial-block">
   <div class="container">
      <div class="title-block">
         <h2><?php echo get_field("home_page_testimonial_title",5); ?></h2>
      </div>
      <div class="testimonial-wrapper">
         <div class="testimonial-block-slider">
            <?php if (have_rows('home_page_testimonial',5)): $i = 1; ?>
            <?php while( have_rows('home_page_testimonial',5) ): the_row(); ?>
            <?php 
               $post_object = get_sub_field('select_testimonial',5); 
               $post = $post_object;
               setup_postdata( $post ); 
               ?>
            <div class="testimonial-block-item">
               <div class="testimonial-block-item-inner">
                  <div class="image-block">
                     <?php $clientImage = get_field("client_image",5);  ?>
                     <?php if($clientImage): ?>
                     <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="<?php echo get_the_title(); ?>"/>
                     <?php else: ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testinomial_placeholder.png" alt="testinomial_placeholder"/>
                     <?php endif; ?>
                  </div>
                  <div class="content-block">
                     <h3><?php echo get_the_title(); ?></h3>
                     <span><?php echo get_field("designation",5); ?> of <?php echo get_field("company_name",5); ?></span>
                     <div class="blockquote-text">
                        <?php the_content(); ?>
                     </div>
                  </div>
               </div>
            </div>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php endif; ?>                        
         </div>
         <div class="testimonial-block-thumb-slider">
            <?php if (have_rows('home_page_testimonial',5)): $i = 1; ?>
            <?php while( have_rows('home_page_testimonial',5) ): the_row(); ?>
            <?php 
               $post_object = get_sub_field('select_testimonial',5); 
               $post = $post_object;
               setup_postdata( $post ); 
               ?>
            <div class="thumb-slider-item">
               <?php $clientImage = get_field("client_image",5);  ?>
               <?php if($clientImage): ?>
               <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="<?php echo get_the_title(); ?>"/>
               <?php else: ?>
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testinomial_placeholder.png" alt="testinomial_placeholder"/>
               <?php endif; ?>                                    
            </div>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php endif; ?>                         
         </div>
      </div>
   </div>
</section>
<section class="our-achievment-section">
   <div class="our-achievments container">
      <div class="row">
         <?php if(get_field("our_achievements_title", "option")): ?>
         <div class="acheivements-title">
            <h2><?php echo get_field("our_achievements_title", "option"); ?></h2>
         </div>
         <?php endif; ?>
         <?php if (have_rows('our_achievements', 'option')):?>
         <div class="acheivements-list">
            <?php while (have_rows('our_achievements', 'option')): the_row(); ?>
            <div class="acheivment-item">
               <img src="<?php echo get_sub_field("our_achievements_image"); ?>" alt="" width="auto" height="auto" data-src="<?php echo get_sub_field("our_achievements_image"); ?>" class="lozad" data-loaded="true">
               <p class="achievement"><?php echo get_sub_field("our_achievement_title"); ?></p>
               <p class="achievement-details"><?php echo get_sub_field("our_achievement_content"); ?></p>
            </div>
            <?php endwhile; ?>
         </div>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php 
   get_footer();
   
   ?>