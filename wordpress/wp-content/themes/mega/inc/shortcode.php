<?php 


	/*
	* *****************************************************
	*/
	add_shortcode('mainslider', 'mainslider_func');
	function mainslider_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start headerBlock-->
        <div class="headerBlock section" id="headerBlock">
            <div class="headerBlock__slider-btn-next">
            </div>
            <div class="container-md">
                <div class="headerBlock__slider headerBlock__slider--js swiper">
                    <div class="swiper-wrapper">
                        <?php
                            if( have_rows('слайды') ): while ( have_rows('слайды') ) :
                                the_row();
                            ?>
                            <div class="headerBlock__slide swiper-slide bg-wrap">
                            <div class="headerBlock__inner">
                                <!-- picture-->
                                <picture class="picture-bg">
	                                <?php
	                                $image = get_sub_field('изображение');
	                                $size = '1920'; // (thumbnail, medium, large, full или ваш размер)
	                                if( $image ) {
	                                }
		                                echo wp_get_attachment_image( $image, $size );
	                                ?>
<!--                                    <img class="object-fit-js" src="img/@2x/header-block-1.jpg" alt="" loading="lazy"/>-->

                                </picture>
                                <!-- /picture-->
                                <div class="headerBlock__slide-inner container">
                                    <div class="headerBlock__content">
                                        <div class="section-title">
                                            <div class="h1"><?php the_sub_field('заголовок'); ?></div>
                                        </div>
	                                    <?php the_sub_field('текст'); ?>
                                    </div>
                                    <a class="headerBlock__btn" href="/uslugi-i-stoimost/#sCalc">Рассчитать проект
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php  endwhile;  else :  endif;  ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- end headerBlock-->
        <?php
    return ob_get_clean();

}
	/*
	* *****************************************************
	*/
	add_shortcode('sWelcome', 'sWelcome_func');
	function sWelcome_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sWelcome-->
        <section class="sWelcome section" id="sWelcome">
            <div class="container">
                <div class="bg-text">
                    <div class="animate__slideInUp animate__animated wow" data-wow-delay=".5s">team</div>
                </div>
                <div class="decorative-line animate__slideInUp animate__animated wow" data-wow-delay="1s">
                </div>
                <div class="decorative-circle">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sWelcome__content animate__fadeInUp animate__animated wow">
                            <h2><?php the_field('заголовок_01'); ?></h2>
                            <div class="sWelcome__text">
	                            <?php the_field('текст_01'); ?>
                            </div>
                            <a class="sWelcome__btn-wrap text-body" href="<?php the_field('видео_01'); ?>" data-fancybox="data-fancybox">
                                <div class="btn-round">
                                    <svg class="icon icon-play-button ">
                                        <use
                                                xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#play-button"></use>
                                    </svg>
                                </div>
                                <div class="strong">Смотреть видео&#8209;обращение</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sWelcome__img-wrap animate__fadeInRight animate__animated wow">
                            <div class="sWelcome__caption">
                                <div class="sWelcome__name"><?php the_field('имя'); ?></div>
                                <div class="sWelcome__position"><?php the_field('специальность'); ?></div>
                            </div>
                            <!-- picture-->
                            <picture>
	                            <?php
	                            $image = get_field('изображение_01');
	                            $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

	                            if( $image ) {

		                            echo wp_get_attachment_image( $image, $size );

	                            }

	                            ?>
                            </picture>
                            <!-- /picture-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sWelcome-->
        <?php
    return ob_get_clean();

}
	/*
	* *****************************************************
	*/
	add_shortcode('sProjects', 'sProjects_func');
	function sProjects_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sProjects-->
        <section class="sProjects section" id="sProjects">
            <div class="decorative-circle"></div>
            <div class="container">
                <div class="section-title animate__fadeInUp animate__animated wow">
                    <h2><?php the_field('заголовок_02'); ?></h2>
                </div>
            </div>
            <div class="container--slider">
                <div class="container">
                    <div class="decorative-line animate__slideInUp animate__animated wow" data-wow-delay=".5s"></div>
                    <div class="bg-text bg-text--first animate__fadeInRight animate__animated wow" data-wow-delay=".2s">After
                    </div>
                    <div class="bg-text bg-text--second animate__fadeInLeft animate__animated wow" data-wow-delay=".2s">Before
                    </div>
                </div>

                <div class="sProjects__slider sProjects__slider--js swiper animate__fadeInUp animate__animated wow">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('слайды_02') ): while ( have_rows('слайды_02') ) :
                            the_row();
                            ?>
                        <div class="sProjects__slide swiper-slide">
                            <div class="before-after swiper-no-swiping">
                                <div class="before-after__item img background-img bg-wrap">
                                    <!-- picture-->
                                    <picture class="picture-bg">
	                                    <?php
	                                    $image = get_sub_field('изображение_до');
	                                    $size = '1920'; // (thumbnail, medium, large, full или ваш размер)
	                                    if( $image ) {
	                                    echo wp_get_attachment_image( $image, $size );
	                                    }
	                                    ?>

                                    </picture>
                                    <!-- /picture-->
                                </div>
                                <div class="before-after__item img foreground-img bg-wrap">
                                    <!-- picture-->
                                    <picture class="picture-bg">
	                                    <?php
	                                    $image2 = get_sub_field('изображение_после');
	                                    if( $image2 ) {
	                                    echo wp_get_attachment_image( $image2, $size );
	                                    }
	                                    ?>
                                    </picture>
                                    <!-- /picture-->
                                </div>
                                <input type="range" min="0" max="100" value="50" class="slider-ba" name='slider'  >
                                <div class="slider-button">
                                    <svg class="icon icon-chevron-left ">
                                        <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#chevron-left"></use>
                                    </svg>
                                    <svg class="icon icon-chevron-right ">
                                        <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#chevron-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <?php  endwhile;  else :  endif;  ?>
                            </div>
                    <div class="sProjects__arrows">
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
            </div>
            <div class="sProjects__btn-wrap animate__fadeInUp animate__animated wow">
                <a class="sProjects__btn btn btn-primary" href="<?=  get_page_link( 294 ); ?>">Все работы
                </a>
            </div>
        </section>
        <!-- end sProjects-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sAdvantages', 'sAdvantages_func');
	function sAdvantages_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sAdvantages-->
        <section class="sAdvantages section" id="sAdvantages">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title animate__fadeInUp animate__animated wow">
                            <h2><?php the_field('заголовок_03'); ?></h2>
                        </div>
                        <div class="sAdvantages__row row">
                            <div class="decorative-line animate__slideInUp animate__animated wow" data-wow-delay="1s">
                            </div>
                            <?php
                            if( have_rows('список') ): while ( have_rows('список') ) :
                                the_row();
                                ?>
                            <div class="col-lg-6 animate__fadeInUp animate__animated wow">
                                <div class="sAdvantages__item"><?php the_sub_field('текст'); ?></div>
                            </div>
                            <?php  endwhile;  else :  endif;  ?>

                        </div>
                    </div>
                    <div class="sAdvantages__col col-12 col-sm animate__fadeInRight animate__animated wow">
                        <!-- picture-->
                        <picture>
	                        <?php
	                        $image = get_field('изображение_03');
	                        $size = 'adv'; // (thumbnail, medium, large, full или ваш размер)
	                        if( $image ) {
		                        echo wp_get_attachment_image( $image, $size );
	                        }
	                        ?>
                        </picture>
                        <!-- /picture-->
                    </div>
                </div>
            </div>
        </section>
        <!-- end sAdvantages-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sSocialMedia', 'sSocialMedia_func');
	function sSocialMedia_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sSocialMedia-->
        <section class="sSocialMedia section" id="sSocialMedia">
            <div class="bg-text animate__fadeInRight animate__animated wow" data-wow-delay=".5s">Social Media
            </div>
            <div class="container">
                <div class="sSocialMedia__heading">
                    <div class="row">
                        <div class="col-auto">
                            <div class="section-title animate__fadeInUp animate__animated wow">
                                <h2><?php the_field('заголовок_04'); ?></h2>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sSocialMedia__hashtags animate__fadeInRight animate__animated wow" data-wow-delay=".2s">
                                <?php
                                if( have_rows('хэштеги') ): while ( have_rows('хэштеги') ) :
                                    the_row();
                                    ?>
                                <span><?php the_sub_field('хэштег'); ?></span>
                                <?php  endwhile;  else :  endif;  ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode('[instagram-feed]'); ?>
                <div class="sSocialMedia__row row">
<!--	                --><?php
//
//	                $images = get_field('изображения_соц');
//	                $size = '500х500'; // (thumbnail, medium, large, full или произвольный размер)
//
//	                if( $images ): ?>
<!--			                --><?php //foreach( $images as $image ): ?>
<!--                                <div class="sSocialMedia__col col-sm animate__fadeInUp animate__animated wow" data-wow-delay=".1s">-->
<!--                                    -->
<!--                                    <picture>--><?php //echo wp_get_attachment_image( $image['ID'], $size ); ?><!--</picture>-->
<!--                                   -->
<!--                                </div>-->
<!--			                --><?php //endforeach; ?>
<!--	                --><?php //endif; ?>

                    <div class="sSocialMedia__col-soc col-sm-auto">
                        <div class="soc">
                            <?php
                            if( have_rows('соц_сети') ): while ( have_rows('соц_сети') ) :
                                the_row();
                                ?>
                            <a class="soc__item" href="<?php the_sub_field('ссылка'); ?>" target="_blank">
                                <svg class="icon icon-facebook ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#<?php the_sub_field('название'); ?>"></use>
                                </svg>
                            </a>
                            <?php  endwhile;  else :  endif;  ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end sSocialMedias-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sFaq', 'sFaq_func');
	function sFaq_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sFaq-->
        <section class="sFaq section" id="sFaq">
            <div class="container">
                <div class="decorative-circle animate__fadeInUp animate__animated wow"></div>
                <div class="section-title animate__fadeInUp animate__animated wow">
                    <h2><?php the_field('заголовок_05'); ?></h2>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-xxl-6 ">
                        <?php
                        if( have_rows('вопросы') ): while ( have_rows('вопросы') ) :
                            the_row();
                            ?>
                            <div class="sFaq__item animate__fadeInLeft animate__animated wow">
                                <div class="sFaq__item-head dd-head-js">
                                    <h6><?php the_sub_field('заголовок'); ?></h6>
                                </div>
                                <div class="sFaq__item-content"><?php the_sub_field('текст'); ?></div>
                            </div>
                        <?php  endwhile;  else :  endif;  ?>
                    </div>
                    <div class="col-lg-7 col-xxl-6 animate__fadeInRight animate__animated wow" data-wow-delay=".2s">
                        <div class="form-wrap">
                            <div class="before animate__heartBeat animate__animated wow" data-wow-delay="1s"></div>
                            <div class="form-inner">

                                <div class="bg-text">Questions
                                </div>
                                <div class="form-wrap__title text-center">
                                    <h4>Остались вопросы?</h4>
                                    <p>Оставьте заявку и мы <br> с радостью на них ответим</p>
                                </div>
                                <?php  echo do_shortcode( '[contact-form-7 id="464" title="Форма"]' );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sFaq-->
        <?php
    return ob_get_clean();

}



	/*
	* *****************************************************
	*/
	add_shortcode('contacts', 'contacts_func');
	function contacts_func()
	{
		 global $get_template_directory_uri, $delay,
		        $adr_global,
                $time_work_global,
                $email_global1,
                $email_global2,
                $phone_global1,
                $phone_global2,
                $phone_global3,
		        $phone_link_global1,
                $phone_link_global2,
                $phone_link_global3;
		 ob_start();
		 ?>
        <!-- start sContact--inner-->
        <div class="sContact <?php if( !is_front_page() ) {   echo "sContact--inner"; } ?>   section"
             id="sContact">
            <div class="container">
                <div class="sContact__info">
		            <?php if( !is_front_page() ) { ?>
                    <div class="decorative-circle animate__fadeLeft animate__animated wow" data-wow-delay=".8s"></div>
                     <div class="sContact__item">
                        <div class="sContact__shedule">
                            <span>В будни с 10:00 до 20:00</span>
                            <span>В выходные по договоренности</span>
                        </div>
                        <p>В офисе, на объекте <br> или в любом месте по согласованию</p>
                    </div>
                    <?php } ?>
                    <div class="sContact__item">
                        <h6>Офис:</h6>
                        <ul>
                            <li>
                                <svg class="icon icon-geo ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#geo"></use>
                                </svg><span>
                                <?= $adr_global; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="sContact__item">
                        <h6>Режим работы:</h6>
                        <ul>
                            <li>
                                <svg class="icon icon-clock ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#clock"></use>
                                </svg><span><?= $time_work_global?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="sContact__item">
                        <h6>Телефон для заказов и обращений:</h6>
                        <ul>
                            <li>
                                <svg class="icon icon-phone-call ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#phone-call"></use>
                                </svg>
                                <a href="tel:<?= $phone_link_global1?>"><?= $phone_global1?></a>
                            </li>
                            <li><a href="tel:<?= $phone_link_global2?>"><?= $phone_global2?></a></li>
                        </ul>
                    </div>
                    <div class="sContact__item">
                        <h6>Для заказчиков:</h6>
                        <ul>
                            <li>
                                <svg class="icon icon-mail ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#mail"></use>
                                </svg><a href="mailto:<?= $email_global1?>"><?= $email_global1?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sContact__item">
                        <h6>Для поставщиков:</h6>
                        <ul>
                            <li>
                                <svg class="icon icon-phone-call ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#phone-call"></use>
                                </svg><a href="tel:<?= $phone_link_global3?>"><?= $phone_global3?></a>
                            </li>
                            <li>
                                <svg class="icon icon-mail ">
                                    <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#mail"></use>
                                </svg><a href="mailto:<?= $email_global2?>"><?= $email_global2?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sContact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.692843057948!2d37.71231956470445!3d55.78120633142721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5356c80aacee1%3A0x736713689c561eac!2z0JHQvtC70YzRiNCw0Y8g0KHQtdC80LXQvdC-0LLRgdC60LDRjyDRg9C7LiwgNTXQkCwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEwNzAyMw!5e0!3m2!1sru!2sby!4v1632230065494!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <a class="sContact__btn d-md-none" href="yandexnavi://build_route_on_map?lat_to=55.781099&amp;lon_to=37.717285" target="_blank">Проложить маршрут
            </a>
        </div>
        <!-- end sContact--inner-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sCallForm', 'sCallForm_func');
	function sCallForm_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sCallForm-->
        <section class="sCallForm section bg-wrap animate__fadeInUp animate__animated wow" id="sCallForm">
            <div class="container">
                <div class="form-wrap">
                    <div class="before animate__heartBeat animate__animated wow" data-wow-delay="1s"></div>
                        <h2 class="animate__fadeInUp animate__animated wow">Хотите встретиться?</h2>
                        <div class="caption animate__fadeInUp animate__animated wow">Мы вам позвоним и согласуем удобное&nbsp;время встречи</div>
                    <?php  echo do_shortcode( '[contact-form-7 id="464" title="Форма"]' );?>
                </div>
                <div class="decorative-line decorative-line--callform animate__fadeInRight animate__animated wow" data-wow-delay="1s"></div>
            </div>
            <!-- picture-->
            <picture class="picture-bg">
                <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/webp/call-form-1.webp" media="(min-width:576px)"/>
                <source type="image/webp" srcset="<?php echo $get_template_directory_uri?>/public/img/@1x/webp/call-form-1.webp"/>
                <source type="image/jpg" srcset="<?php echo $get_template_directory_uri?>/public/img/@2x/call-form-1.jpg" media="(min-width:576px)"/>
                <img class="object-fit-js" src="<?php echo $get_template_directory_uri?>/public/img/@2x/call-form-1.jpg" alt="" loading="lazy"/>
            </picture>
            <!-- /picture-->
            <div class="bg-text">
                <div class="animate__fadeInLeft animate__animated wow">questions</div>
            </div>
        </section>
        <!-- end sCallForm-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('tarifs', 'tarifs_func');
	function tarifs_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <?php if( is_front_page() ) { ?>
            <section class="sOptions section" id="sOptions">
         <?php } else{?>
            <section class="sVariants section" id="sVariants">
        <?php } ?>
            <div class="container">
		            <?php if( is_front_page() ) { ?>
		                <div class="bg-text">
						<div class="animate__slideInUp animate__animated wow" data-wow-delay="1">Rate</div>
                        </div>
                        <div class="decorative-line decorative-line--first animate__fadeInUp animate__animated wow" data-wow-delay=".5s">
                        </div>
                        <div class="decorative-line decorative-line--second animate__fadeInUp animate__animated wow" data-wow-delay="1.5s">
                        </div>
                        <div class="decorative-line decorative-line--third animate__fadeInUp animate__animated wow" data-wow-delay="2s">
                        </div>
		            <?php } ?>

                <div class="section-title text-center animate__fadeInUp animate__animated wow">
		            <?php if( is_front_page() ) { ?>
                        <h2><?php the_field('заголовок_06','option'); ?></h2>
		            <?php } else{?>
                        <h1><?php the_field('заголовок_06','option'); ?></h1>
		            <?php } ?>
                </div>
                <div class="row animate__fadeInUp animate__animated wow">
                    <?php
                    if( have_rows('тарифы','option') ): while ( have_rows('тарифы','option') ) :
                        the_row();
	                    $index = get_row_index() + 1;
                        $title = get_sub_field('название');
	                    $image = get_sub_field('изображение');
	                    $list = get_sub_field('список');;
	                    $size = '680х530'; // (thumbnail, medium, large, full или ваш размер)
	                    $sizeSm = '330х660'; // (thumbnail, medium, large, full или ваш размер)


                    ?>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="variant-card bg-wrap">
                                <div class="variant-card__wrap">
                                    <div class="variant-card__title"><?= $title;?>
                                    </div>
                                    <div class="variant-card__price">от&nbsp;<?php the_sub_field('стоимость'); ?> руб./кв.м
                                    </div>
                                    <?= $list; ?>
                                    <a class="variant-card__more link-modal-js" href="#modal-tarif-<?= $index
                                    ?>">Подробнее
                                    </a>
                                </div>
                                <!-- picture-->
                                <picture class="bg-card">
                                    <?php
                                    if( $image ) {

	                                    echo wp_get_attachment_image( $image, $sizeSm );

                                    }
                                    ?>
                                </picture>
                                <!-- /picture-->
                            </div>
                        </div>

                        <div class="modal-win modal-win--services modal-tarif" id="modal-tarif-<?= $index ?>"
                        style="display:none"
                        >
                        <div class="modal-wrap">
                            <div class="main-info">
                                <div class="main-info__wrap">
                                    <h2><?= $title;?></h2>
	                                <?php the_sub_field('список'); ?>
                                </div>
                                <!-- picture-->
                                <picture class="modal-win__bg-card">
	                                <?php
	                                if( $image ) {
		                                echo wp_get_attachment_image( $image, $size );
	                                }
	                                ?>
                                </picture>
                                <!-- /picture-->
                            </div>
                            <div class="add-info">
                                <div class="modal-win__variant-caption">
	                                <?php the_sub_field('текст'); ?>
                                </div>
                                <div>
	                            <?php

	                            $image2 = get_sub_field('изображения_для_тарифов');
//                                var_dump($image2);
	                            if( !empty($image2) ):
                                    ?>
		                            <?php foreach( $image2 as $image ): ?>
                                    <a
                                            class="modal-win__example"
                                            href="<?php echo $image['sizes']['large']; ?>"
                                            data-fslightbox="modal-tarif-<?= $index ?>" >Смотреть пример</a>
	                            <?php endforeach; ?>
	                            <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bg-text"><?= $title;?></div>
                    </div>
                    <?php  endwhile;  else :  endif;  ?>
                </div>
                <?php if( !is_front_page() ) { ?>
                    <div class="decorative-circle animate__fadeInRight animate__animated wow" data-wow-delay=".5s"></div>
                    <div class="decorative-line--first decorative-line animate__slideInUp animate__animated wow" data-wow-delay=".5s"></div>
                    <div class="decorative-line--second decorative-line animate__slideInRight animate__animated wow" data-wow-delay=".2s"></div>
                <?php } ?>
            </div>
        </section>
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('steps', 'steps_func');
	function steps_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <!-- start sStages-->
        <section class="sStages section" id="sStages">
            <div class="decorative-circle decorative-circle--stages"></div>
            <div class="container" style="position:relative">
                <div class="decorative-line decorative-line--stages-first animate__slideInDown animate__animated wow" data-wow-delay="1s"></div>
                <div class="decorative-line decorative-line--stages-second animate__slideInUp animate__animated wow" data-wow-delay=".5s"></div>
                <div class="section-title text-center animate__slideInUp animate__animated wow">
                    <h2><?php the_field('заголовок_07','option'); ?></h2>
                </div>
            </div>
            <div>
		<?php
            if( have_rows('этапы','option') ): while ( have_rows('этапы','option') ) :
                the_row();?>
                <div class="sStages__item container">
                    <div class="row">

                        <div class="sStages__content-col col-auto">
	                        <?php
	                        if( have_rows('текстовые_блоки') ): while ( have_rows('текстовые_блоки') ) :
		                        the_row();?>
                            <div class="sStages__text-wrap animate__fadeInUp animate__animated wow">
                                <div class="sStages__title"><?php the_sub_field('заголовок'); ?></div>
	                            <?php the_sub_field('список'); ?>
                            </div>
	                        <?php  endwhile;  else :  endif;  ?>
                        </div>
                        <div class="sStages__col col-lg col-12 animate__fadeInUp animate__animated wow">
                            <!-- picture-->
                            <picture>
	                            <?php

	                            $image = get_sub_field('изображение');
	                            $size = 'large'; // (thumbnail, medium, large, full или ваш размер)

	                            if( $image ) {

		                            echo wp_get_attachment_image( $image, $size );

	                            }

	                            ?>

                            </picture>
                            <!-- /picture-->
                        </div>
                    </div>
                </div>
            <?php  endwhile;  else :  endif;  ?>
            </div>
        </section>
        <!-- end sStages-->
        <?php
    return ob_get_clean();

}



	/*
	* *****************************************************
	*/
	add_shortcode('calc', 'calc_func');
	function calc_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <!-- start sCalc-->
        <section class="sCalc section" id="sCalc">
            <div class="container">
                <div class="bg-text bg-text--calc animate__lightSpeedInRight animate__animated wow" data-wow-delay=".5s">calculator</div>
                <div class="section-title text-center animate__fadeInUp animate__animated wow">
                    <h2>Калькулятор расчета цены дизайн проекта</h2>
                </div>
            </div>
            <div class="container container--calc animate__fadeInUp animate__animated wow">
                <div class="sCalc__block">
                    <div class="sCalc__square mb-5">
                        <div class="sCalc__calc-title">Площадь вашего объекта, м²
                        </div>
                        <input type="number" step="any" name="squareValue" value="50" placeholder="000 м²"/>
                    </div>
                    <div class="sCalc__block-title">Выберите тариф
                    </div>
                    <form name="type">
                        <div class="row row--tariffs">
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio calc-tariff" type="radio" value="start" name="tariff"
                                checked="checked"/>
                                <span class="sCalc__calc-info">Start cube</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio calc-tariff" type="radio" value="project"
                                name="tariff"/>
                                <span class="sCalc__calc-info">project cube</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label"><input class="sCalc__calc-radio calc-tariff"
                                type="radio" value="project+" name="tariff"/><span class="sCalc__calc-info">project
                                cube +</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label"><input class="sCalc__calc-radio calc-tariff"
                                type="radio" value="maxi" name="tariff"/><span class="sCalc__calc-info">maxi cube</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form name="formSquare">
                        <div class="row row--price">
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio" type="radio"
                                    data-value="50"
                                    value="50"
                                    name="square"
                                    <?php
                                        $tariff1 = get_field('start_cube','option');
                                        $tariff2 = get_field('project_cube','option');
                                        $tariff3 = get_field('project_cube+','option');
                                        $tariff4 = get_field('maxi_cube','option');
                                        ?>
                                    <?php    if( $tariff1 ): ?>
                                        data-tarif-start="<?php echo esc_attr( $tariff1['0-60м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff2 ): ?>
                                        data-tarif-project="<?php echo esc_attr( $tariff2['0-60м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff3 ): ?>
                                        data-tarif-project+="<?php echo esc_attr( $tariff3['0-60м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff4 ): ?>
                                        data-tarif-maxi="<?php echo esc_attr( $tariff4['0-60м2']); ?>"
                                    <?php endif; ?>

                                checked/>
                                <span
                                class="sCalc__calc-info">
                                <span>0 - 60 м²</span>
                                <span>1 м² -
                                    <span class="sq-price">0000</span> </span></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio" type="radio"
                                    data-value="80"
                                    value="80"
                                    <?php    if( $tariff1 ): ?>
                                        data-tarif-start="<?php echo esc_attr( $tariff1['61-100м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff2 ): ?>
                                        data-tarif-project="<?php echo esc_attr( $tariff2['61-100м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff3 ): ?>
                                        data-tarif-project+="<?php echo esc_attr( $tariff3['61-100м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff4 ): ?>
                                        data-tarif-maxi="<?php echo esc_attr( $tariff4['61-100м2']); ?>"
                                    <?php endif; ?>
                                name="square"/>
                                <span class="sCalc__calc-info">
                                <span>61 - 100 м²</span>
                                <span>1 м² -
                                    <span class="sq-price">0000</span>
                                </span></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio"
                                    type="radio"
                                    data-value="150"
                                    value="150"
                                    name="square"
                                    <?php    if( $tariff1 ): ?>
                                        data-tarif-start="<?php echo esc_attr( $tariff1['101-250м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff2 ): ?>
                                        data-tarif-project="<?php echo esc_attr( $tariff2['101-250м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff3 ): ?>
                                        data-tarif-project+="<?php echo esc_attr( $tariff3['101-250м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff4 ): ?>
                                        data-tarif-maxi="<?php echo esc_attr( $tariff4['101-250м2']); ?>"
                                    <?php endif; ?>
                                    />
                                <span class="sCalc__calc-info">
                                <span>101 - 250 м²</span>
                                <span>1 м² -
                                    <span class="sq-price">0000</span>
                                </span></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sCalc__calc-label">
                                <input class="sCalc__calc-radio"
                                    type="radio"
                                    data-value="270"
                                    value="270"
                                    <?php    if( $tariff1 ): ?>
                                        data-tarif-start="<?php echo esc_attr( $tariff1['251м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff2 ): ?>
                                        data-tarif-project="<?php echo esc_attr( $tariff2['251м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff3 ): ?>
                                        data-tarif-project+="<?php echo esc_attr( $tariff3['251м2']); ?>"
                                    <?php endif; ?>
                                    <?php    if( $tariff4 ): ?>
                                        data-tarif-maxi="<?php echo esc_attr( $tariff4['251м2']); ?>"
                                    <?php endif; ?>
                                 name="square"/>
                                <span class="sCalc__calc-info">
                                <span>251 м² +</span>
                                <span>1 м² -
                                    <span class="sq-price">0000</span>
                                </span></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row row--calc">

                        <div class="sCalc__final">
                            <div class="sCalc__final-price">
                                <div class="sCalc__calc-title">Стоимость работ
                                </div>
                                <div class="sCalc__input-final">420 000 р
                                </div>
                            </div>
                            <div class="sCalc__sale-price">
                                <div class="sCalc__calc-title">Со скидкой 5%
                                </div>
                                <div class="sCalc__input-sale">399 000 р
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="sCalc__btn-fix link-modal-js" href="#modal-call">Зафиксировать скидку
                    </a>
                    <div class="modal-win modal-win--call" id="modal-call" style="display: none">
                        <div class="form-wrap">
                            <div class="before animate__heartBeat animate__animated wow" data-wow-delay="1s"></div>
                            <?php  echo do_shortcode( '[contact-form-7 id="468" title="Форма в калькуляторе"]' );?>
                        </div>
                    </div>
                    <div class="modal-win modal-win--sale" id="modal-sale-thanks" style="display: none">
                        <div class="modal-wrap">
                            <div class="modal-text">
                                <div class="modal-text__title">Ваша скидка зафиксирована</div>
                                <div class="modal-text__caption">Вы можете&nbsp;обратиться к&nbsp;нам&nbsp;в&nbsp;любое время и воспользоваться скидкой</div>
                            </div>
                            <!-- picture-->
                            <picture class="pic-sale">
                                <source type="image/webp" srcset="img/@2x/webp/modal-sale.webp"/><img src="img/@2x/modal-sale.png" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture-->
                        </div>
                        <div class="bg-text bg-text--sale">Thank You</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sCalc-->
        <?php
    return ob_get_clean();

}




	/*
	* *****************************************************
	*/
	add_shortcode('sDescription', 'sDescription_func');
	function sDescription_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <!-- start sDescription-->
			<div class="sDescription section" id="sDescription">
				<div class="container">
					<div class="sDescription__caption animate__fadeInUp animate__animated wow"><?php the_field('текст_08'); ?></div>
					<picture class="bg-descr animate__fadeIn animate__animated wow bg-descr">
					    <?php

                                $image = get_field('изображение_08');
                                $imageMob = get_field('изображение_мобильное');

                                if( !empty($image) ): ?>
                                    <source type="image/png" srcset="<?php echo $image['url']; ?>" media="
                                    (min-width:576px)"/>
                                    <img src="<?php echo $imageMob['sizes']['mob']; ?>" alt="<?php echo $image['alt'];
                                    ?>"
                                    loading="lazy"/>

                                <?php endif; ?>
					</picture>
				</div>
			</div>
			<!-- end sDescription-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sDreamHouse', 'sDreamHouse_func');
	function sDreamHouse_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <!-- start sDreamHouse-->
			<section class="sDreamHouse section" id="sDreamHouse">
				<div class="sDreamHouse__wrapper animate__fadeInUp animate__animated wow">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="sDreamHouse__caption-wrap">
									<h2><?php the_field('заголовок_09'); ?></h2>
									<div class="sDreamHouse__caption"><?php the_field('текст_09'); ?></div>
								</div>
							</div>
							<div class="sDreamHouse__col col-12 col-sm">
								<!-- picture-->
								<picture class="bg-pic animate__fadeInUp animate__animated wow">
									<?php
                                        $image = get_field('изображение_09');
                                        $size = '1920'; // (thumbnail, medium, large, full или ваш размер)

                                        if( $image ) {

                                            echo wp_get_attachment_image( $image, $size );

                                        }

                                        ?>

								</picture>
								<!-- /picture-->
							</div>
						</div>
					</div>
					<div class="bg-text">dream house</div>
					<div class="sDreamHouse__bg-rad">
					</div>
				</div>
			</section>
			<!-- end sDreamHouse-->
        <?php
    return ob_get_clean();

}



	/*
	* *****************************************************
	*/
	add_shortcode('timeline', 'timeline_func');
	function timeline_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 if ($post->ID == 224) {

         ?>
        <!-- start sTimeline-->
			<div class="sTimeline section" id="sTimeline">
				<div class="container">
					<!-- picture-->
					<picture class="bg-timeline animate__fadeInRight animate__animated wow" data-wow-delay=".8s">
						<?php
                            $image = get_field('изображение_страницы','option');
                            $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                            if( $image ) {

                                echo wp_get_attachment_image( $image, $size );

                            }

                            ?>
					</picture>
					<!-- /picture-->
					<?php
	                        if( have_rows('даты','option') ): while ( have_rows('даты','option') ) :
		                        the_row();?>
						<div class="time-line-item animate__fadeInUp animate__animated wow">
							<div class="sTimeline__year"><?php the_sub_field('дата'); ?></div>
							<div class="sTimeline__caption"><?php the_sub_field('текст'); ?></div>
						</div>
					<?php  endwhile;  else :  endif;  ?>
					<div class="bg-text bg-text--timeline2 animate__fadeInLeft animate__animated wow" data-wow-delay="1.2s">awards</div>
					<div class="bg-text bg-text--timeline1 animate__fadeInLeft animate__animated wow" data-wow-delay=".4s">2019</div>
					<div class="decorative-line decorative-line--timeline animate__fadeInLeft animate__animated wow" data-wow-delay=".8s"></div>
				</div>
			</div>
			<!-- end sTimeline-->
		<?php } else{?>
		    <!-- start sPublications-->
			<section class="sPublications section" id="sPublications">
				<div class="container">
					<div class="sPublications__wrap">
						<div class="animate__fadeInUp animate__animated wow">
							<h2><?php the_field('заголовок_для_блока','option'); ?></h2>
						</div>
						<?php
	                        if( have_rows('даты','option') ): while ( have_rows('даты','option') ) :
		                        the_row();
                                $index = get_row_index();
                                if  ($index > 3) {
                                    break;
                                }
                            ?>
                            <div class="sPublications__block animate__fadeInUp animate__animated wow">
                                <div class="title"><?php the_sub_field('дата'); ?></div>
                                <div class="caption"><?php the_sub_field('короткий_заголовок'); ?></div>
                            </div>
						<?php  endwhile;  else :  endif;  ?>
						<a class="sPublications__btn animate__fadeInUp animate__animated wow" href="<?php the_field('ссылка_на_страницу','option'); ?>">Смотреть все награды
						</a>
					</div>
					<!-- picture-->
					<picture class="bg-publ">
						<?php
                            $image = get_field('изображение_для_блока','option');
                            $size = 'full'; // (thumbnail, medium, large, full или ваш размер)

                            if( $image ) {

                                echo wp_get_attachment_image( $image, $size );

                            }

                            ?>
					</picture>
					<!-- /picture-->
					<div class="decorative-line decorative-line--1 animate__slideInUp animate__animated wow"></div>
					<div class="bg-text">AWARDS</div>
				</div>
			</section>
			<!-- end sPublications-->
        <?php }
    return ob_get_clean();

}



	/*
	* *****************************************************
	*/
	add_shortcode('feadback', 'feadback_func');
	function feadback_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
		 <!-- start sReviews-inner-->
			<section class="sReviews <?php if( $post->ID == 247 ) { ?> sReviews--inner  <?php } ?> section"
			id="sReviews">
				<div class="container">
		            <?php if( $post->ID == 247 ) { ?>
                        <div class="section-title  animate__fadeInUp animate__animated wow">
                            <h1><?php echo $title; ?></h1>
                        </div>
		            <?php } ?>
					<div class="bg-text">Reviews</div>
				</div>
				<?php
                    if( have_rows('отзыв','option') ): while ( have_rows('отзыв','option') ) :
                        the_row();
	                    $index = get_row_index() ;
                         if( $post->ID != 247  && $index > 1) {
                                    break;
                                }
                    ?>
				    <div class="sReviews__wrapper ">
					<div class="sReviews__bg-rad animate__fadeIn animate__animated wow">
					</div>
					<div class="decorative-circle "></div>
					<div class="container animate__fadeInUp animate__animated wow">
						<div class="row">
							<div class="col-lg-6">
								<div class="sReviews__content">
								    <?php if( $post->ID != 247 ) { ?>
                                        <div class="section-title  animate__fadeInUp animate__animated wow">
                                            <h2><?php echo $title; ?></h2>
                                        </div>
                                    <?php } ?>
									<div class="sReviews__name"><?php the_sub_field('имя'); ?></div>
									<div class="sReviews__adress"><?php the_sub_field('адрес'); ?></div>
									<?php the_sub_field('текст'); ?>
									 <?php if( $post->ID != 247 ) { ?>

                                        <a class="sReviews__btn animate__fadeInUp animate__animated wow btn
                                        btn-primary d-none d-lg-inline-block" href="<?php the_field('ссылка_на__страницу','option'); ?>" data-wow-delay=".5s">Смотреть все отзывы
									</a>
                                    <?php }  ?>
								</div>
							</div>
							<div class="sReviews__col col-12 col-sm">
								<!-- picture-->
								<picture>
									<?php
                                        $image = get_sub_field('изображение');
                                        $size = '1400'; // (thumbnail, medium, large, full или ваш размер)

                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }

                                        ?>
								</picture>
								<!-- /picture-->
							</div>
						</div>
					</div>
				</div>
			    <?php  endwhile;  else :  endif;  ?>
			    <?php if( $post->ID != 247 ) { ?>
                    <div class="container animate__fadeInUp animate__animated wow">
                        <a class="sReviews__btn btn btn-primary d-lg-none" href="<?php the_field('ссылка_на__страницу','option'); ?>">Смотреть все отзывы
                        </a>
                    </div>
				<?php }  ?>
			</section>
			<!-- end sReviews-inner-->
                <?php
    return ob_get_clean();

}


	/*
	* *****************************************************
	*/
	add_shortcode('work', 'work_func');
	function work_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
		 <!-- start sBestWorks-->
			<section class="sBestWorks section"  >
				<div class="container" style="position:relative">
					<div class="decorative-line decorative-line--best1"></div>
					<div class="decorative-line decorative-line--best2"></div>
				</div>
				<div class="wrapper-grid">
					<div class="wrapper-grid__card animate__fadeInUp animate__animated wow">
						<h2>Наши лучшие работы</h2>
					</div>
					<?php
            global $post;
            $all_pages = (new WP_Query())->query([
                'post_type' => 'page',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order'   => 'ASC',
//                'posts_per_page' => 5,
            ]);
            $about_childrens = get_page_children(294, $all_pages);
            foreach ($about_childrens as $key=> $page):
                 if ($key == 5) {
                        break;    /* Тут можно было написать 'break 1;'. */
                    }
            ?>

                <div class="wrapper-grid__card animate__fadeInUp animate__animated wow">
					    <a class="pic-card" href="<?php echo get_the_permalink($page->ID); ?>">
							<!-- picture-->
							<picture>
								<?php
                                    if (has_post_thumbnail($page->ID)):
                                        echo get_the_post_thumbnail($page->ID, 'large');
                                    endif; ?>
							</picture>
							<!-- /picture-->
							<div class="card-text">
								<div class="title"><?php echo $page->post_title; ?></div>
								<div class="square"><?php echo  the_field('площадь_помещения', $page->ID); ?>&nbsp; м²</div>
							</div></a>
					</div>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>

					<div class="wrapper-grid__card animate__fadeInUp animate__animated wow">
						<a class="wrapper-grid__btn" href="<?=  get_page_link( 294 );
                        ?>">СМОТРЕТЬ ВСЕ ПРОЕКТЫ
						</a>
					</div>
				</div>
			</section>
			<!-- end sBestWorks-->
                <?php
    return ob_get_clean();

}


	/*
	* *****************************************************
	*/
	add_shortcode('img_with_caption', 'img_with_caption_func');
	function img_with_caption_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
		 <div class="container">
		    <?php
                    if( have_rows('img_with_caption') ): while ( have_rows('img_with_caption') ) :
                        the_row();  ?>
            <div class="img-with-caption">

                <?php the_sub_field('контент'); ?>
            </div>

             <?php  endwhile;  else :  endif;  ?>
        </div>
                <?php
    return ob_get_clean();

}


	/*
	* *****************************************************
	*/
	add_shortcode('linkblock', 'linkblock_func');
	function linkblock_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
		<div class="linkblock section">
							<h2>П<?php the_field('заголовок_202'); ?></h2>
		    <?php
                    if( have_rows('ссылки') ): while ( have_rows('ссылки') ) :
                        the_row();  ?>
                        <a href="<?php the_sub_field('ссылка'); ?>"><?php the_sub_field('название_кнопки'); ?></a>


             <?php  endwhile;  else :  endif;  ?>
            </div>
                <?php
    return ob_get_clean();

}


	/*
	* *****************************************************
	*/
	add_shortcode('adviceblock', 'adviceblock_func');
	function adviceblock_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
        <div class="adviceblock section">
        <div class="container">
							<h2><?php the_field('заголовок_203'); ?></h2>

		        <div class="adviceblock__block">
                    <div class="row">
                        <div class="col">
                            <div class="adviceblock__content">
                                <?php the_field('adviceblock_content'); ?>
                            </div>
                        </div>
                        <div class="col-lg-auto align-self-end">
                            <div class="adviceblock__man">
                                <?php
                                    $image = get_field('изображение_advicebloc');
                                    $size = '1920';
                                echo wp_get_attachment_image( $image, $size );
                                ?>
                                <div class="adviceblock__text">
                                    <strong><?php the_field('adviceblock_name'); ?></strong>
                                    <?php the_field('adviceblock_prof'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php
    return ob_get_clean();

}


	/* *****************************************************
	*/
	add_shortcode('cards', 'cards_func');
	function cards_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
        <div class="cards section">
            <div class="cards__row row">
            <?php
                    if( have_rows('карточки') ): while ( have_rows('карточки') ) :
                        the_row();  ?>
                <div class="cards__col col-xxl-3 col-xl-4 col-md-6">
                    <div class="artical-card
                        <?php
                            if( get_sub_field('перевернутая_карточка') ) {
                                // Do something.
                                ?>

                        artical-card--bg
                        <?php
                            }
                        ?>
                        ">
                        <a class="artical-card__img-wrap" href="<?php the_sub_field('ссылка'); ?>">
                        <?php
                                    $image = get_sub_field('изображение');
                                    $size = '500х500';
                                echo wp_get_attachment_image( $image, $size );
                                ?>
                        </a>
                        <div class="artical-card__after">
                            <?php the_sub_field('прозрачный__текст'); ?>
                        </div>
                        <div class="artical-card__caption">
                            <div class="artical-card__title">
                            <a href="<?php the_sub_field('ссылка'); ?>">
                                <?php the_sub_field('заголовок'); ?>
                            </a>
                            </div>
                            <p><?php the_sub_field('текст'); ?></p>

                        </div>
                    </div>
                </div>

                <?php  endwhile;  else :  endif;  ?>
            </div>
        </div>
    <?php
    return ob_get_clean();

}
/* *****************************************************
	*/
	add_shortcode('example_block', 'example_block_func');
	function example_block_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
         $title = get_field('заголовок_10','option');
         ?>
        <div class="example-block"><?php the_field('контент_примера'); ?></div>
    <?php
    return ob_get_clean();

}

