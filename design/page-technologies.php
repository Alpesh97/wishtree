<?php
/*
 Template Name: Technology Design
 */


get_header();
?>

<div class="service-page technology-page">
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
                                <h1><?php the_field('technology_title'); ?></h1>
                                <p><?php the_field('technology_content'); ?></p>
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
                    <div class="hidden-xs">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-full.png"
                            title="Our Clients" />
                    </div>
                    <div class="visible-xs">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-4.png"
                            title="Our Clients" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer-section">
        <div class="company-inputs container">
            <div class="comapny-title">
                <h3>Technology Expertise</h3>
            </div>
            <div class="row">
                <div class="company-inputs-data clearfix">
                    <?php 
                    $technologyTerms = get_terms( array(
                        'taxonomy' => 'technology_cat',
                        'hide_empty' => false,
                        'orderby' => 'id', 
                        'order' => 'ASC'
                    ) );
                    if(!empty($technologyTerms)):
                        foreach($technologyTerms as $technologyTerm):
                            $technologyLink = get_field('read_more_link', $technologyTerm->taxonomy . '_' . $technologyTerm->term_id);
                            $technologyContent = get_field('technology_tax_content', $technologyTerm->taxonomy . '_' . $technologyTerm->term_id);
                            ?>
                            <div class="technologies-data clearfix">
                                <h4><?php echo $technologyTerm->name; ?></h4>
                                <p><?php echo $technologyTerm->description; ?></p>
                                <?php if($technologyLink): ?>
                                    <a href="<?php echo $technologyLink; ?>" class="learn-more-link">
                                        Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                                <div class="list-of-technologies-wrapper">
                                    <?php if($technologyContent): ?>
                                        <h3><?php echo $technologyContent; ?></h3>
                                    <?php endif; ?>
                                    <?php 
                                    $args = array(
                                    'post_type' => 'technologies',
                                    'tax_query' => array(
                                        array(
                                        'taxonomy' => 'technology_cat',
                                        'field' => 'term_id',
                                        'terms' => $technologyTerm->term_id
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
                            <?php
                        endforeach;
                    endif;                    
                    ?>
                    <!-- <div class="technologies-data clearfix">
                        <h4>Front End</h4>
                        <p>OpenXcell is a front end development company with skilled professionals delivering smart user
                            experience by providing cutting-edge front end</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Front End Technologies</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="https://www.openxcell.com/reactjs-development"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/react-js.png"
                                            class="img-responsive" title="React JS"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">React JS</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/angular-js.png"
                                            class="img-responsive" title="Angular JS"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Angular JS</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/viu-js.png"
                                            class="img-responsive" title="Vue JS"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Vue JS</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a
                                        href="https://www.openxcell.com/swift-app-development"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/swift-app.png"
                                            class="img-responsive" title="Swift App"></a></div>
                                <div class="technology-name">
                                    <h5><a href="https://www.openxcell.com/swift-app-development">Swift App</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a
                                        href="https://www.openxcell.com/react-native-development"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/react-native.png"
                                            class="img-responsive" title="React Native"></a></div>
                                <div class="technology-name">
                                    <h5><a href="https://www.openxcell.com/react-native-development">React Native</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a
                                        href="https://www.openxcell.com/kotlin-app-development"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/kotlin.png"
                                            class="img-responsive" title="Kotlin App"></a></div>
                                <div class="technology-name">
                                    <h5><a href="https://www.openxcell.com/kotlin-app-development">Kotlin App</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Backend</h4>
                        <p>Each business has its own unique objective and strategy. We use different Web technologies to
                            respond to the unique need of each client.</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Backend Technologies</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/php.png"
                                            class="img-responsive" title="PHP"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">PHP</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/dotnet.png"
                                            class="img-responsive" title=".Net"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">.Net</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="
                                        <?php echo get_template_directory_uri(); ?>/assets/images/html-css.png"
                                        class="img-responsive" title="HTML5 &amp; CSS3"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">
                                            &amp; CSS3</a></h5>
                                </div>
                            </div>
                            <div class=" single-tech">
                                            <div class="technology-img"><a href="#"><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/javascript.png"
                                                        class="img-responsive" title="Javascripts"></a></div>
                                            <div class="technology-name">
                                                <h5><a href="#">Javascripts</a>
                                                </h5>
                                            </div>
                                </div>
                                <div class="single-tech">
                                    <div class="technology-img"><a href="#"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/java.png"
                                                class="img-responsive" title="Java"></a></div>
                                    <div class="technology-name">
                                        <h5><a href="#">Java</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-tech">
                                    <div class="technology-img"><a href="#"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/golang.png"
                                                class="img-responsive" title="Golang"></a></div>
                                    <div class="technology-name">
                                        <h5><a href="#">Golang</a></h5>
                                    </div>
                                </div>
                                <div class="single-tech">
                                    <div class="technology-img"><a href="#"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/node-js.png"
                                                class="img-responsive" title="Node JS"></a></div>
                                    <div class="technology-name">
                                        <h5><a href="#">Node JS</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Frameworks</h4>
                        <p>Our competent and highly skilled programmers use popular frameworks to create an
                            effective
                            Web solution that meets your business objectives.</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Technologies of Frameworks</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.png"
                                            class="img-responsive" title="WordPress"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">WordPress</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/drupal.png"
                                            class="img-responsive" title="Drupal"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Drupal</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/cakephp.png"
                                            class="img-responsive" title="CakePHP"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">CakePHP</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/codeingitor.png"
                                            class="img-responsive" title="Codeigniter"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Codeigniter</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/laravel.png"
                                            class="img-responsive" title="Laravel"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Laravel</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/django.png"
                                            class="img-responsive" title="Django"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Django</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/ruby-on-rails.png"
                                            class="img-responsive" title="Ruby on Rails"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Ruby on Rails</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/ionic.png"
                                            class="img-responsive" title="Ionic"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Ionic</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Platforms</h4>
                        <p>Our engineers work on world’s best eCommerce platforms to build a secure and seamless
                            eCommerce website that help our e-store owners generate revenue.</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Technologies on Platfomrs </h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/magento.png"
                                            class="img-responsive" title="Magento"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Magento</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce.png"
                                            class="img-responsive" title="WooCommerce"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">WooCommerce</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/hybris.png"
                                            class="img-responsive" title="Hybris"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Hybris</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/big_commerce.png"
                                            class="img-responsive" title="BigCommerce"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">BigCommerce</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.png"
                                            class="img-responsive" title="Shopify"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Shopify</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce.png"
                                            class="img-responsive" title="Salesforce"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Salesforce</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Database</h4>
                        <p>Our DBAs has deep technical knowledge which empowers us to help our clients improve their
                            current database management operations.</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Database Technologies</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/mysql.png"
                                            class="img-responsive" title="MySQL"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">MySQL</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/no-sql.png"
                                            class="img-responsive" title="NoSQL"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">NoSQL</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle.png"
                                            class="img-responsive" title="Oracle"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Oracle</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/dynamodb.png"
                                            class="img-responsive" title="DynamoDB"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">DynamoDB</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/mongo-db.png"
                                            class="img-responsive" title="MongoDB"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">MongoDB</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/firebase.png"
                                            class="img-responsive" title="Firebase"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Firebase</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/firestore.png"
                                            class="img-responsive" title="FireStore"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">FireStore</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Mobile Apps</h4>
                        <p>We made sure that we have a strong web development team to deliver incredible web and
                            mobile
                            apps that performs equally across all platforms.</p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Mobile App Technologies</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/iOS.png"
                                            class="img-responsive" title="iOS"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">iOS</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/android.png"
                                            class="img-responsive" title="Android"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Android</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/hybrid.png"
                                            class="img-responsive" title="Hybrid"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Hybrid</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="technologies-data clearfix">
                        <h4>Blockchains</h4>
                        <p>OpenXcell is at the forefront of the Blockchain Development Services in India &amp; USA.
                        </p>
                        <a href="#" class="learn-more-link">
                            Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        <div class="list-of-technologies-wrapper">
                            <h3>Blockchain Technologies</h3>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/ethereum.png"
                                            class="img-responsive" title="Ethereum"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Ethereum</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/hyperledger.png"
                                            class="img-responsive" title="Hyperledger"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Hyperledger</a></h5>
                                </div>
                            </div>
                            <div class="single-tech">
                                <div class="technology-img"><a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/solidity.png"
                                            class="img-responsive" title="Solidity"></a></div>
                                <div class="technology-name">
                                    <h5><a href="#">Solidity</a></h5>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
    </section>
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