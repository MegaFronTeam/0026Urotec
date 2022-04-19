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
global $get_template_directory_uri,
$post,
$page;
?>

    <!-- start sArticle-->
    <section class="sArticle section" id="sArticle">
        <div class="container">
            <a class="  wow animate__fadeInUp" href="<?php echo esc_url(  wp_get_referer() ); ?>">
                <svg class="icon icon-back-arrow ">
                    <use xlink:href="<?= $get_template_directory_uri?>/public/img/svg/sprite.svg#back-arrow"></use>
                </svg></a>
            <div class="section-title   wow animate__fadeInUp">
                <h1><?php wp_title('',true); ?></h1>
            </div>
            <small class="  wow animate__fadeInUp"><?php echo get_the_date('j.n.Y'); ?></small>
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7   wow animate__fadeInUp">
                    <?php echo get_the_post_thumbnail( $post->ID, 'art'); ?>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
                <div class="col col-lg-4 ">
                    <h3 class="  wow animate__fadeInUp">Читайте так&nbsp;же</h3>
                        <?php
                        $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => 2,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                        );
                        $q = new WP_Query($args);
                        ?>

                        <?php if ( $q->have_posts() ) : ?>
                            <?php while ( $q->have_posts() ) : $q->the_post(); ?>
                                <div class="sArticle__list   wow animate__fadeInUp">
                                    <a class="blogItem" href="<?php the_permalink(); ?>">
                                        <div class="blogItem__img-wrap">
                                            <?php echo get_the_post_thumbnail(); ?>
                                        </div>
                                        <div class="blogItem__title"><?php the_title() ?> </div>
                                        <div class="blogItem__date"><?php the_date() ?></div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>


                </div>
            </div>
        </div>
    </section>
    <!-- end sArticle-->
<?php
get_footer();
