<?php
/*
Template Name: Page with sidebar
*/
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mega
 */

get_header();
$page;
?>

    <!-- start sArticleHead-->
    <section class="sArticleHead section animate__fadeInUp animate__animated wow" >
        <!-- picture-->
        <picture class="picture-bg">
	        <?php echo get_the_post_thumbnail( $page->ID, '2560'); ?>
        </picture>
        <!-- /picture-->
        <div class="container">
            <div class="decorative-line decorative-line--some-article"></div>
            <h1><?php wp_title('',true); ?></h1>
        </div>
    </section>
    <!-- end sArticleHead-->
    <!-- start sArticleTitle-->
    <section class="sArticleTitle section animate__fadeInUp animate__animated wow" id="sArticleTitle">
        <div class="decorative-circle decorative-circle--title1"></div>
        <div class="decorative-circle decorative-circle--title2"></div>
        <div class="container">
	        <?php
	        while ( have_posts() ) :
		        the_post();
		        the_content();
	        endwhile;
	        ?>
        </div>
    </section>
<?php
get_footer();
