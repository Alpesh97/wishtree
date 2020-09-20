<?php
/*
Template Name: HVAC Sub Page
*/

 get_header();
 ?>
<div class="hvac-page-sbupage">
    <div class="container">
        <div class="hvac-subage-intro-section">
            <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
            ?>
            <div class="hvac-subage-intro-image">
                 <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="hvac-subage-intro-content">
                <h1><?php echo get_the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php 
             endwhile;
             endif; 
            ?>
        </div>
        <?php 
            $solution_content = get_field('solution_content');
            $solution_title = get_field('solution_title');
            $benefit_content = get_field('realized_benefits_content');
            $benefit_title = get_field('realized_benefits__title');
            if($solution_content || $benefit_content):
        ?>
        <div class="hvac-subpage-solution-section">
            <div class="hvac-subpage-solution-wrapper">
                <?php if($solution_content): ?>
                <div class="hvac-subpage-solution-grid">
                    <?php if($solution_title): ?><h2><?php echo $solution_title; ?></h2><?php endif; ?>
                    <?php echo $solution_content; ?>
                </div>
                <?php endif; ?>
                <?php if($benefit_content): ?>
                <div class="hvac-subpage-solution-grid">
                    <?php if($benefit_title): ?><h2><?php echo $benefit_title; ?></h2><?php endif; ?>
                    <?php echo $benefit_content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
?>