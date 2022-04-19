<?php

/*
Template Name: Шаблон контентной страницы
*/
/**
 * The template for displaying all articals
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mega
 */

get_header();
?>

    <!-- start sArticle-->
    <section class="sContent section" id="sArticle">
        <div class="container">
            <a href="<?php echo esc_url(  wp_get_referer() ); ?>">
                <svg class="icon icon-back-arrow ">
                    <use xlink:href="<?= $get_template_directory_uri?>/public/img/svg/sprite.svg#back-arrow"></use>
                </svg></a>
            <div class="section-title">
                <h1><?php wp_title('',true); ?></h1>
            </div>
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
        </div>
    </section>
    <!-- end sArticle-->

	
<?php
get_footer();
