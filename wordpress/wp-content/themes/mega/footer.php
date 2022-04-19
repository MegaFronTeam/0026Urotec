<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */
global $get_template_directory_uri,
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
//		 ob_start();
		 $link11 = get_field('политика_конфиденциальности', 'option');

?>
<footer class="footer">
    <div class="container">
        <div class="footer-top wow animate__fadeIn row">
            <div class="col col-3">
                <div class="footer-top__logo">
                    <a href="/">
                        <?php
                        $image1 = get_field('лого_в_подвале', 'option');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image1 ) {
                            echo wp_get_attachment_image( $image1, $size, );
                        } ?>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-3">Организация, принимающая претензии: ООО&laquo;Русфик&raquo;, группа компаний Recordati</div>
            <div class="col-12 col-sm-5 contr">
                <p>Имеются противопоказания. Необходимо ознакомиться с&nbsp;инструкцией. Инструкция по&nbsp;медицинскому применению лекарственного препарата Урорек, РУ&nbsp;ЛСР-005971/10 от&nbsp;25.06.2010</p>
            </div>
            <div class="col-1 cr">&copy;&nbsp;<?php   echo  date('Y');?></div>
        </div>
        <div class="footer-bottom wow animate__fadeIn">
            <div class="row">
                <div class="col-xl-3 col-sm-auto">
                    <div class="footer-bottom__title">Адрес:
                    </div>
                    <div class="footer-bottom__addr">
                        <p><?= $adr_global;?></p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="footer-bottom__title">Контакты:
                    </div>
                    <div class="footer-bottom__addr">
                        <p> <a href="tel:<?= $phone_link_global1;?>">тел.: <?= $phone_global1;?></a></p>
                        <p>факс: <?= $phone_global2;?></p>
                        <p><a href="mailto:<?= $email_global1;?>">E-mail: <?= $email_global1;?></a></p>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="footer__links">
											<?php wp_nav_menu( [
													'theme_location'  => 'menu-footer',
													'container' => '',
													'menu_class' => '',
											] ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sources">
            <h2>Источники </h2>
            <button class="btn btn-link btn-toggle--js">Свернуть список</button>
					<?php the_field('источники','options'); ?>
            <div class="sources__info">
                <p>ИНФОРМАЦИЯ ДЛЯ СПЕЦИАЛИСТОВ ЗДРАВООХРАНЕНИЯ </p><span>Имеются противопоказания. Необходимо ознакомиться с&nbsp;инструкцией. Инструкция по&nbsp;медицинскому применению лекарственного препарата Урорек, РУ&nbsp;ЛСР-005971/10 от&nbsp;25.06.2010</span>
            </div>
        </div>
    </div>
</footer>
</div>
<!--  start modals-->
<!-- #modal-call-second-->
<div id="modal-call-second" style="display: none">
    <div class="modal-win">

        <?php the_field('текст_вверху','options'); ?>
        <div class="row">
          <?php
                if( have_rows('столбик','options') ): while ( have_rows('столбик','options') ) :
                the_row();
                ?>
                <div class="alpha col col-md-4 col-6">
                    <div class="alpha__name"><?php the_sub_field('заголовок'); ?></div>
                    <?php the_sub_field('текст'); ?>
                </div>
			<?php  endwhile;  else :  endif;  ?>
        </div>
			<?php the_field('текст-мод2','options'); ?>
    </div>
</div>
<!-- /#modal-call-second-->

<!-- #modal-call-first-->
<div id="modal-call-first" style="display: none">
    <div class="modal-win modal-win--first">
			<?php the_field('текст-мод','options'); ?>
    </div>
</div>
<!-- /#modal-call-first// #modal-call-first -->
<!-- #modal-call-first-->
<div id="modal-call-3" style="display: none">
    <div class="modal-win modal-win--first">
			<?php the_field('текст-мод_3','options'); ?>
    </div>
</div>
<!-- /#modal-call-third// #modal-call-third
-->
<div id="enter-modal" style="display: none">
    <div class="modal-win enter-modal">
        <h3>Уважаемый посетитель</h3>
        <p>Представленная на&nbsp;сайте информация относится к&nbsp;лекарственным препаратам отпускаемым по&nbsp;рецепту врача.</p>
        <p>Нажимая &laquo;подтверждаю&raquo; Вы&nbsp;подтверждаете что являетесь фармацевтическим или медицинским работником</p>
        <button class="btn btn-warning modal-close-js">Подтверждаю</button>
    </div>
</div>
<!-- /#modal-call-first-->

<?php wp_footer(); ?>
 
</body>
</html>
