<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,  shrink-to-fit=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no">
    <link href="libs/@fancyapps/ui/fancybox.css" rel="stylesheet"/><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(26448366, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/26448366" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->	
</head>
<?php  // $tel = get_field('телефон', 'option');
					// 	$tel_str = str_replace(" ","", $tel);

global $get_template_directory_uri,
       $post,
       $phone_global1,
       $phone_link_global1;
    ?>
<!-- <body  > -->

<body <?php body_class(); ?>>

<div class="main-wrapper">
    <!-- start top-nav-->
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto col">
                    <div class="top-nav__logo"><a href="/"><img src="img/svg/logo.svg" alt=""/></a>
                    </div>
                </div>
                <div class="col-lg order-lg-0 order-last">
                    <div class="menu-mobile menu-mobile--js">
                        <div class="menu-mobile__inner">
                            <div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none"><span></span>
                            </div>
                            <ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                                <li class="menu-item" itemprop="item"><a href="#" itemprop="url">О проблеме</a></li>
                                <li class="menu-item" itemprop="item"><a href="#" itemprop="url">Где купить</a></li>
                                <li class="menu-item" itemprop="item"><a href="#" itemprop="url">Вопросы и ответы</a></li>
                                <li class="menu-item" itemprop="item"><a href="#" itemprop="url">Статьи и материалы</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a class="top-nav__btn" href="#">Сейфмен
                    </a>
                </div>
                <div class="col-auto d-lg-none">
                    <div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none"><span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top-nav-->
	<?php if( !is_front_page() ) { ?>
	<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	<?php } ?>
