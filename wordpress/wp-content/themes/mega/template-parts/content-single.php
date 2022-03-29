<?php
global $whatsapp_tel_global;
?>
<section class="sContent " id="sContent">
    <div class="article-head">
        <div class="social">
            <div class="social__item">
                <svg class="icon icon-eye ">
                    <use xlink:href="/wp-content/themes/stairs/img/svg/sprite.svg#eye"></use>
                </svg>
                <span class="social__count"><?php echo get_post_meta( $post->ID, 'views', true ); ?></span>
            </div>
            <div class="social__item">
                <svg class="icon icon-conversation ">
                    <use xlink:href="/wp-content/themes/stairs/img/svg/sprite.svg#conversation"></use>
                </svg>
                <span class="social__count"><?php echo get_comments_number();?></span>
            </div>
        </div>
        <div class="article-head__date">
           <?php echo  get_the_date();?>
        </div>
    </div>
    <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
    <?php if(has_post_thumbnail()): ?>
        <div class="sContent__img-wrap">
            <?php the_post_thumbnail('large',['class'=>'res-i']); ?>
        </div>
    <?php endif; ?>
    <?php
    the_content( sprintf(
        wp_kses(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stairs' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );
    ?>
    <?php
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
    <div class="questions">
        <div class="questions__content"><span>Остались вопросы?</span><span>Задай их&nbsp;в&nbsp;whatsapp!</span>
        </div>
        <a class="questions__btn btn btn-body2" target="_blank"  href="<?php echo $whatsapp_tel_global;?>">задать вопрос в&nbsp;WhatsApp</a>
    </div>
    <?php include __DIR__.'/related.php';?>
    <?php include __DIR__.'/form.php';?>
</section>
<script>
const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
	const yOffset = -145; 
	const element = document.getElementById(blockID);
	const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
    window.scrollTo({top: y, behavior: 'smooth'});
	

  })
}
</script>