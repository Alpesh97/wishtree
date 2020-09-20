<?php /* Template Name: 404 */ ?>
<?php get_header(); ?>
<section class="no-page-found">
    <div class="container">
        <h1 class="main-title">404</h1>
        <p class="discription">Page not found</p>
        <h2><span>Oops!</span> That page can’t be found.</h2>
        <p class="search-again">It looks like nothing was found at this location.</p>
        <a href="<?php echo get_site_url(); ?>" title="Go To Homepage" class="btn-secondary btn-black"><em>go to homepage</em><span></span></a>
    </div> 
    </section>
<?php get_footer(); ?>