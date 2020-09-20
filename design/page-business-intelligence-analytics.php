<?php
/*
    Template Name: business-intelligence-analytics
 */


get_header();
?>
    <section class="about-baner-section">
        <div class="section-1">
            <div class="row">
                <div class="breadcrumb">
                    <div class="container">
                        <p id="breadcrumbs" class="breadcrumbs">
                            <span>
                                <span>
                                    <a href="#">Home</a>
                                    »
                                    <span>
                                        <a href="#">Services</a>
                                        »
                                        <span class="breadcrumb_last">Software Development</span>
                                    </span>
                                </span>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="quote-section-wrapper">
                        <div class="quote-section-1">
                            <h1><?= the_field('bi_title'); ?></h1>
                            <p><?= the_field('bi_content'); ?></p>
                        </div>
                        <div class="quote-form-section-1">
                            <div class="title-heading">
                                <h3>Request for Proposal </h3>
                                <p class="confidentail_text_header">Safe &amp; Confidential</p>
                            </div>
                            <div class="safe-light">
                                <p class="close-bt">X</p>
                                <p>Privacy is our top priority. We will not disclose your personal information
                                    to anybody. It will strictly be used to contact you for specified purpose.
                                </p>
                            </div>
                            <div class="quote-form">
                                <div role="form" class="wpcf7" id="wpcf7-f110-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="/company/about-us#wpcf7-f110-o1" method="post"
                                        class="wpcf7-form clearfix" novalidate="novalidate">
                                        <div class="left-side clearfix">
                                            <div class="first-input">
                                                <label for="name" class="">Name*</label><br>
                                                <span class="wpcf7-form-control-wrap Name"><input type="text"
                                                        name="Name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required cool"
                                                        id="name" aria-required="true"
                                                        aria-invalid="false"></span>
                                            </div>
                                            <div>
                                                <label for="email">Email Address*</label><br>
                                                <span class="wpcf7-form-control-wrap email">
                                                    <input type="email" name="email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email cool"
                                                        id="email" aria-required="true" aria-invalid="false">
                                                </span>
                                            </div>
                                            <div>
                                                <label for="contact">Contact Number*</label><br>
                                                <span class="wpcf7-form-control-wrap Contact">
                                                    <input type="tel" name="Contact" value="" size="40"
                                                        minlength="6"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel cool"
                                                        id="contact" aria-required="true" aria-invalid="false">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="right-side clearfix">
                                            <div class="last comment">
                                                <label for="desc">Project Description*</label><br>
                                                <span class="wpcf7-form-control-wrap desc">
                                                    <textarea name="desc" cols="40" rows="10" minlength="5"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required cool"
                                                        id="desc" aria-required="true"
                                                        aria-invalid="false"></textarea>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="submit-button">
                                            <input type="submit" value="Submit a Request"
                                                class="wpcf7-form-control wpcf7-submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trusted-client service-pages container">
            <div class="row">
                <div class="client-logos">
                    <div class="hidden-xs">
                        <img src="<?php the_field('our_client'); ?>" title="Our Clients" />
                    </div>
                    <div class="visible-xs">
                        <img src="<?php the_field('our_client'); ?>" title="Our Clients" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cms-data container">
            <div class="row">
                <div class="cms-content">
                <?php the_field('our_client_below_content'); ?>
				</div>
            </div>
        </div>
    </section>

    <section class="testimonial-wrapper">
        <div class="testimonial-section container">
            <div class="row">
                <div class="testimonial-title">
                    <h4>Client Testimonials</h4>
                </div>
                <div class="testimonials clearfix">
                    <div class="left-testimonial">
                        <p>"Often times we would have items come up unplanned. We would have to work through the
                            night, and they literally worked around the clock. That’s what made Wishtree a good
                            partner..."</p>
                        <h5>Swagata Sarangi,</h5>
                        <h6>Head of Marketing, Google India</h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/swagata.png" alt="" class="testimonial_author_image">
                    </div>
                    <div class="right-testimonial">
                        <p>"There's often language barriers and cultural differences that make it challenging.
                            Wishtree did a great job with that. We communicated well. They got the idea."</p>
                        <h5>Stephen Anderson,</h5>
                        <h6>President, Netqwerk (Business Networking Startup)</h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Stephen.png" alt="" class="testimonial_author_image">
                    </div>
                </div>
                <div class="seemore-testimonial">
                    <a href="#">View All Testimonials</a>
                </div>
            </div>
        </div>
    </section>
    <section class="our-achievment-section values ">
        <div class="our-achievments container">
            <div class="row">
                <div class="acheivements-title">
                    <h2>Our Values</h2>
                </div>
                <div class="acheivements-list">
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Customer-Centric.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Customer Centric</p>
                    </div>
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Collaboration.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Collaboration</p>
                    </div>
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Idea-Excellence-1.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Idea & Excellence</p>
                    </div>
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Work-Efficiency.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Work Efficiency</p>
                    </div>
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Freedom-Care.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Freedom & Care</p>
                    </div>
                    <div class="acheivment-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Motivation-Growth.png" alt="" width="auto" height="auto" class="lozad" data-loaded="true">
                        <p class="achievement">Motivation & Growth</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>