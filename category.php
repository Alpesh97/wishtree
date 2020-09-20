<?php get_header(); ?>

<div class="blog-page">
    <section>
        <div class="breadcrumb">
            <div class="container">
                <p id="breadcrumbs" class="breadcrumbs">
                    <?php bcn_display(); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="blog-inner">
        <h1><?php single_cat_title(); ?></h1>
        <div class="blog-container">
            <div class="blog-left-col">
                <div class="blog-item-wrpper">

                    <?php                    
                    if ( have_posts() ): 
                        while ( have_posts() ) : the_post(); 
                        ?>
                        <div class="blog-item">
                            <h2>
                                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            </h2>
                            <ul class="blog-timing">
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <?php echo get_the_date(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <?php echo get_the_author_link(); ?> 
                                </li>
                                <li>
                                    <i class="fa fa-folder-o"></i>
                                    <?php echo @get_the_category()[0]->name; ?>
                                </li>
                            </ul>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink(); ?>" class="btn blog-read-btn">Read More</a>
                        </div>
                        <?php 
                            endwhile;
                        endif;
                        ?>                        
                </div>
                <nav>
                    <ul class="pager">
                        <li><?php next_posts_link('Previous'); ?></li>
                        <li><?php previous_posts_link('Next'); ?></li>
                    </ul>
                </nav>
            </div>
            <div class="blog-right-col">
                <?php dynamic_sidebar('blog-sidebar'); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>