<?php get_header(); ?>
<?php 
function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= ' <a href="'. get_permalink($post->ID) . '" class="btn blog-read-btn">Read More</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );
?>
<section class="blog-inner blog-page search-page-blog">
<div class="blog-container">
    <div class="blog-left-col">
        <div class="blog-item-wrpper">
            <div class="blog-main">

                

                <?php 

                if ( have_posts() ) { 

                    while ( have_posts() ) : the_post();

                ?>

                <div class="blog-post blog-item">

                    <h2 class="blog-post-title"><?php the_title(); ?></h2>

                    <!-- <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p> -->

                    <?php the_excerpt(); ?>

                </div><!-- /.blog-post -->

                <?php

                    endwhile;

                }
                else{
                    ?>
                    
                        <h2 class="blog-post-title">No result found</h2>
                    
                    <?php
                } 

                ?>



                <nav>

                    <ul class="pager navigation-blog">

                        <li class="prev-blog"><?php next_posts_link('Previous'); ?></li>

                        <li class="next-blog"><?php previous_posts_link('Next'); ?></li>

                    </ul>

                </nav>



            </div><!-- /.blog-main -->
        </div>
    </div>
    <div class="blog-right-col">
        <?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
</div>
</section>
<?php get_footer(); ?>