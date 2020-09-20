<?php /* Template Name: About Page Template */ ?>
<?php get_header(); ?>
        <div class="wrapper">
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
                                    <h1><?= the_field('about_wishtree'); ?></h1>
                                    <p><?= the_field('about_wishtree_content'); ?>.</p>
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
                <div class="banner-section-wrapper">
                    <div class="inner-wrapper first-layer" style="background-image: url(<?= the_field('deliver_value_bg_img'); ?>)">
                        <div class="content-wrapper"><?= the_field('company_vision') ?></div>
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
                        <h3 style="text-align: center;"><?= the_field('about_openxcell_below_client'); ?></h3>
                        <?= the_field('about_content'); ?>
                    </div>
                </div>
            </section>
            <?php if(get_field("why_openxcell_heading")): ?>
            <section class="why-openxcell-section">
                <div class="expertise-section">
                    <div class="what-we-do container">
                        <div class="row">
                            <div class="heading-title">
                                <h2><?= the_field('why_openxcell_heading'); ?></h2>
                            </div>
                            <div class="work-flow clearfix">
                                <?php if (have_rows('why_openxcell_content')): ?>
                                <?php while( have_rows('why_openxcell_content') ): the_row(); ?>
                                    <div class="work-flow-div">
                                        <img src="<?= get_sub_field('image') ?>" alt="">
                                        <h3><?= get_sub_field('title'); ?></h3>
                                        <p><?= get_sub_field('content'); ?></p>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif ?>
                            </div>
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
        </div>
<?php get_footer(); ?>