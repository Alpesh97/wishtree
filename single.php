<?php
/* Template Name: Blog */
get_header();
?>
<div class="blog-page blog-detail-page">
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
        <div class="blog-container">
            <div class="blog-left-col">
                <div class="blog-item-wrpper">
                    <?php 
                    if ( have_posts() ):
                        while ( have_posts() ) : the_post();
                    ?>
                    <div class="blog-item">
                        <h1>
                            <?php echo get_the_title(); ?>
                        </h1>
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
                        <?php echo the_content(); ?>
                        <div class="social-share clearfix">
                            <div class="title-block">
                                <h2>Please Share This</h2>
                            </div>
                            <ul class="social-share-buttons">
                                <li class="share-twitter">
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>" target="_blank">
                                        <span class="fa fa-twitter"></span>
                                        <span class="social-share-button-text">Tweet</span>
                                    </a>
                                </li>
                                <li class="share-facebook">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
                                        <span class="fa fa-facebook"></span>
                                        <span class="social-share-button-text">Like</span>
                                    </a>
                                </li>
                                <!-- <li class="share-googleplus">
                                    <a href="#">
                                        <span class="fa fa-google-plus"></span>
                                        <span class="social-share-button-text">Plus one</span>
                                    </a>
                                </li> -->
                                <li class="share-linkedin">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank">
                                        <span class="fa fa-linkedin"></span>
                                        <span class="social-share-button-text">Share</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navigation-blog">
                            <div class="prev-blog">                                
                                <?php previous_post_link( '%link', 'Previous Post' ); ?>
                            </div>
                            <div class="next-blog">                                
                                <?php next_post_link( '%link', 'Next Post' ); ?>
                            </div>
                            <!-- <div class="next-blog">
                                <a href="#" target=_blank>
                                    <span class="fa fa-chevron-right"></span>
                                    Inbound Marketing VS Outbound Marketing. Which one is best for you?
                                </a>
                            </div> -->
                        </div>
                        <!-- <div class="related-posts">
                            <div class="title-block">
                                <h2>Related Posts</h2>
                            </div>
                            <ul class="related-post-items">
                                <li class="post">
                                    <article class="related-post">    
                                        <a href="#" class="related-post-thumb"></a>
                                        <div class="post-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/related-post.jpg');"></div>     
                                        <div class="related-post-content" style="">
                                            <h4 class="related-post-title">
                                                MacOS Sierra: Review
                                            </h4>
                                            <div class="related-post-excerpt">
                                                <p>Apple recently changed it's iPhone and Mac operating system bidding a Goodbye to Mac OS…</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li class="post">
                                    <article class="related-post">    
                                        <a href="#" class="related-post-thumb"></a>
                                        <div class="post-image"></div>      
                                        <div class="related-post-content" style="">
                                            <h4 class="related-post-title">
                                                Remote Working: Is it Good for a Startup?
                                            </h4>
                                            <div class="related-post-excerpt">
                                                <p>There has been a widespread increase in Internet usage in 2017. A Digital Report: 2018…</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li class="post">
                                    <article class="related-post">    
                                        <a href="#" class="related-post-thumb"></a>
                                        <div class="post-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/related-post.jpg');"></div>     
                                        <div class="related-post-content" style="">
                                            <h4 class="related-post-title">
                                            A Lot Can Happen Over Colours!  Understanding the Colour Psychology of the Visitors of Your Website
                                            </h4>
                                            <div class="related-post-excerpt">
                                                <p>When a consumer interacts with a product, colour is the first thing that comes to his notice…</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div> -->
                    </div>                    
                    <?php 
                        endwhile;
                    endif;
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