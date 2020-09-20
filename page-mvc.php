<?php
/*
Template Name: MVC
*/


get_header();
?>
<div class="mvc-page">
    <section class="mvc-header-section">
    <div class="container">        
        <?php if(get_field("mvp_main_heading")): ?>
            <h1><?php echo get_field("mvp_main_heading"); ?></h1>
        <?php endif; ?>        

        <?php if(get_field("mvp_sub_description")): ?>
            <?php the_field("mvp_sub_description"); ?>
        <?php endif; ?>

        <?php if(get_field("mvp_infographic_image")): ?>
            <img src="<?php echo get_field("mvp_infographic_image"); ?>" alt="<?php echo get_field("mvp_main_heading"); ?>"/>
        <?php endif; ?>
    </div>
    </section>
    <section class="mvc-process-section">
    <div class="container">
        
        <?php if(get_field("our_process_main_heading")): ?>
            <h2><?php echo get_field("our_process_main_heading"); ?></h2>
        <?php endif; ?>

        <?php if(get_field("our_process_sub_description")): ?>
            <?php echo the_field("our_process_sub_description"); ?>
        <?php endif; ?>

        <?php if(get_field("our_process_image")): ?>
            <img src="<?php echo get_field("our_process_image"); ?>" alt="<?php echo get_field("our_process_main_heading"); ?>"/>
        <?php endif; ?>
    </div>
    </section>
    <section class="what-can-we-do-section">
        <div class="container">
            <?php if(get_field("what_can_we_do_heading")): ?>
                <h2><?php echo get_field("what_can_we_do_heading"); ?></h2>
            <?php endif; ?>

            <?php if(get_field("what_can_we_do_sub_description")): ?>
                <?php the_field("what_can_we_do_sub_description"); ?>
            <?php endif; ?>

            <div class="what-can-do-grid-outer">

                <?php 
                if (have_rows('what_can_we_do_experience_grid')):
                    while (have_rows('what_can_we_do_experience_grid')): the_row();
                        ?>
                        <div class="what-can-do-grid">
                            <?php if(get_sub_field("image")): ?>
                                <img src="<?php echo get_sub_field("image"); ?>" alt=""/>
                            <?php endif; ?>

                            <?php if(get_sub_field("heading")): ?>
                                <h3><?php echo get_sub_field("heading"); ?></h3>
                            <?php endif; ?>

                            <?php if(get_sub_field("description")): ?>
                                <?php the_sub_field("description"); ?>
                            <?php endif; ?>
                        </div>
                        <?php 
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="mvc-work-section">
        <div class="mvc-work-bg" style="background-image:url(<?php echo get_field("mvp_work_background_image"); ?>)">
            <div class="mvc-work-content">
                <?php if(get_field("mvp_work_heading")): ?>
                    <h2><?php echo get_field("mvp_work_heading"); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="mvc-experience">
        <div class="container">
            <?php if(get_field("experience_heading")): ?>
                <h2><?php echo get_field("experience_heading"); ?></h2>
            <?php endif; ?>

            <?php if(get_field("experience_sub_description")): ?>
                <?php the_field("experience_sub_description"); ?>
            <?php endif; ?>
            <div class="experience-grid-outer">

                <?php 
                if (have_rows('experience_experience_grid')):
                    while (have_rows('experience_experience_grid')): the_row();
                        ?>
                        <div class="experience-grid">
                            <?php if(get_sub_field("image")): ?>
                                <img src="<?php echo get_sub_field("image"); ?>" alt=""/>
                            <?php endif; ?>

                            <?php if(get_sub_field("heading")): ?>
                                <h3><?php echo get_sub_field("heading"); ?></h3>
                            <?php endif; ?>

                            <?php if(get_sub_field("sub_heading")): ?>
                                <h4><?php echo get_sub_field("sub_heading"); ?></h4>
                            <?php endif; ?>

                            <?php if(get_sub_field("description")): ?>
                                <?php the_sub_field("description"); ?>
                            <?php endif; ?>
                        </div>
                        <?php 
                    endwhile;
                endif;
                ?>                
            </div>
        </div>
    </section>
</div>
<?php 
get_footer();
?>