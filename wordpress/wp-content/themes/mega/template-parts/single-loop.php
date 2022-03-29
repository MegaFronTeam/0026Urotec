<?php
global $post;
$link=get_the_permalink();
?>
<article class="blog-article">
    <div class="article-head">
        <div class="social">
            <div class="social__item">
                <svg class="icon icon-eye ">
                    <use xlink:href="/wp-content/themes/stairs/img/svg/sprite.svg#eye"></use>
                </svg><span class="social__count"><?php echo get_post_meta( $post->ID, 'views', true ); ?></span>
            </div>
            <div class="social__item">
                <svg class="icon icon-conversation ">
                    <use xlink:href="/wp-content/themes/stairs/img/svg/sprite.svg#conversation"></use>
                </svg><span class="social__count"><?php echo get_comments_number();?></span>
            </div>
        </div>
        <div class="article-head__date">
            <?php echo  get_the_date();?>
        </div>
    </div>
    <a class="blog-article__title" href="<?php echo $link;?>">
        <h2><?php echo $post->post_title;?></h2>
        <?php if(has_post_thumbnail()): ?>
            <span class="blog-article__img-wrap">
                <?php the_post_thumbnail('large',['class'=>'res-i']); ?>
            </span>
        <?php endif; ?>
    </a>
    <?php the_excerpt(); ?>
    <div class="blog-article__link">
        <a href="<?php echo $link;?>">Читать далее</a>
    </div>
</article>
