<?php

/*
Template Name: Шаблон страницы всех проектов
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


<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

    <!-- start sPortfolio-->
    <section class="sPortfolio section" id="sPortfolio">
        <div class="container">
            <div class="section-title animate__fadeInUp animate__animated wow">
                <h1><?php echo esc_html( get_the_title() ); ?></h1>
<!--                <h1>Наши работы</h1>-->
            </div>
        </div>
        <div class="sPortfolio__cards">
            <?php
            global $post;
            $all_pages = (new WP_Query())->query([
                'post_type' => 'page',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order'   => 'ASC',
            ]);
            $about_childrens = get_page_children($post->ID, $all_pages);
            foreach ($about_childrens as & $page):

                ?>
                <a class="sPortfolio__card-item bg-wrap animate__slideInUp animate__animated wow" href="<?php echo get_the_permalink($page->ID); ?>">
                    <!-- picture-->
                    <picture class="picture-bg">
	                    <?php
	                    if (has_post_thumbnail($page->ID)):
		                    echo get_the_post_thumbnail($page->ID, 'large');
	                    endif; ?>
                    </picture>
                    <!-- /picture-->

                    <div class="sPortfolio__caption">
                        <span><?php echo $page->post_title; ?></span>
                        <span>
<!--                            --><?php //echo $page->post_excerpt; ?>
	                        <?php echo  the_field('площадь_помещения', $page->ID); ?>
                            &nbsp;м<sup>2</sup></span>
                    </div>
                </a>
                <!-- /+e.card-item-->

            <?php
            endforeach;
            wp_reset_postdata();
            ?>

        </div>
    </section>
    <!-- end sPortfolio-->

<?php
get_footer();
