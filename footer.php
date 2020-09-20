</div><!--End of wrapper-->
</main>
<footer>
    <div class="cotainer">
        
            <div class="footer-request-roposal">                
                <div class="quote-footer">
                    <div class="quote-footer-in">
                        <?php if(!get_field("not_display_bottom_form")): ?>
                        <div class="container">
                            <div class="quote-footer-form">
                                <div class="quote-footer-head">
                                    <h4><?php echo get_field("request_title", "option"); ?></h4>
                                    <p class="confidentail_text_footer"><?php echo get_field("request_confidential_text", "option"); ?></p>
                                </div>
                                <div class="safe-light-footer">
                                    <p class="close-bt-footer">X</p>
                                    <p><?php echo get_field("request_confidential", "option"); ?></p>
                                </div>
                                <div class="footer-quote-form">                                    
                                    <?php echo the_field('add_shortcode', 'option'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>                
            </div>
        
        <div class="footer-submenu">
            <div class="container">
                <div class="row">
                    <div class="footer-forum-menu">
                        <div class="menu-footer-sub-menu-container">
                            <?php 
                                wp_nav_menu( array( 'menu' => 'Footer1' ,
                                    'container'  => '',
                                    'container_class' => ''
                                ));
                            ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-column container">
            <div class="footer-middle-section footer-menus">
                <?php dynamic_sidebar('about-sidebar'); ?>                  
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom-section clearfix">
                <div class="copyright-text col-3">
                    <?php if(get_field('copyright_text', 'option')): ?>
                        <p><?php echo get_field('copyright_text', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="fooer-bottom-menu col-3">
                    <?php 
                        wp_nav_menu( array( 'menu' => 'Footer bar Menu' ,
                            'container'  => '',
                            'container_class' => ''
                        ));
                    ?>

                </div>
                <div class="social-menu col-3">
					<script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script> <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="1" data-height="50" data-darkbg="1" data-clutchcompany-id="494384"></div>
                </div>

            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>