function header_height() {
    var padding_top = jQuery(".site-header").innerHeight();
    jQuery("main").css("padding-top", padding_top);
}

equalheight = function(container) {

    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        jQueryel,
        topPosition = 0;
    jQuery(container).each(function() {

        jQueryel = jQuery(this);
        jQuery(jQueryel).height('auto');
        topPostion = jQueryel.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = jQueryel.height();
            rowDivs.push(jQueryel);
        } else {
            rowDivs.push(jQueryel);
            currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

function calcLeftPosition(){
    if(jQuery(window).width() > 1200){
        jQuery(".max-mega-menu .has-mega-menu").each(function(){
            var container_offset = jQuery(".site-header .container").offset().left;
            var item_offset = jQuery(this).offset().left;
            console.log("container offset:"+container_offset);
            console.log("item offset:"+item_offset);
            var menu_position = item_offset - container_offset;
            //console.log(jQuery(this).find(".sub-menu").indexOf());
            jQuery(this).find(".sub-menu").eq(0).css("left",-menu_position);    
        });
    }
    else {
        jQuery(".has-mega-menu .sub-menu").css("left","auto");
    }
    
    
}

function technology_block_height() {
    if (jQuery(window).innerWidth()>=768) {
        if (jQuery('.wishtree-technologies-section .technologies-content-wrapper').length) {
            var block_h = jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block.active').innerHeight();
            jQuery('.wishtree-technologies-section .technologies-content-wrapper').css('height',block_h);
        }
        jQuery('.wishtree-technologies-section .technologies-list-wrapper>ul>li').removeClass('active');
        jQuery('.wishtree-technologies-section .technologies-list-wrapper>ul>li').first().addClass('active');
        var data_id = jQuery('.wishtree-technologies-section .technologies-list-wrapper>ul>li.active').attr('data-id');
        jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block').removeClass('active');
        jQuery('#' + data_id).addClass('active');
    }
    else{
        jQuery('.wishtree-technologies-section .technologies-content-wrapper').css('height','');   
    }
}
function technology_block_toggle() {
    if (jQuery(window).innerWidth()<=767) {
        if (jQuery('.wishtree-technologies-section .technologies-content-wrapper').length) {   
        jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block').first().find('h3').addClass('active').siblings('.technology-listing-wrapper').slideDown();   jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block h3').unbind('click').on('click',function() {
                if (jQuery(this).siblings('.technology-listing-wrapper').is(':visible')) {
                    jQuery(this).siblings('.technology-listing-wrapper').slideUp();
                    jQuery(this).removeClass('active');
                }
                else{
                    jQuery(this).parents('.technologies-content-block').siblings('.technologies-content-block').find('h3').removeClass('active');
                    jQuery(this).addClass('active');
                    jQuery(this).parents('.technologies-content-block').siblings('.technologies-content-block').find('.technology-listing-wrapper').slideUp();
                    jQuery(this).siblings('.technology-listing-wrapper').stop(true,true).slideDown();
                }
            });
        }
    }
    else{
        jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block .technology-listing-wrapper').css('display','');   
        jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block h3').removeClass('active');
    }
}

jQuery(document).ready(function() {
    //calcLeftPosition();
    jQuery("#searchform #s").attr("placeholder", "Search");
    equalheight('.wishtree-service-section .service-block-wrapper .service-block-column .service-block-content-wrapper h3');
    equalheight('.wishtree-service-section .service-block-wrapper .service-block-column .service-block-inner-column');
    equalheight('.blog-detail-page .related-post .related-post-content');
    equalheight('.technology-listing .company-inputs-data .company-data .cat-content');
    equalheight('.testimonials-page .testimonials-in .testimonial');
    header_height();
    jQuery(".rev_slider").slick({
        slideToShow: 1,
        slideToScroll: 1,
        dots: true
    });
    // technologies slider start
    jQuery('.technologies-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.nav-link-tech',
        autoplay: true,
    });
    jQuery('.nav-link-tech').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.technologies-slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });
    // technologies slider end
    // success storie slider start
    jQuery('.success-list-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.stories-logo-slider',
        autoplay: true,
    });
    jQuery('.stories-logo-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.success-list-slider',
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });
    jQuery('.quote-form input').not('input[type="submit"]').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.quote-form input').not('input[type="submit"]').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    jQuery('.quote-form textarea').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.quote-form textarea').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    jQuery('.footer-quote-form input').not('input[type="submit"]').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.footer-quote-form input').not('input[type="submit"]').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
      
    jQuery('.footer-quote-form textarea').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.footer-quote-form textarea').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    jQuery('.footer-quote-form select').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).css('opacity', '1');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.footer-quote-form select').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    /*
    jQuery('.inquiry-now-form input').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.inquiry-now-form input').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    jQuery('.inquiry-now-form textarea').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.inquiry-now-form textarea').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    jQuery('.inquiry-now-form select').on('focusin', function() {
        jQuery(this).parent().parent().find('label').addClass('active');
        jQuery(this).css('opacity', '1');
        jQuery(this).parent().addClass('focused');
    });

    jQuery('.inquiry-now-form select').on('focusout', function() {
        if (!this.value) {
            jQuery(this).parent().parent().find('label').removeClass('active');
            jQuery(this).parent().removeClass('focused');
        }
    });
    */
    // safe and confident modal
    jQuery('.section-1 .quote-form-section-1 .title-heading > p').click(function() {
        jQuery('.safe-light').show();
        jQuery('.safe-light').addClass('safe-light-on');
    });
    jQuery('.close-bt').click(function() {
        jQuery('.safe-light').hide();
        jQuery('.safe-light').removeClass('safe-light-on');
    });
    jQuery('.quote-footer .quote-footer-head p').click(function() {
        jQuery('.safe-light-footer').show();
        jQuery('.safe-light-footer').addClass('safe-light-footer-on');
    });
    jQuery('.close-bt-footer').click(function() {
        jQuery('.safe-light-footer').hide();
        jQuery('.safe-light-footer').removeClass('safe-light-footer-on');
    });
    jQuery('.inquiry-now-form .quote-footer-head p').click(function() {
        jQuery('.safe-light-footer').show();
        jQuery('.safe-light-footer').addClass('safe-light-footer-on');
    });
    jQuery('.close-bt-footer').click(function() {
        jQuery('.safe-light-footer').hide();
        jQuery('.safe-light-footer').removeClass('safe-light-footer-on');
    });
    // search bar js start
    jQuery('.search-box .search-icon').click(function() {
        jQuery(this).parents(".header-wrapper").toggleClass("search-open");
    });
    
    jQuery("#s").blur(function(){ jQuery(".header-wrapper").removeClass("search-open"); });

    // search bar js end
    jQuery(".mega-menu-toggle .toggle-menu").click(function() {
        jQuery(".header-menu-section").toggleClass("menu-open");
        jQuery("html,body").toggleClass("menu-open");
    });
    jQuery(".header-menu-section .main-navigation ul li.has-mega-menu").click(function() {
        jQuery(this).siblings().removeClass("active");
        jQuery(this).toggleClass("active");
    });
    equalheight('.why-gms .why-gms-grid-inner h3');
    
    if(jQuery(window).width() < 961){
        jQuery(".quote-section-wrapper .title-heading").click(function(){
            jQuery(this).siblings(".quote-form").slideToggle(); 
        });
    }    

    jQuery('.testimonial-block-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots:false,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        adaptiveHeight: false,
        infinite: true,
        asNavFor: '.testimonial-block-thumb-slider',
        responsive: [{
            breakpoint: 992,
            settings: {
                autoplay: true,
                focusOnSelect: false,
            }
        }]
    });
    jQuery('.testimonial-block-thumb-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: '.testimonial-block-slider',
        arrows: false,
        dots:false,
        focusOnSelect: true,
        infinite: true,
    });

    technology_block_height();
    technology_block_toggle();

    jQuery('.wishtree-technologies-section .technologies-list-wrapper>ul>li').on('click',function() {
       var data_id = jQuery(this).attr('data-id');
       jQuery('.wishtree-technologies-section .technologies-list-wrapper>ul>li').removeClass('active');
       jQuery(this).addClass('active');
       jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block').removeClass('active');
       jQuery('#' + data_id).addClass('active');
       var block_h = jQuery('.wishtree-technologies-section .technologies-content-wrapper .technologies-content-block.active').innerHeight();
       jQuery('.wishtree-technologies-section .technologies-content-wrapper').css('height',block_h);
    });

});
jQuery(window).resize(function() {
    //calcLeftPosition();
    header_height();
    equalheight('.why-gms .why-gms-grid-inner h3');
    equalheight('.blog-detail-page .related-post .related-post-content');
    equalheight('.testimonials-page .testimonials-in .testimonial');
    equalheight('.technology-listing .company-inputs-data .company-data .cat-content');
    equalheight('.wishtree-service-section .service-block-wrapper .service-block-column .service-block-content-wrapper h3');
    equalheight('.wishtree-service-section .service-block-wrapper .service-block-column .service-block-inner-column');
    technology_block_height();
    technology_block_toggle();
})
jQuery(window).load(function() {
    //calcLeftPosition();
    header_height();
    equalheight('.why-gms .why-gms-grid-inner h3');
    equalheight('.blog-detail-page .related-post .related-post-content');
    equalheight('.testimonials-page .testimonials-in .testimonial');
    equalheight('.technology-listing .company-inputs-data .company-data .cat-content');
})