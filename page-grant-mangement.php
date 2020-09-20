<?php
/*
Template Name: Grant Management System
*/


get_header();
?>
<section class="grant-management-challenge">
    <div class="container">
        <div class="grant-management-wrapper">
            
            <?php if(get_field("gms_challenge_heading")): ?>
                <h1><?php echo get_field("gms_challenge_heading"); ?></h1>
            <?php endif; ?>

            <div class="grant-challenge-inner">
                <div class="grant-challenge-left">
                    <?php if(get_field("gms_challenge_content")): ?>
                        <?php the_field("gms_challenge_content"); ?>
                    <?php endif; ?>
                </div>
                <div class="grant-challenge-right">
                    <?php if(get_field("gms_challenge_image")): ?>
                        <img src="<?php echo get_field("gms_challenge_image"); ?>" alt="" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
<section class="what-is-gms">
    <div class="container">
        <div class="what-is-gms-wrapper">
            
            <?php if(get_field("what_is_gms_heading")): ?>
                <h2><?php echo get_field("what_is_gms_heading"); ?></h2>
            <?php endif; ?>

            <?php if(get_field("what_is_gms_content")): ?>
                <?php echo the_field("what_is_gms_content"); ?>
            <?php endif; ?>

            <?php 
            if( have_rows('what_is_gms_sectors') ): ?>
                <ul class="gms-sector-listing">                
                <?php               
                while ( have_rows('what_is_gms_sectors') ) : the_row();                    
                    ?>
                    <li>
                        <span class="sector-image">
                            <img src="<?php echo get_sub_field("image"); ?>" alt="<?php echo get_sub_field("title"); ?>" />
                        </span>
                        <span class="sector-title"><?php echo get_sub_field("title"); ?></span>
                    </li>
                    <?php
                endwhile;
                ?>
                </ul>
            <?php
            endif;
            ?>            
        </div>
    </div>
</section>
<section class="why-gms">
    <div class="container">
        <div class="why-gms-wrapper">
            <?php if(get_field("why_gms_main_heading")): ?>
                <h2><?php echo get_field("why_gms_main_heading"); ?></h2>
            <?php endif; ?>
            
            <?php 
            if( have_rows('why_gms_grids') ): ?>
                <div class="why-gms-grid-wrapper">
                <?php               
                while ( have_rows('why_gms_grids') ) : the_row();                    
                    ?>
                    <div class="why-gms-grid">
                        <div class="why-gms-grid-inner">
                            <div class="why-gms-image">
                                <img src="<?php echo get_sub_field("image"); ?>" alt="" />
                            </div>
                            <h3><?php echo get_sub_field("heading"); ?></h3>
                            <?php echo the_sub_field("content"); ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
                </div>
            <?php
            endif;
            ?>              
        </div>
    </div>
</section>
<section class="product-features">
    <div class="container">
        <div class="product-features-wrapper">
            <?php if(get_field("product_features_heading")): ?>
                <h2><?php echo get_field("product_features_heading"); ?></h2>
            <?php endif; ?>

            <?php if(get_field("product_features_content")): ?>
                <?php the_field("content"); ?>
            <?php endif; ?>

            <?php if(get_field("product_features_image")): ?>
                <div class="product-feature-diagram">
                    <img src="<?php echo get_field("product_features_image"); ?>" alt="" />
                </div>
            <?php endif; ?>
        </div> 
    </div>
</section>
<section class="gms-config">
    <div class="container">
        <div class="gms-config-wrapper">
            <?php if(get_field("gms_config_main_heading")): ?>
                <h2><?php echo get_field("gms_config_main_heading"); ?></h2>
            <?php endif; ?>
            <?php 
            if( have_rows('gms_config_grids') ): ?>
                <div class="gms-config-grid-wrapper">
                <?php               
                while ( have_rows('gms_config_grids') ) : the_row();                    
                    ?>
                     <div class="gms-config-grid">
                        <div class="gms-config-grid-inner">
                            <div class="gms-config-image">
                                <img src="<?php echo get_sub_field("image"); ?>" alt="" />
                            </div>
                            <h3><?php echo get_sub_field("heading"); ?></h3>
                            <?php echo the_sub_field("content"); ?>
                        </div>
                    </div>                    
                    <?php
                endwhile;
                ?>
                </div>
            <?php
            endif;
            ?>            
        </div>
    </div>    
</section>
<section class="gms-features">
    <div class="container">
        <div class="gms-features-wrapper">
            <?php if(get_field("gms_features_main_heading")): ?>
                <h2><?php echo get_field("gms_features_main_heading"); ?></h2>
            <?php endif; ?>
            <?php 
            if( have_rows('gms_features_grids') ): ?>
                <div class="gms-features-grid-wrapper">
                <?php               
                while ( have_rows('gms_features_grids') ) : the_row();                    
                    ?>
                    <div class="gms-features-grid">
                        <div class="gms-features-grid-inner">
                            <div class="gms-features-image">
                                <img src="<?php echo get_sub_field("image"); ?>" alt="" />
                            </div>
                            <h3><?php echo get_sub_field("heading"); ?></h3>
                            <?php echo the_sub_field("content"); ?>
                        </div>
                    </div>           
                    <?php
                endwhile;
                ?>
                </div>
            <?php
            endif;
            ?>            
        </div>
    </div>    
</section>

<section class="gms-service">
    <?php if(get_field("gms_service_main_heading")): ?>
        <h2><?php echo get_field("gms_service_main_heading"); ?></h2>
    <?php endif; ?>
    <div class="gms-service-wrapper">
        <div class="container">
            <div class="services-inner">
                <?php if(get_field("gms_service_sub_heading")): ?>
                    <h3><?php echo get_field("gms_service_sub_heading"); ?></h3>
                <?php endif; ?>
                <?php if(get_field("gms_service_sub_content")): ?>
                    <?php the_field("gms_service_sub_content"); ?>
                <?php endif; ?>
                <?php 
                if( have_rows('gms_service_grids') ): ?>
                    <div class="gms-service-grid-wrapper">
                    <?php               
                    while ( have_rows('gms_service_grids') ) : the_row();                    
                        ?>
                        <div class="gms-services-grid">
                            <div class="gms-services-grid-inner">
                                <div class="gms-services-image">
                                    <img src="<?php echo get_sub_field("image"); ?>" alt="" />
                                </div>
                                <h3><?php echo get_sub_field("heading"); ?></h3>
                                <?php echo the_sub_field("content"); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    ?>
                    </div>
                <?php
                endif;
                ?>                
            </div>
        </div>
    </div>
    <div class="gms-service-wrapper">
        <div class="container">
            <div class="services-inner">
                <?php if(get_field("gms_support_title")): ?>
                    <h3><?php echo get_field("gms_support_title"); ?></h3>
                <?php endif; ?>
                <?php if(get_field("gms_support_content")): ?>
                    <?php the_field("gms_support_content"); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="services-inner">
        <div class="container">
            <?php if(get_field("gms_personalisation_title")): ?>
                <h3><?php echo get_field("gms_personalisation_title"); ?></h3>
            <?php endif; ?>
            <?php if(get_field("gms_personalisation_content")): ?>
                <?php the_field("gms_personalisation_content"); ?>
            <?php endif; ?>            
        </div>
    </div>
</section>
<?php
get_footer();
?>
<!-- <img src="<?php //echo get_template_directorey_uri(); ?>/assets/images/name-of-image.jpg" alt=""/> -->