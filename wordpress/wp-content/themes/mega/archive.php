<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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


        <?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
