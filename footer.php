<section class="reviews">
        <div class="container">
            <div class="reviews__title">
                <div class="reviews__title-text">
                    <h3><?php the_field('reviews-title'); ?></h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tit.svg" alt="Відгуки">
                </div>
                <div class="reviews__img-intro">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tet.svg" alt="">
                </div>
            </div>
            <div class="reviews__intro">
                <div class="reviews__intro-fon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/flow-1.svg" alt="">
                </div>
                <div class="reviews__intro-title-1">
                    <h4><?php the_field('name_reviews-1'); ?></h4>
                    <div class="reviews__intro-text">
                        <?php the_field('text_reviews-1'); ?>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/аня.svg" alt="fon">
                </div>
                <div class="reviews__intro-title-2">
                    <h4><?php the_field('name_reviews-2'); ?></h4>
                    <div class="reviews__intro-text">
                    <?php the_field('text_reviews-2'); ?>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/софія.svg" alt="fon">
                </div>
            </div>
            <div class="reviews__flower-img">
                <img class="reviews__flower-1" src="<?php bloginfo('template_url'); ?>/assets/img/flow_rewie.svg" alt="flower">
                <img class="reviews__flower-2" src="<?php bloginfo('template_url'); ?>/assets/img/flow_rewie-2.svg" alt="flower">
            </div>
            <div class="reviews__inner">
                <div class="reviews__intro-title__maria">
                    <h4><?php the_field('name_reviews-3'); ?></h4>
                    <div class="reviews__intro-text__maria">
                    <?php the_field('text_reviews-3'); ?>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/марія.svg" alt="fon">
                    <div class="reviews__intro-title__maria__fon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/flow-2.svg" alt="fon">
                    </div>
                </div>
                <div class="reviews__intro-title__bogdan">
                    <h4><?php the_field('name_reviews-4'); ?></h4>
                    <div class="reviews__intro-bogdan">
                    <?php the_field('text_reviews-4'); ?>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Богдан.svg" alt="fon">
                    <div class="reviews__intro-title__bogdan-img">
                        <div class="title__bogdan-img__fon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/flow_rewie-2.svg" alt="">
                        </div>
                        <div class="title__bogdan-img__fon-2">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/like_flower.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="reviews__intro-title-5">
                <h4><?php the_field('name_reviews-5'); ?></h4>
                <div class="reviews__intro-text-5">
                <?php the_field('text_reviews-5'); ?>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/настя.svg" alt="fon">
                <div class="reviews__intro-title-5__fon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/flow_rewie.svg" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Якесь речення Якесь речення Якесь речення Якесь речення Якесь речення Якесь речення</p>
            <input type="text" placeholder="Ім'я">
            <input type="text" placeholder="Номер телефону">
            <button>Записатись</button>
        </div>
    </div>
<?php wp_footer(); ?>
    <!-- <script src="main.js"></script> -->
</body>

</html>