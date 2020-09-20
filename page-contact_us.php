<?php 
/*
* Template Name: Contact Us
* 
 */
get_header();

?>

<div class="contact-us-page">

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

    <div class="contact-us-address">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                
                <div class="col-sm-6 address address-pune">
                        
                        <h3>Maharashtra, India</h3>
                        <h4>Wishtree Tech</h4>
                        <address>Suite 311, Bldg B,<br />
                            Ganga Osian(GO) Square IT Park,<br />
                            Wakad Rd, Kaspate Wasti,<br />
                            Wakad, Pune, 411057.
                        </address>    
                        <div class="contact-info">
                            <strong>Contact for Sales:</strong>
                            <a href="mailto:sales@openxcell.com">sales@wishtreetech.com</a>
                            <a href="tel:(+91) 902 842 3456" class="contact-number">(+91) 902 842 3456</a>
                        </div>
                        <div class="contact-info">
                            <strong>Contact for HR:</strong>
                            <a href="mailto:hr@openxcell.com">hr@wishtreetech.com</a>
                            <a href="tel:(+91) 902 842 3456" class="contact-number">(+91) 902 842 3456</a>
                        </div>    



                </div>
                <div class="col-sm-6 map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.6359808795596!2d73.76899331420518!3d18.590443071887105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b960c00800f5%3A0xb6d7d7575ff37a8a!2sWishtree%20Technologies!5e0!3m2!1sen!2sus!4v1571332513176!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6 address address-ahmedabad">
                            <h3>Gujarat, India</h3>
                            <h4>Wishtree Tech</h4>
                            <address>6th Floor,<br />
                                B.D Patel House,<br />
                                Near Sardar Patel Statue,<br />
                                Naranpura, Ahmedabad – 380014,<br />
                                Gujarat
                            </address>
                            <div class="contact-info">
                                <strong>Contact for Sales:</strong>
                                <a href="mailto:sales@openxcell.com">sales@wishtreetech.com</a>
                                <a href="tel:(+91) 79 40 073 784" class="contact-number">(+91) 79 40 073 784</a>
                            </div>
                            <div class="contact-info">
                                <strong>Contact for HR:</strong>
                                <a href="mailto:hr@openxcell.com">hr@wishtreetech.com</a>
                                <a href="tel:(+91) 79 40 073 784" class="contact-number">(+91) 79 40 073 784</a>
                            </div>
                    </div>
                <div class="col-sm-6 map-section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3342209513735!2d72.5578240642829!3d23.04820537115479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8485a34a9cd7%3A0x46f4ebcce9aa3036!2sB.D.Patel%20House!5e0!3m2!1sen!2sus!4v1571333154405!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>    
    </div>
            
    <div class="our-team-image" style="display:none;">
        <div class="container-fluid">
            <h2>Meet our team</h2>
            <div class="team-image" style="background-image:url(http://wordpressdev.co.in/wishtree/wp-content/uploads/2019/10/WT-Team.jpg);"></div>
        </div>    
    </div>        

</div>


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
