<?php
/*
Template Name: Шаблон для info
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

    <!-- start articalHead-->
    <div class="articalHead">
        <div class="container">
            <div class="row">
                <div class="articalHead__col col-auto section">
<!--                    <div class="container" style="position:relative;">-->
<!--                        <nav class="bread-nav" aria-label="breadcrumb">-->
<!--                            <ol class="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">-->
<!--                                <li class="breadcrumb-item prev-active" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span>-->
<!--                                        <meta itemprop="position" content="1"/></a></li>-->
<!--                                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">Услуги и стоимость</span>-->
<!--                                        <meta itemprop="position" content="2"/></a></li>-->
<!--                            </ol>-->
<!--                        </nav>-->
<!--                    </div>-->
                    <h1>Элитный дизайн квартиры Н1</h1><a class="btn btn-primary link-modal-js"
                                                          href="#modal-call">РАССЧИТАТЬ ПРОЕКТ</a>
                </div>
                <div class="articalHead__img-wrap col-auto d-none d-lg-block">
	                <?php echo get_the_post_thumbnail( $page->ID, '1920'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end articalHead-->
    <div class="articalContent section" id="articalContent">
    <div class="articalContent__container container">
    <?php
	        while ( have_posts() ) :
		        the_post();
		        the_content();
	        endwhile;
	        ?>
        </div>
    </div>

    <!-- start sCallForm-->
    <section class="sCallForm sCallForm--2 section bg-wrap animate__fadeInUp animate__animated wow" id="sCallForm">
        <div class="container">
            <div class="form-wrap">
<!--                <div class="before animate__heartBeat animate__animated wow" data-wow-delay="1s"></div>-->
                <h2 class="animate__fadeInUp animate__animated wow">Хотите встретиться?</h2>
                <div class="caption animate__fadeInUp animate__animated wow">Мы вам позвоним и согласуем удобное&nbsp;время встречи</div>
				<?php  echo do_shortcode( '[contact-form-7 id="1868" title="Форма_Info"]' );?>
            </div>
<!--            <div class="decorative-line decorative-line--callform animate__fadeInRight animate__animated wow" data-wow-delay="1s"></div>-->

        </div>
        <!-- picture-->
        <picture class="picture-bg">
            <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/webp/call-form-1.webp" media="(min-width:576px)"/>
            <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@1x/webp/call-form-1.webp"/>
            <source type="image/jpg" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/call-form-1.jpg" media="(min-width:576px)"/>
            <img class="object-fit-js" src="<?php echo $get_template_directory_uri?>/public/img/@2x/call-form-1.jpg" alt="" loading="lazy"/>
        </picture>
        <!-- /picture-->
<!--        <div class="bg-text">-->
<!--            <div class="animate__fadeInLeft animate__animated wow">questions</div>-->
<!--        </div>-->
    </section>
    <!-- end sCallForm-->
<?php
get_footer();
