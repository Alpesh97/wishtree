<?php
/*Template Name: Testimonial
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
            <div class="container">
                <div class="quote-section-wrapper">
                    <div class="quote-section-1">
                        <?php if(get_field("testimonial_heading")): ?>
                            <h1><?php echo get_field("testimonial_heading"); ?></h1>
                        <?php endif; ?>
                        <?php if(get_field("testimonial_content")): ?>
                            <p><?php echo get_field("testimonial_content"); ?></p>
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
<section class="testimonials-page">
    <div class="container">
        <div class="row">
            <div class="testimonials-in clearfix">

                <?php 
                $testimonial_args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'post_status'=> 'publish'
                );
                // execute the main query
                $testimonial_main_loop = new WP_Query($testimonial_args);
                if($testimonial_main_loop->have_posts()) : 
                    while($testimonial_main_loop->have_posts()) : $testimonial_main_loop->the_post(); 
                        ?>
                        <div class="testimonial clearfix">
                            <div class="testimonial-in">
                                <div class="top-block">
                                    <?php if(get_field("is_image")): ?>
                                        <img src="<?php echo get_field('image'); ?>" alt="" />
                                    <?php else: ?>
                                        <?php echo the_field("video"); ?>
                                    <?php endif; ?>
                                    
                                </div>
                                <p class="testimonial_description"><?php echo get_the_content(); ?></p>
                                <p class="client-image">
                                    <?php 
                                        $clientImage = get_field("client_image"); 
                                        if($clientImage):
                                    ?>                                   
                                        <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="">                                    
                                    <?php endif; ?>
                                </p>
                                <h4><?php echo get_the_title(); ?></h4>
                                <h5><?php echo get_field("designation"); ?></h5>
                                <h6><?php echo get_field("company_name"); ?></h6>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
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