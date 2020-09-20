<?php
/**
 * Template Name: Default
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Superb_Landingpage
 */


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
           

        </div>

    </div>

   



</section>

            <section>                

                <div class="cms-data container">

                    <div class="row">

                        <div class="cms-content px-15">

                            <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>

                        </div>

                    </div>

                </div>



                

               
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




<?php 
get_footer();
?>

