<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mega
 */

get_header();
?>

    <!-- start sArticles-->
    <div class="sArticles section" id="sArticles">
        <div class="container">
        <div class="decorative-line decorative-line--articles animate__slideInUp animate__animated wow" data-wow-delay=".2s"></div>
        <div class="decorative-circle decorative-circle--first animate__slideInRight animate__animated wow" data-wow-delay=".4s"></div>
        <div class="decorative-circle decorative-circle--second animate__slideInRight animate__animated wow" data-wow-delay=".6s"></div>
        <div class="bg-text bg-text--articles animate__slideInLeft animate__animated wow" data-wow-delay="1s">articles</div>


        <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

            </div><!-- #main -->
        </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
