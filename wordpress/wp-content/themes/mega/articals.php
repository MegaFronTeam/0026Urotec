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
global $get_template_directory_uri, $delay;
?>

    <!-- start sBlog-->
    <section class="sBlog section pt-0" id="sBlog">
    <div class="section-title wow animate__fadeInUp">
        <video loading="lazy" preload="auto" no-controls="no-controls" autoplay="autoplay" loop="loop" playsinline="playsinline" muted="muted">
            <source src="<?= $get_template_directory_uri;?>/public/video/2.webm" type="video/webm"/>
            <source src="<?= $get_template_directory_uri;?>/public/video/2.mp4" type="video/mp4"/>
        </video>
        <div class="container">
            <h1>Статьи и&nbsp;материалы				</h1>
        </div>
    </div>
    <div class="container">
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
		'post_type'      => 'post',
		'posts_per_page' => 9,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'paged' => $paged
);
$custom_query = new WP_Query($args);
?>
    <div class="row">


	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <div class="col-12 col-lg-4 col-sm-6 wow animate__fadeInUp" >
            <a class="blogItem" href="<?php the_permalink(); ?>">
                <div class="blogItem__img-wrap">
									<?php echo get_the_post_thumbnail(); ?>
                </div>
                <div class="blogItem__title"><?php the_title() ?> </div>
                <div class="blogItem__date"><?php the_date() ?></div>
            </a>
        </div>
	<?php endwhile; ?>

    </div>
    <div class="pagination-wrapper wow animate__fadeInUp">
			<?php
			// numbered pagination
			function pagination($pages = '', $range = 4)
			{
				$showitems = ($range * 2)+1;

				global $paged;
				if(empty($paged)) $paged = 1;

				if($pages == '')
				{
					global $wp_query;
					$pages = $wp_query->max_num_pages;
					if(!$pages)
					{
						$pages = 1;
					}
				}

				if(1 != $pages)
				{

					echo "<ul class=\"page-numbers justify-content-center\">";
					for ($i=1; $i <= $pages; $i++)
					{
					echo "<li>";
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						{
							echo ($paged == $i)? "<span class=\"page-numbers current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"page-numbers\">".$i."</a>";
						}
					echo "</li>";
					}
                    echo "</ul>\n";
				}
			}
			?>

						<?php if (function_exists("pagination")) {
							pagination($custom_query->max_num_pages);
						} ?>


    </div>

<?php wp_reset_postdata(); ?>

	
<?php
get_footer();
