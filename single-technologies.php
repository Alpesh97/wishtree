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

                                    <?php if(get_field("main_heading")): ?>

                                        <h1><?php echo get_field("main_heading"); ?></h1>

                                    <?php endif; ?>

                                    <?php if(get_field("sub_heading")): ?>

                                        <p><?php echo get_field("sub_heading"); ?></p>

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

            <section>                

                <div class="cms-data container">

                    <div class="row">

                        <div class="cms-content">

                            <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>

                        </div>

                    </div>

                </div>



                <!-- <div class="our-work container">

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

                </div> -->

            </section>



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