<?php 


	/*
	* *****************************************************
	*/
	add_shortcode('headerblock', 'headerblock_func');
	function headerblock_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start headerBlock-->
			<div class="headerBlock section bg-wrap" id="headerBlock">
<!--			    <img class="object-fit-js picture-bg" src="img/head-bg.jpg" alt="" loading="lazy"/>-->
                <video loading="lazy" preload="auto" no-controls="no-controls" autoplay="autoplay" loop="loop" playsinline="playsinline" muted="muted">
                    <source src="<?= $get_template_directory_uri;?>/public/video/1.webm" type="video/webm"/>
                    <source src="<?= $get_template_directory_uri;?>/public/video/1.mp4" type="video/mp4"/>
                </video>
				<div class="container">
					<div class="headerBlock__inner">
						<h1><?php the_field('заголовок-1'); ?></h1>
						<?php
                            $image = get_field('изображение-1');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            } ?>
						<?php the_field('текст-1'); ?>
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
	add_shortcode('sAdv', 'sAdv_func');
	function sAdv_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sAdv-->
			<section class="sAdv section" id="sAdv">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-2'); ?></h2>
					</div>
					<div class="sAdv__head ">
						<ul class="wow wow animate__fadeInUp">
							<li><?php the_field('список-2'); ?></li>
						</ul>
						<div class="row ">
                             <?php
                                if( have_rows('картинка_с_текстом') ): while ( have_rows('картинка_с_текстом') ) :
                                    the_row();
                                    ?>
                                    <div class="sAdv__col col-md-4 wow wow animate__fadeInUp">
                                        <?php
                                        $image1 = get_sub_field('изображение');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image1 ) {
                                            echo wp_get_attachment_image( $image1, $size,  "", ["class" => ""] );
                                        } ?>
                                        <div class="sAdv__title"><?php the_sub_field('описание'); ?></div>
                                    </div>
                                <?php  endwhile;  else :  endif;  ?>
						</div>
						<ul class="wow wow animate__fadeInUp"><?php the_field('второй_список'); ?></ul>
					</div>
					<div class="sAdv__body">
						<h2 class="wow wow animate__fadeInUp"><?php the_field('заголовок2-2'); ?></h2>
						<div class="sAdv__block wow wow animate__fadeInUp">
							<div class="sAdv__block-inner">
								<?php the_field('текст3'); ?>
								<?php
                                    $image1 = get_field('изображение-2');
                                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                    if( $image1 ) {
                                        echo wp_get_attachment_image( $image1, $size,  "", ["class" => ""] );
                                    } ?>
							</div>
						</div>
					</div>
					<div class="sAdv__footer wow wow animate__fadeInUp"><?php the_field('текст_в_подвале'); ?></div>
				</div>
			</section>
			<!-- end sAdv-->
        <?php
    return ob_get_clean();

}
	/*
	* *****************************************************
	*/
	add_shortcode('sCatalog', 'sCatalog_func');
	function sCatalog_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sCatalog-->
			<section class="sCatalog section" id="sCatalog">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-3'); ?></h2>
					</div>
					<?php the_field('текст-3'); ?>
					<div class="row">
					     <?php
                                if( have_rows('товар') ): while ( have_rows('товар') ) :
                                    the_row();
                                    ?>

                        <div class="sCatalog__col col-md-6 col-lg-4 wow wow animate__fadeInUp">
                            <div class="sCatalog__item d-flex flex-column align-items-center">
                                <div class="sCatalog__title"><?php the_sub_field('название'); ?></div>
                                <div class="sCatalog__img img-wrap text-center">
                                    <?php
                                        $image1 = get_sub_field('изображение');
                                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                        if( $image1 ) {
                                            echo wp_get_attachment_image( $image1, $size,  "", ["class" => ""] );
                                        } ?>
                                </div>
                                <div class="sCatalog__descr text-center"><?php the_sub_field('описание'); ?></div>
                                <div class="sCatalog__license"><?php the_sub_field('лицензия'); ?></div>
                            </div>
                        </div>
					<?php  endwhile;  else :  endif;  ?>
					</div>
				</div>
			</section>
			<!-- end sCatalog-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sWhereBuy', 'sWhereBuy_func');
	function sWhereBuy_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sWhereBuy-->
			<section class="sWhereBuy section" id="sWhereBuy">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-4'); ?></h2>
					</div>
					<div class="sWhereBuy__row row">

					    <?php
                            $images = get_field('изображения-4');
                            $size = '500х500'; // (thumbnail, medium, large, full or custom size)
                            if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                            <div class="sWhereBuy__col col-lg-3 col-md-4 col-6 wow wow animate__fadeInUp">
                                <a href="<?php echo esc_html($image['title']); ?>" class="sWhereBuy__item text-center">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  loading="lazy"/>
                                </a>
                            </div>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<!-- end sWhereBuy-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sMethod', 'sMethod_func');
	function sMethod_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sMethod-->
			<section class="sMethod section" id="sMethod">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2> <?php the_field('заголовок-5'); ?></h2>
					</div>
					<div class="sMethod__row row row-cols-2">
					    <?php
                            $images = get_field('иконки');
                            if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                            <div class="col col-md-4 wow wow animate__fadeInUp">
                                <div class="sMethod__item">
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  loading="lazy"/>
                                    <div class="sMethod__title"><?php echo esc_html($image['caption']); ?></div>
                                </div>
                            </div>

						<?php endforeach; ?>  <?php endif; ?>
					</div>
					<div class="row justify-content-between">
						<div class="sMethod__col col-md-7 col-12 wow wow animate__fadeInUp">
							<p class="sMethod__descr"><?php the_field('текст-5'); ?></p>
						</div>
						<div class="sMethod__download col-md-5 col-12 wow wow animate__fadeInUp"><a class="sMethod__btn" href="#">
								<svg class="icon icon-method-i-pdf ">
									<use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#method-i-pdf"></use>
								</svg>Инструкция по применению					</a>
							<p class="sMethod__more"><?php the_field('текст_под_кнопкой'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<!-- end sMethod-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/

	/*
	* *****************************************************
	*/
	add_shortcode('sRecomendation', 'sRecomendation_func');
	function sRecomendation_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sRecomendation-->
			<section class="sRecomendation section" id="sRecomendation">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2> <?php the_field('заголовок-6'); ?></h2>
					</div>
					 <?php
                                if( have_rows('список-6') ): while ( have_rows('список-6') ) :
                                    the_row();
                                    ?>

                                    <?php
                                        $link = get_sub_field('ссылка');
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
						<div class="ref-item wow wow animate__fadeInUp">
						    <a class="ref-item__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<div class="ref-item__descr"><?php the_sub_field('описание'); ?></div>
						</div>

						<?php  endwhile;  else :  endif;  ?>
				</div>
			</section>
			<!-- end sRecomendation-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
add_shortcode('sOtherCountries', 'sOtherCountries_func');
	function sOtherCountries_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sOtherCountries-->
			<section class="sOtherCountries section" id="sOtherCountries">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-7'); ?></h2>
					</div>
					<div class="sOtherCountries__agencies"><?php the_field('текст-7'); ?></div>
					<div class="sOtherCountries__reg">Год регистрации:
					</div>
					<div class="flags-container row">
					<?php
                        if( have_rows('страны') ): while ( have_rows('страны') ) :
                            the_row();
                            ?>
						<div class="col-lg-3 col-6 wow wow animate__fadeInUp">
							<div class="flags-container__item">
								<div class="flags-container__img img-wrap">
								 <?php
                                        $image1 = get_sub_field('флаг');
                                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                        if( $image1 ) {
                                            echo wp_get_attachment_image( $image1, $size,  "", ["class" => ""] );
                                        } ?>
								</div>
								<div class="flags-container__country"><?php the_sub_field('название'); ?></div>
								<div class="flags-container__year"><?php the_sub_field('год'); ?></div>
							</div>
						</div>
						 <?php  endwhile;  else :  endif;  ?>
					</div>
					<p class="sOtherCountries__descr wow wow animate__fadeInUp"><?php the_field('текст-7-1'); ?></p>
				</div>
			</section>
			<!-- end sOtherCountries-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/


	add_shortcode('sAbout', 'sAbout_func');
	function sAbout_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sAbout-->
			<section class="sAbout section" id="sAbout">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-8'); ?></h2>
					</div>
					<div class="sAbout__content ">

						   <?php the_field('текст-8'); ?>
					</div>
					<div class="sAbout__warning wow wow animate__fadeInUp">
					     <?php the_field('текст-8-1'); ?>
					</div>
					<div class="symptoms wow wow animate__fadeInUp">
					     <?php the_field('текст-8-2'); ?>
						<div class="symptoms-list row">
						     <?php
                            $images = get_field('иконки-8');
                            if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
							<div class="symptoms-list__item col col-lg-2 col-sm-4 col-6"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="" loading="lazy"/>
								<div class="symptoms-list__title"><?php echo esc_html($image['caption']); ?></div>
							</div>

							<?php endforeach; ?>  <?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<!-- end sAbout-->
        <?php
    return ob_get_clean();

}



	/*
	* *****************************************************
	*/
	add_shortcode('sComplications', 'sComplications_func');
	function sComplications_func()
	{
			global $get_template_directory_uri, $delay;
			ob_start();
			?>
        <!-- start sComplications-->
			<section class="sComplications section" id="sComplications">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-9'); ?></h2>
					</div>
					<div class="sComplications__row row">

					     <?php
                            $images = get_field('изображения-9');
                            if( $images ): ?>
                            <?php foreach( $images as $image ): ?>

						<div class="sComplications__col col-lg-4 col-sm-6 wow wow animate__fadeInUp">
							<div class="sComplications__img-wrap">
							    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt=""/>
							</div>
							<div class="sComplications__title"><?php echo $image['caption']; ?></div>
						</div>

						<?php endforeach; ?>  <?php endif; ?>
					</div>
				</div>
			</section>
			<!-- end sComplications-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sTreatment', 'sTreatment_func');
	function sTreatment_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 ?>
        <!-- start sTreatment-->
			<section class="sTreatment section" id="sTreatment">
				<div class="container">
					<div class="section-title wow wow animate__fadeInUp">
						<h2><?php the_field('заголовок-10'); ?></h2>
					</div>
					<p class="sTreatment__descr wow wow animate__fadeInUp"><?php the_field('текст-10'); ?></p>
					<div class="row">
					    <?php
                        if( have_rows('карточки-10') ): while ( have_rows('карточки-10') ) :
                            the_row();
                            ?>
						<div class="col col-sm-6 wow wow animate__fadeInUp">
							<div class="treatment-item">
								<div class="treatment-item__title"><?php the_sub_field('заголовок'); ?></div>
								<div class="treatment-item__descr"><?php the_sub_field('текст'); ?></div>
							</div>
						</div>
						<?php  endwhile;  else :  endif;  ?>
					</div>
					<div class="sTreatment__video wow wow animate__fadeInUp">
                        <video loading="lazy"   controls     poster="<?= $get_template_directory_uri;?>/public/video/poster.webp"  >
                            <source src="<?= $get_template_directory_uri;?>/public/video/3.webm" type="video/webm"/>
                            <source src="<?= $get_template_directory_uri;?>/public/video/3.mp4" type="video/mp4"/>
                        </video>
                    </div>
				</div>
			</section>
			<!-- end sTreatment-->
        <?php
    return ob_get_clean();

}

	/*
	* *****************************************************
	*/
	add_shortcode('sFAQ', 'sFAQ_func');
	function sFAQ_func()
	{
		 global $get_template_directory_uri, $delay, $post;
		 ob_start();
		 ?>
        <!-- start sFAQ-->
        <section class="sFAQ section" id="sFAQ">
            <div class="container">
                <div class="section-title wow wow animate__fadeInUp">
                    <h2><?php the_field('заголовок-11'); ?></h2>
                </div>
                <div class="dd-group dd-group-js">
                    <?php
                        if( have_rows('вопросы') ): while ( have_rows('вопросы') ) :
                            the_row();
                            ?>
                    <div class="dd-group__item wow wow animate__fadeInUp">
                        <div class="dd-group__head dd-head-js"><?php the_sub_field('заголовок'); ?></div>
                        <div class="dd-group__content dd-content-js"><?php the_sub_field('текст'); ?></div>
                    </div>
						<?php  endwhile;  else :  endif;  ?>
                </div>
            </div>
        </section>
        <!-- end sFAQ-->
        <?php
    return ob_get_clean();

}
