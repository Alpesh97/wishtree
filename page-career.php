<?php
/*
Template Name: Career
*/
get_header();
?>
<section class="about-baner-section career-page">
                <div class="section-1">
                    <div class="row">
                        <div class="breadcrumb">
                            <div class="container">
                                <p id="breadcrumbs" class="breadcrumbs">
                                    <?php bcn_display(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="quote-section-1">
                            <?php if(get_field("top_section_heading")): ?>
                                <h1><?php echo get_field("top_section_heading"); ?></h1>
                            <?php endif; ?>

                            <?php if(get_field("top_section_sub_content")): ?>
                                <?php the_field("top_section_sub_content"); ?>
                            <?php endif; ?>
                            <a href="<?php echo get_field("top_section_button_link"); ?>" target="_blank"><?php echo get_field("top_section_button_text"); ?></a>
                        </div>
                    </div>
                </div>
                <div class="banner-section-wrapper">
                    <div class="inner-wrapper first-layer" style="background-image: url('<?php echo get_field("banner_background_image"); ?>)">
                        <div class="container">
                            <div class="content-wrapper">
                                <?php if(get_field("banner_top_heading")): ?>
                                    <span class="white-solid2"><?php echo get_field("banner_top_heading"); ?></span>
                                <?php endif; ?>
                                <?php if(get_field("banner_heading")): ?>
                                    <h2 class="white"><?php echo get_field("banner_heading"); ?></h2>
                                <?php endif; ?>
                                <?php if(get_field("banner_sub_content")): ?>
                                    <?php the_field("banner_sub_content"); ?>
                                <?php endif; ?>
                                <a href="<?php echo get_field("banner_button_link"); ?>" class="Custom-Button"><?php echo get_field("banner_button_text"); ?><span>›</span></a>
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
            <section class="about-section">
                <div class="container">
                    <div class="cms-content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </section>
            <section class="join-us" style="background:url(<?= get_field('join_us_background_image'); ?>);"> 
                <div class="container">
                    <div class="row">
                        <div class="what-to-do">
                            <?php if(get_field("join_us_heading")): ?>
                                <h2><?php echo get_field("join_us_heading"); ?></h2>
                            <?php endif; ?>
                            <?php if(get_field("join_us_sub_content")): ?>
                                <?php the_field("join_us_sub_content"); ?>
                            <?php endif; ?>
                        </div>
                        <div class="join-in clearfix">
                            <div class="join-in-fresher clearfix">
                                <?php if(get_field("join_us_fresher_heading")): ?>
                                    <h3><?php echo get_field("join_us_fresher_heading"); ?></h3>
                                <?php endif; ?>

                                <?php if(get_field("join_us_fresher_sub_content")): ?>
                                    <?php echo the_field("join_us_fresher_sub_content"); ?>
                                <?php endif; ?>

                                <a href="<?php echo get_field("join_us_fresher_button_link"); ?>" target="_blank"><?php echo get_field("join_us_fresher_button_text"); ?></a>
                            </div>
                            <div class="join-in-experience clearfix">
                                <?php if(get_field("join_us_experience_heading")): ?>
                                    <h3><?php echo get_field("join_us_experience_heading"); ?></h3>
                                <?php endif; ?>

                                <?php if(get_field("join_us_experience_sub_content")): ?>
                                    <?php echo the_field("join_us_experience_sub_content"); ?>
                                <?php endif; ?>

                                <a href="<?php echo get_field("join_us_experience_button_link"); ?>" target="_blank"><?php echo get_field("join_us_experience_button_text"); ?></a>
                            </div>
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