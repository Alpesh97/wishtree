<?php
/*
Template Name: HVAC
*/

 get_header();
 ?>
<div class="hvac-page">
    <section class="hvac-banner" style="background-image:url(<?php echo get_field('main_background_image'); ?>)">
        <h1>HVAC</h1>
    </section>
    <section class="trusted-client service-pages container">
        <div class="row">
            <div class="client-logos">
                <div class="hidden-xs">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-full.png" title="Our Clients" />
                </div>
                <div class="visible-xs">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-4.png" title="Our Clients" />
                </div>
            </div>
        </div>
    </section>
    <section class="solutions">
        <div class="container">
            <div class="solutions-inner">
                <h2><?php echo get_field("solutions_heading"); ?></h2>
            </div>
            
            <?php if (have_rows('solutions_solutions_grid')): ?>                
                <div class="solutions-grid-wrapper">
                    <?php while (have_rows('solutions_solutions_grid')): the_row(); ?>                        
                    <div class="solutions-grid">
                        <div class="solutions-grid-image">
                            <a href="<?php echo get_sub_field("link"); ?>">
                                <img src="<?php echo get_sub_field("image"); ?>" title="<?php echo get_sub_field("title"); ?>">
                            </a>
                        </div>
                        <h3><?php echo get_sub_field("title"); ?></h3>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>           
        </div>
    </section>
    <section class="clientele-list">
        <div class="container">
            <div class="clientele-list-inner">
                <h2><?php echo get_field("clientele_heading"); ?></h2>
                
                <?php if (have_rows('clientele_clientele_grid')): ?>                
                    <div class="client-list-wrapper">
                        <?php while (have_rows('clientele_clientele_grid')): the_row(); ?>
                            <div class="hvac-client">
                                <div class="hvac-client-image">
                                    <i>
                                        <img src="<?php echo get_sub_field("image"); ?>">
                                    </i>
                                </div>
                                <div class="hvac-client-content">
                                    <h3><?php echo get_sub_field("title"); ?></h3>
                                    <?php echo the_sub_field("content"); ?>
                                </div>
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