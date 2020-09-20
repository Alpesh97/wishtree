<?php
/* Template Name: Blog */
get_header();
?>
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
        <h1>Blog</h1>
        <div class="blog-container">
            <div class="blog-left-col">
                <div class="blog-item-wrpper">

                    <?php                    
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                     $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'post_status'=> 'publish',
                        'paged' => $paged,
                        );
                        $query = new WP_Query( $args );
                        if($query->have_posts()) : 
                            while($query->have_posts()) : $query->the_post(); 
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
                <div class="blog-pagination">
                <?php
                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $query->max_num_pages
                    ) );
                    ?>
                </div>    
            </div>
            <div class="blog-right-col">
                <?php dynamic_sidebar('blog-sidebar'); ?>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>