<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package datex
 */
$frontpage_id = get_option( 'page_on_front' );

// убираем мусор из шапки
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

// убираем с сайта эти идиотские emoje
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Общие настройки',
		'menu_title'	=> 'Общие настройки',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

//	acf_add_options_sub_page(array(
//		'page_title'    => 'Основное',
//		'menu_title'    => 'Основное',
//		'parent_slug'   => 'theme-general-settings',
//	));
//	acf_add_options_sub_page(array(
//		'page_title'    => 'Услуги и стоимость',
//		'menu_title'    => 'Услуги и стоимость',
//		'parent_slug'   => 'theme-general-settings',
//	));
//	acf_add_options_sub_page(array(
//		'page_title'    => 'Этапы проектирования',
//		'menu_title'    => 'Этапы проектирования',
//		'parent_slug'   => 'theme-general-settings',
//	));
//	acf_add_options_sub_page(array(
//		'page_title'    => 'Таймлайн',
//		'menu_title'    => 'Таймлайн',
//		'parent_slug'   => 'theme-general-settings',
//	));
//	acf_add_options_sub_page(array(
//		'page_title'    => 'Отзывы',
//		'menu_title'    => 'Отзывы',
//		'parent_slug'   => 'theme-general-settings',
//	));

}


// $custom_logo_global = get_custom_logo();
$time_work_global=get_field('режим_работы','option');
$adr_global=get_field('адрес','option');
$email_global1=get_field('email','option');
$email_global2=get_field('email_для_поставщиков','option');
$phone_global1=get_field('телефон','option');
$phone_global2=get_field('факс','option');
$phone_global3=get_field('телефон_для_поставщиков','option');
//$whatsapp_tel_global=get_field('whatsapp_tel','option');
//$whatsapp_tel_global_link='+'.preg_replace('/\D+/', '', $whatsapp_tel_global);
$phone_link_global1= '+'.preg_replace('/\D+/', '', $phone_global1);
$phone_link_global2= '+'.preg_replace('/\D+/', '', $phone_global2);
$phone_link_global3= '+'.preg_replace('/\D+/', '', $phone_global3);

//$frontpage_id = get_option( 'page_on_front' );



function mega_body_classes($classes)
{
	global $post;
//	if ($post->ID == 102) {
//		$classes[] = ' page-contact';
//	}
//	if ($post->ID == 121) {
//		$classes[] = ' services';
//	}
//	if ($post->ID == 202) {
//		$classes[] = ' about';
//	}
//	if ($post->ID == 247) {
//		$classes[] = ' reviews';
//	}

	return $classes;
}
add_filter('body_class', 'mega_body_classes');
