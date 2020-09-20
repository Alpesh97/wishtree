<?php
/*
Template Name: Service
*/
get_header();
?>

<div class="service-page">
    <section>
                <div class="section-1">
                    <div class="row">
                        <div class="breadcrumb">
                            <div class="container">
                                <p id="breadcrumbs" class="breadcrumbs">
                                    <?php bcn_display(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="top-banner">
                            <div class="container">
                                <div class="quote-section-wrapper">
                                    <div class="quote-section-1">
                                        <h1><?php the_field('services_title'); ?></h1>
                                        <p><?php the_field('content'); ?></p>
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
                </div>
            </section>
            <section class="offer-section">
                <div class="company-inputs container">
                       <div class="comapny-title">
                            <h2><?php the_field('what_we_offer_title'); ?></h2>
                       </div>
                   <div class="row">
                       <div class="company-inputs-data clearfix">
					    <?php if (have_rows('what_we_offer')): ?>
                            <?php while( have_rows('what_we_offer') ): the_row(); ?>
					   
                           <div class="company-data clearfix">
                               <p>
                                   <img src="<?= get_sub_field('icon_img'); ?>" />
                               </p>
                               <h3><?= get_sub_field('title'); ?></h3>
                               <p><?= get_sub_field('content'); ?></p>
                               <a href="<?= get_sub_field('learn_more_url'); ?>" class="learn-more-link">Learn More</a>
                               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                           </div>
                          <?php endwhile; ?>
                        <?php endif ?>
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
</div>

<?php
get_footer();
?>