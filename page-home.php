<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
 <div class="wrapper">
    <section class="banner-section">
        <!-- Conatact us -->
        <div class="section-1 container">
            <div class="row">
                <div class="quote-section-1 homepage">
                    <h1><?= the_field('contact_heading'); ?></h1>
                    <p><?= the_field('contact_content'); ?></p>
                    <a title="Contact for Proposal" href="<?= the_field('contact_button'); ?>"><?= the_field('contact_button_text'); ?></a>
                </div>
            </div>
        </div>
        <!-- Slider -->
        <div class="slider-section" id="home_slider_wrapper">
            <div class="row">
                <div class="rev_slider_wrapper">
                    <div class="rev_slider">
                        <?php if (have_rows('slider')): ?>
                        <?php while( have_rows('slider') ): the_row(); ?>
                            <div class="slider-item">
                                <div class="first-layer" style="background-image: url(<?= get_sub_field('image'); ?>)">
                                    <div class="container">
                                        <div class="content-wrapper">
                                        <span><?= get_sub_field('heading_1'); ?></span>
                                        <h2><?= get_sub_field('heading_2'); ?></h2>
                                        <p><?= get_sub_field('content'); ?></p>
                                        <a href="<?= get_sub_field("slider_link"); ?>" class="white-btn"><?= get_sub_field("slider_link_text"); ?></a>
                                    </div>
                                    </div>    
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif ?>
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
     <section class="expertise-section">
                <div class="what-we-do container">
                    <div class="row">
                        <div class="heading-title">
                            <h2><?= the_field('our_expert_title'); ?></h2>
                        </div>
                        <div class="work-flow clearfix">
                        <?php if (have_rows('our_expertisee')): ?>
                            <?php while( have_rows('our_expertisee') ): the_row(); ?>
                            <div class="work-flow-div">
                                <a href="<?= get_sub_field('link'); ?>">
                                     <img src="<?= get_sub_field('icon-img'); ?>" />
                                </a>
                                <h3><a href="<?= get_sub_field('link'); ?>"><?= get_sub_field('title'); ?></a></h3>
                                <p><?= get_sub_field('content'); ?></p>
                            </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                        </div>
                    </div>
                </div>
    </section>
    <section class="wishtree-client-block">
        <div class="wishtree-client-map">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/world-map-img.png">
        </div>
            <div class="container">
                <h2>Clients</h2>
                <div class="client-list">
                         <?php if (have_rows('home_page_clients')): ?>
                            <?php while( have_rows('home_page_clients') ): the_row(); ?>
                                <div class="client-item">
                                    <img src="<?php echo get_sub_field("client_logo"); ?>">
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>                        
                </div>            
        </div>    
    </section>    
    <section class="partnership-alliance-block">
        <div class="container">
            <h2>Partnerships & Alliances</h2>
            <div class="partnership-alliance-list">
                <?php if (have_rows('home_page_partnership_alliances')): ?>
                    <?php while( have_rows('home_page_partnership_alliances') ): the_row(); ?>
                        <div class="partnership-alliance-item">
                            <img src="<?php echo get_sub_field("partner_logo"); ?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif ?>                
            </div>
        </div>
    </section>    
    <!-- Industries -->
    <section class="industries-section">
        <div class="industries-section-title">
            <h2><?= the_field('industries_title'); ?></h2>
            <div class="industries-listing-wrapper">
                <?php if (have_rows('industries')): $i = 1; ?>
                    <?php while( have_rows('industries') ): the_row(); ?>
                        <div class="single-industry industry-<?= $i; ?> ">
                            <a href="<?= get_sub_field('link') ?>">
                                <div class="industry-detial" style="background:url(<?= get_sub_field('image'); ?>);">
                                    <div class="hover-overlay">
                                        <h2 class="industry-name"><?= get_sub_field('name') ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif ?>
                
            </div>
        </div>
    </section>
            
        <!-- Blog Postss -->
        <section class="wishtree-testimonial-block">
            <div class="container">
                <div class="title-block">
                    <h2><?php echo get_field("home_page_testimonial_title"); ?></h2>
                </div>
                <div class="testimonial-wrapper">
                    <div class="testimonial-block-slider">
                        
                        <?php if (have_rows('home_page_testimonial')): $i = 1; ?>
                            <?php while( have_rows('home_page_testimonial') ): the_row(); ?>
                                <?php 
                                    $post_object = get_sub_field('select_testimonial'); 
                                    $post = $post_object;
                                    setup_postdata( $post ); 
                                ?>
                                <div class="testimonial-block-item">
                                    <div class="testimonial-block-item-inner">
                                        <div class="image-block">
                                            <?php $clientImage = get_field("client_image");  ?>
                                            <?php if($clientImage): ?>
                                                <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="<?php echo get_the_title(); ?>"/>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testinomial_placeholder.png" alt="testinomial_placeholder"/>
                                            <?php endif; ?>
                                        </div>
                                        <div class="content-block">
                                            <h3><?php echo get_the_title(); ?></h3>
                                            <span><?php echo get_field("designation"); ?> of <?php echo get_field("company_name"); ?></span>
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
                        <?php if (have_rows('home_page_testimonial')): $i = 1; ?>
                            <?php while( have_rows('home_page_testimonial') ): the_row(); ?>
                                <?php 
                                    $post_object = get_sub_field('select_testimonial'); 
                                    $post = $post_object;
                                    setup_postdata( $post ); 
                                ?>
                                <div class="thumb-slider-item">
                                    <?php $clientImage = get_field("client_image");  ?>
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
        <section class="recent-blog-section">
            <div class="recent-blogs-section container">
                <div class="row">
                    <div class="recent-blogs-list">
                        <h4><?= the_field('recent_blogs_title'); ?></h4>
                        <div class="recent-blogs-wrapper">
                        <?php $args = array(
                        'post_type'=> 'post',
                        'orderby'    => 'date',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => 2 // this will retrive all the post that is published 
                        );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>  
                            <div class="single-recent-blog">
                                <a href="<?php the_permalink($post->ID); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id( $result->ID ), 'blog-thumb' ); ?>
                                    <?php if($image){ ?>
                                    <img width="397" class="recent-blog-img lozad" src="<?= $image['0'] ?>" data-src="<?= $image['0'] ?>" height="auto" data-loaded="true">
                                    <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-placeholder.png" alt="Blog Placeholder Image"/>
                                    <?php } ?>
                                    <p><?= get_the_date();  ?></p>
                                    <h5><?php the_title(); ?> </h5>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>

                        <div class="single-recent-blog">
                            <a href="#">                                                                
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-placeholder.png" alt="Blog Placeholder Image"/>                                
                                <p>September 13, 2020</p>
                                <h5>Case Study - Coming Soon </h5>
                            </a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Achievement -->
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

</div>
<?php get_footer(); ?>