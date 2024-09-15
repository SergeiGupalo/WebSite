<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<section class="curs">
    <div class="container">
        <div class="curs__title">
            <h2><?php the_field('curs_title'); ?></h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/tit.svg" alt="background">
        </div>
        <div class="curs__center">
            <div class="curs__text">
                <?php the_field('curs_text'); ?>
            </div>
            <div class="curs__img">
                <div class="curs_tet">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tet.svg" alt="tetr">
                </div>
                <div class="curs_flower">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/flower.svg" alt="flower">
                </div>
            </div>
        </div>
        <div class="curs__block">
            <div class="curs__block-intro">
                <span><?php the_field('block_1_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/70_років.svg" alt="Вміст курсу – 70 уроків">
            </div>
            <div class="curs__block-intro">
                <span><?php the_field('block_2_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/9_місяців.svg" alt="Тривалість курсу – 9 місяців">
            </div>
            <div class="curs__block-intro">
                <span><?php the_field('block_3_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Як_часто_займатися.svg" alt="Як щасто займатися?">
            </div>
            <div class="curs__block-intro">
                <span><?php the_field('block_4_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/3.svg" alt="Який вигляд мають заняття?">
            </div>
            <div class="curs__block-intro">
                <span><?php the_field('block_5_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/4.svg" alt="Коли проходять заняття?">
            </div>
            <div class="curs__block-intro">
                <span><?php the_field('block_6_curs'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/6.svg" alt="Вартість">
            </div>
        </div>
    </div>
</section>

<section class="like">
    <div class="container">
        <div class="like__title">
            <div class="like__title-text">
                <h3><?php the_field('like_curs'); ?></h3>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/like_title.svg" alt=" Перевваги курсу">
            </div>
            <div class="like__title-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/litel_flower.svg" alt="flower">
                <img class="like__title-img__intro" src="<?php bloginfo('template_url'); ?>/assets/img/like_flower.svg" alt="flower">
            </div>
        </div>
        <div class="like__content">
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-1'); ?></div>
                <div class="intro__text"><?php the_field('text-block-1'); ?></div>
            </div>
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-4'); ?></div>
                <div class="intro__text"><?php the_field('text-block-4'); ?></div>
            </div>
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-2'); ?></div>
                <div class="intro__text"><?php the_field('text-block-2'); ?></div>
            </div>
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-5'); ?></div>
                <div class="intro__text"><?php the_field('text-block-5'); ?></div>
            </div>
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-3'); ?></div>
                <div class="intro__text"><?php the_field('text-block-3'); ?></div>
            </div>
            <div class="intro__inner">
                <div class="intro__number"><?php the_field('number-block-6'); ?></div>
                <div class="intro__text"><?php the_field('text-block-6'); ?></div>
            </div>
        </div>

        <div class="like__img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/38@4x-8.svg" alt="">
        </div>
    </div>
</section>

<?php get_footer(); ?>