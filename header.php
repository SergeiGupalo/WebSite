<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <meta name="viewport" content="width=, initial-scale=1.0"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__intro">
                <div class="header__content">
                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="menu-icon" onclick="toggleMenu()">
                        &#9776;
                    </div>
                    <nav class="menu">
                        <div class="close-btn" onclick="toggleMenu()">&times;</div>
                        <ul>
                            <li><a href="#">Про курс</a></li>
                            <li><a href="#">Переваги</a></li>
                            <li><a href="#">Шлях до знань</a></li>
                            <li><a href="#">Відгуки</a></li>
                        </ul>
                        <div class="menu__socials">
                            <a class="header__phone" href="<?php the_field('phone'); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="number">
                            </a>
                            <a class="header__instagram" href="<?php the_field('instagram_link'); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <section class="block">
                <div class="block__intro">
                    <div class="block__intro-inner">
                        <div class="block__text">
                            <h2> <?php the_field('header'); ?></h2>
                        </div>

                    </div>
                    <div class="block__intro-foto">
                        <img class="foto__avtor" src="<?php bloginfo('template_url'); ?>/assets/img/img.svg" alt="foto">
                        <img class="foto__back" src="<?php bloginfo('template_url'); ?>/assets/img/28@4x-8.svg" alt="back_img">
                    </div>
                    <div class="block__btn">
                        <a id="openModalBtn">Перший урок
                            безкоштовно!</a>
                    </div>
                </div>
            </section>
        </div>
    </header>