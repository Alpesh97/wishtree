<?php /*get_header(); ?>
<div class="col-sm-8 blog-main">
    
    <?php 
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
    </div><!-- /.blog-post -->
    <?php
        endwhile;
    } 
    ?>

    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->
<?php get_footer();*/ ?>

<?php
/*
Template Name: Service
*/
get_header();
?>

<div class="service-page">
    <section>
                <div class="section-1">
                    <div class="row">
                        <div class="breadcrumb">
                            <div class="container">
                                <p id="breadcrumbs" class="breadcrumbs">
                                    <?php bcn_display(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="top-banner">
                            <div class="container">
                                <div class="quote-section-wrapper">
                                    <div class="quote-section-1">
                                        <?php 
                                        $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );           

                                        ?>
                                        <h1><?php 
                                            if(get_field('technology_tax_detail_title', $term->taxonomy . '_' . $term->term_id)){
                                                echo get_field('technology_tax_detail_title', $term->taxonomy . '_' . $term->term_id);
                                            }
                                            else{
                                                echo $term->name; 
                                            }
                                            
                                            ?>
                                        </h1>
                                        <p><?php echo $term->description; ?></p>
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

                <?php 
                if(get_field('technology_tax_content', $term->taxonomy . '_' . $term->term_id)):
                ?>
                <div class="cms-data container">

                    <div class="row">

                        <div class="cms-content px-15">

                            <?php echo get_field('technology_tax_content', $term->taxonomy . '_' . $term->term_id); ?>

                        </div>

                    </div>

                </div>
                <?php 
                endif;
                ?>
            </section>
            <!-- <section class="offer-section">
                <div class="company-inputs container">
                    <div class="comapny-title">
                        <h2><?php echo $term->name; ?> Expertise</h2>
                    </div>
                    <div class="row">
                        <div class="company-inputs-data clearfix">
                            <div class="technologies-data clearfix">
                                <div class="list-of-technologies-wrapper">                    
                                    <?php 
                                    $args = array(
                                    'post_type' => 'technologies',
                                    'tax_query' => array(
                                        array(
                                        'taxonomy' => 'technology_cat',
                                        'field' => 'term_id',
                                        'terms' => $term->term_id
                                         )
                                      )
                                    );
                                    $query = new WP_Query( $args );
                                    if($query->have_posts()) : 
                                        while($query->have_posts()) : $query->the_post(); 
                                    ?>
                                        <div class="single-tech">
                                            <div class="technology-img">
                                                <?php if (has_post_thumbnail( get_the_ID() ) ): 
                                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );            
                                                ?>
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
                                                </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="technology-name">
                                                <h5><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                            </div>
                                        </div> 
                                    <?php 
                                        endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->  
            <section class="technology-listing">
                <div class="container">
                    <h2><?php echo $term->name; ?> Expertise</h2>
                    <div class="company-inputs-data">
                     <?php 
                        $args = array(
                        'post_type' => 'technologies',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'technology_cat',
                            'field' => 'term_id',
                            'terms' => $term->term_id
                             )
                          )
                        );
                        $query = new WP_Query( $args );
                        if($query->have_posts()) : 
                            while($query->have_posts()) : $query->the_post(); 
                            ?>
                            <div class="company-data">
                                
                                   <?php if (has_post_thumbnail( get_the_ID() ) ): 
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );            
                                    ?>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
                                    </a>
                                    <?php endif; ?>
                                
                                <h5><?php echo get_the_title(); ?></h5>
                                <div class="cat-content"><?php echo get_field("sub_heading"); ?></div> 
                                <a href="<?php echo get_permalink(); ?>" class="learn-more-link">
                                    Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <?php 
                            endwhile;
                        endif;
                        ?>
                    
                    <!-- <div class="company-data">
                        <p>
                            <img src="https://www.openxcell.com/wp-content/uploads/2019/02/ic-angularjs.jpg" alt="">
                        </p>
                        <h5>Angular JS</h5>
                        <p>Get scalable and user-friendly applications developed using AngularJS framework. Making optimum use of AngularJS Services, we have pioneered in developing interactive web applications and responsive websites.</p> 
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="company-data">
                        <p>
                            <img src="https://www.openxcell.com/wp-content/uploads/2019/02/ic-vuejs.jpg" alt="">
                        </p>
                        <h5>Vue JS</h5>
                        <p>As a VueJS Development Company, we develop highly optimized, robust and real-time apps using VueJS Framework.</p> 
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="company-data">
                        <p>
                            <img src="https://www.openxcell.com/wp-content/uploads/2019/02/ic-swift.jpg" alt="">
                        </p>
                        <h5>Swift App Development</h5>
                        <p>Get associated with one of the best swift iOS app development companies to stay ahead of the curve and provide the seamless user experience.</p> 
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="company-data">
                        <p>
                            <img src="https://www.openxcell.com/wp-content/uploads/2019/02/ic-reactnative.jpg" alt="reactnative">
                        </p>
                        <h5>React Native</h5>
                        <p>Looking for top react native development companies in India, USA? Openxcell provide best react native development services with high functionality business apps.</p> 
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="company-data">
                        <p>
                            <img src="https://www.openxcell.com/wp-content/uploads/2019/02/ic-kotlin.jpg" alt="kotlin">
                        </p>
                        <h5>Kotlin App</h5>
                        <p>Partner with the Kotlin for Android Developers expert in Kotlin Android Development; and having experience of building tailor-made and user-friendly solutions.</p> 
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div> -->
                </div>
                </div>    
            </section>
            
            <?php if(get_field('is_testimonial', $term->taxonomy . '_' . $term->term_id)): ?>

                <section class="testimonial-wrapper">

                    <div class="testimonial-section container">

                        <div class="row">

                            <div class="testimonial-title">

                                <h4>Client Testimonials</h4>

                            </div>

                            <div class="testimonials clearfix">

                                <div class="left-testimonial">

                                    <?php 

                                        $leftTestimonial = get_field('left_testimonial', $term->taxonomy . '_' . $term->term_id); 

                                    ?>

                                    <p>"<?php echo $leftTestimonial->post_content; ?>"</p>

                                    <h5><?php echo get_the_title($leftTestimonial->ID); ?>,</h5>

                                    <h6><?php echo get_field("designation",$leftTestimonial->ID); ?>, <?php echo get_field("company_name",$leftTestimonial->ID); ?></h6>

                                    <?php 

                                    $clientImage = get_field("client_image", $leftTestimonial->ID); 

                                    if($clientImage):

                                    ?>                                    

                                        <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="" class="testimonial_author_image">

                                    <?php endif; ?>                                    

                                </div>

                                <div class="right-testimonial">

                                    <?php 

                                        $rightTestimonial = get_field('right_testimonial', $term->taxonomy . '_' . $term->term_id); 

                                    ?>

                                    <p>"<?php echo $rightTestimonial->post_content; ?>"</p>

                                    <h5><?php echo get_the_title($rightTestimonial->ID); ?>,</h5>

                                    <h6><?php echo get_field("designation",$rightTestimonial->ID); ?>, <?php echo get_field("company_name",$rightTestimonial->ID); ?></h6>

                                    <?php 

                                    $clientImage = get_field("client_image", $rightTestimonial->ID); 

                                    if($clientImage):

                                    ?>                                    

                                        <img src="<?php echo $clientImage['sizes']['thumbnail']; ?>" alt="" class="testimonial_author_image">

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="seemore-testimonial">

                                <a href="<?php echo get_permalink(360); ?>">View All Testimonials</a>

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

<?php
get_footer();
?>