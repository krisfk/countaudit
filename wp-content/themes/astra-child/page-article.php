<?php
/**
 * Template Name: Article page
 * Template Post Type: page
 **/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="main-banner">



    <div class="position-absolute top-0 start-0 w-100 h-100">


        <div class="container title-container">
            <div>
                <h2 class="txt"><?php echo get_the_title();?></h2><?php //echo get_field('title_txt');?>
            </div>
        </div>

    </div>


    <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">


</div>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <div class="article-content">
        <?php astra_content_page_loop(); ?>
    </div>
    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<style type="text/css">
.page .entry-header {
    display: none;
}

.elementor-widget-table-of-contents {
    display: none;
}

.article-content h1 {
    color: #363e51;
}

.article-content h2 {
    color: #363e51;
}

.article-content .elementor-inline-items .elementor-icon-list-text {
    color: #363e51 !important;

}

.elementor a {
    color: #363e51 !important;
    text-decoration: underline;
    font-weight: bold;

}


.article-content .elementor-icon-list-icon {
    margin: 0 0.5rem 0 0;
}

.article-content h3 {
    color: #363e51;
}

.article-content .elementor-post-info {
    display: none !important;
}

.article-content .elementor-icon-list-item:not(:last-child):after {
    content: "";
    height: 15%;
    border-color: #363e51 !important;
}
</style>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>