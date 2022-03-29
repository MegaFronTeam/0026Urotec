<?php

/*
Template Name: Шаблон записей
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
    <!-- start sArticles-->
    <div class="sArticles section" id="sArticles">
    <div class="container">
    <div class="decorative-line decorative-line--articles animate__slideInUp animate__animated wow" data-wow-delay=".2s"></div>
    <div class="decorative-circle decorative-circle--first animate__slideInRight animate__animated wow" data-wow-delay=".4s"></div>
    <div class="decorative-circle decorative-circle--second animate__slideInRight animate__animated wow" data-wow-delay=".6s"></div>
    <div class="bg-text bg-text--articles animate__slideInLeft animate__animated wow" data-wow-delay="1s">articles</div>


<?php
$terms = get_terms([
	'taxonomy' => 'category',
	'hide_empty' => false,
]);
if ($terms) {
	foreach ($terms as $term):
		?>

        <ul>
            <li><h2><?php echo $term->name; ?></h2></li>
			<?php
			$args = array(
				'posts_per_page' => -1,
				'category' => $term->term_id
			);

			$myposts = get_posts($args);
			foreach ($myposts as $post) : setup_postdata($post); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
			<?php endforeach;
			wp_reset_postdata(); ?>
        </ul>
	<?php
	endforeach;
}
?>

    </div>
    </div>
    <!-- end sArticles-->
			
		
			
	
<?php
get_footer();
