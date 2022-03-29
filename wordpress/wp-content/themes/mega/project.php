<?php
/*
Template Name: Шаблон страницы проекта
*/
/**
 * The template for displaying all pages
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
global  $get_template_directory_uri;
?>

    <!-- start sSpecificProject-->
    <section class="sSpecificProject section" id="sSpecificProject">
        <div class="container">
            <div class="section-title animate__slideInUp animate__animated wow">
                <h1><?php echo esc_html( get_the_title() ); ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 animate__slideInUp animate__animated wow">
                    <ul>
                        <li><?php the_field('стоимость_проекта'); ?>&nbsp;р</li>
                        <li>Стоимость проекта</li>
                    </ul>
                </div>
                <div class="col-lg-4 animate__slideInUp animate__animated wow">
                    <ul>
                        <li><?php the_field('срок_реализации'); ?></li>
                        <li>Срок реализации</li>
                    </ul>
                </div>
                <div class="col-lg-4 animate__slideInUp animate__animated wow">
                    <ul>
                        <li><?php the_field('площадь_помещения'); ?>&nbsp;кв.м.</li>
                        <li>Площадь помещения</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sSpecificProject__slider sSpecificProject__slider--js swiper animate__slideInUp animate__animated wow">
            <div class="swiper-wrapper">
	            <?php
	            $images22 = get_field('изображения_проекта');
	            $size233 = '1200*800'; // (thumbnail, medium, large, full or custom size)
	            if( $images22 ): ?>
			            <?php foreach( $images22 as $images22 ): ?>
                            <a data-fancybox="gal" href="<?php echo $images22['sizes'][$size233]; ?>" class="sSpecificProject__slide swiper-slide">
                                <!-- picture-->
                                <picture>
<!--                                    --><?php //echo wp_get_attachment_image( $image_id, $size233 ); ?>
                                    <source srcset="<?php echo $images22['sizes'][$size233]; ?>" media="(min-width:1440px)">
                                    <source srcset="<?php echo $images22['sizes']['large']; ?>" media="(min-width:576px)">
                                    <img src="<?php echo $images22['sizes']['mob']; ?>" alt="<?php echo $images22['alt']; ?>" />
                                </picture>
                                <!-- /picture-->
                            </a>
			            <?php endforeach; ?>
	            <?php endif; ?>
            </div>
            <div class="sSpecificProject__arrows">
                <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev">
                    <svg class="icon icon-chevron-left ">
                        <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#chevron-left"></use>
                    </svg>
                </div>
                <div class="swiper-button-hand swiper-button-hand-next swiper-button-next">
                    <svg class="icon icon-chevron-right ">
                        <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#chevron-right"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- end sSpecificProject-->
<?php
get_footer();
