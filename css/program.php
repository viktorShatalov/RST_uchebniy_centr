<?php
/*
Template Name: Программа
Template post type: post
*/
?>

<?php get_header(); ?>
<main>
    <div class="conteiner">
        <div class="left__sidebar">
            <div class="left__sidebar-link cabinet">
                <a href="#">Вход<br> в личный кабинет</a>
            </div>
            <div class="popular">
                <h2>Популярные<br> програмы обучения</h2>
                <ul>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'side_3',
                        'container' => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap' => '%3$s', // Убираем обёртку <ul>
                        'menu_class' => '',
                        'link_before' => '<span>',
                        'link_after'  => '</span>'
                    ]);
                    ?>
                </ul>
            </div>
            <div class="popular additional__programs">
                <h2>Дополнительные<br> програмы</h2>
                <ul>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'side_dop_prog',
                        'container' => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap' => '%3$s', // Убираем обёртку <ul>
                        'menu_class' => '',
                        'link_before' => '<span>',
                        'link_after'  => '</span>'
                    ]);
                    ?>
                </ul>
            </div>
            <div class="social">
                <h2>РегионСтандарт<br> в соцсетях</h2>
                <ul>
                    <a href="<?php echo carbon_get_theme_option('vk') ?>">
                        <li></li>
                    </a>
                    <a href="<?php echo carbon_get_theme_option('face') ?>">
                        <li></li>
                    </a>
                    <a href="<?php echo carbon_get_theme_option('insta') ?>">
                        <li></li>
                    </a>
                    <a href="<?php echo carbon_get_theme_option('yan') ?>">
                        <li></li>
                    </a>
                    <a href="<?php echo carbon_get_theme_option('youtube') ?>">
                        <li></li>
                    </a>
                </ul>
            </div>
            <div class="our__activity">
                <h2>Наша деятельность</h2>
                <ul>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'side_2',
                        'container' => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap' => '%3$s', // Убираем обёртку <ul>
                        'menu_class' => '',
                        'link_before' => '<span>',
                        'link_after'  => '</span>'
                    ]);
                    ?>
                </ul>
            </div>
            <div class="apply__education">
                <a href="#get_request" data-uk-modal>Подать заявку<br><span>на обучение</span></a>
            </div>
        </div>
        <div class="content">
            <section id="program__single">
                <div class="head">
                    <div class="img">
                        <img src="<?php echo carbon_get_the_post_meta('prog_icon') ?>" alt="icon Пожарно-технический минимум">
                    </div>
                    <h1>
                        <?php the_title() ?>
                        <p>
                            <?php echo carbon_get_the_post_meta('prog_head') ?>
                        </p>
                    </h1>
                </div>
                <div class="content">
                    <div class="switcher">
                        <ul class="switch_btn" data-uk-switcher="{connect:'#switcher'}">
                            <li><a>Дистанционно</a></li>
                            <li><a>Очно</a></li>
                        </ul>
                        <ul id="switcher" class="uk-switcher">
                            <li>
                                <div class="flex">
                                    <p class="price">Стоимость обучения:
                                        <span><?php echo carbon_get_the_post_meta('prog_cena_dist') ?></span></p>
                                    <p class="price__description"><?php echo carbon_get_the_post_meta('prog_cena_dist_desc') ?>
                                    </p>
                                </div>
                                <div class="get_request">
                                    <button class="uk-button" data-uk-modal="{target:'#get_request'}">Оставить
                                        заявку
                                    </button>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    <p class="price">Стоимость обучения:
                                        <span><?php echo carbon_get_the_post_meta('prog_cena_och') ?></span></p>
                                    <p class="price__description"><?php echo carbon_get_the_post_meta('prog_cena_och_desc') ?>
                                    </p>
                                </div>
                                <div class="get_request">
                                    <button class="uk-button" data-uk-modal="{target:'#get_request'}">Оставить
                                        заявку
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="attention">
                        <p>
                            <?php echo carbon_get_the_post_meta('prog_atan') ?>
                        </p>
                    </div>
                    <div class="advantages">
                        <p>Преимущества обучения в нашем учебном центре</p>
                        <div class="advantages__items">
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/delivery.png" alt="icon Срок получения удостоверения">
                                <p>Срок получения удостоверения от 1 дня</p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/paperplane.png" alt="icon Срок получения удостоверения">
                                <p>Отправка оригиналов заказным письмом Почтой России</p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/mail.png" alt="icon Срок получения удостоверения">
                                <p>Копии на e-mail в день прохождения теста</p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/paste.png" alt="icon Срок получения удостоверения">
                                <p>Актуальные программы обучения</p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/time.png" alt="icon Срок получения удостоверения">
                                <p>Обучение доступно 24 часа в сутки 7 дней в неделю</p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/headset.png" alt="icon Срок получения удостоверения">
                                <p>Консультации преподавателей в режиме ON-LINE</p>
                            </div>
                        </div>
                    </div>
                    <div class="how__do">
                        <p>Как пройти обучение по ПТМ</p>
                        <img src="/wp-content/uploads/2020/06/3.jpg" alt="Как пройти обучение по ПТМ">
                    </div>
                    <div class="get_request-awesome">
                        <p>Для получения подробной информации, оставьте заявку:</p>
                        <button class="uk-button" data-uk-modal="{target:'#get_request'}">Оставить заявку</button>
                    </div>
                    <div class="regulated">
                        <div class="regulated__items">
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/review.png" alt="icon Чем регулируется обучение
                                    пожарно-техническомому минимуму">
                                <p>
                                    <a href="<?php echo carbon_get_the_post_meta('prog_chem_reg_url') ?>"><?php echo carbon_get_the_post_meta('prog_chem_reg') ?></a>
                                </p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/review2.png" alt="icon Отзывы наших учащихся о нашем
                                    учебном центре">
                                <p><a href="/category/reviews/">Отзывы наших
                                        учащихся о нашем учебном центре</a></p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/review3.png" alt="icon Ответственность за отсутствие
                                    обучения">
                                <p><a href="/administrativnaya-otvetstvennost/">Ответственность
                                        за отсутствие обучения</a></p>
                            </div>
                            <div class="item">
                                <img src="/wp-content/uploads/2020/06/review4.png" alt="icon Периодичность обучения
                                    пожарно-техническому минимуму">
                                <p>
                                    <a href="<?php echo carbon_get_the_post_meta('prog_period_obuch_url') ?>"><?php echo carbon_get_the_post_meta('prog_period_obuch') ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="documents">
                        <p>Удостоверение о прохождении курсов по ПТМ</p>
                        <div class="flex">
                            <div class="item img">
                                <a href="<?php echo carbon_get_the_post_meta('prog_udost1') ?>" data-uk-lightbox title="Удостоверение о прохождении курсов">
                                    <img src="<?php echo carbon_get_the_post_meta('prog_udost1') ?>">
                                </a>
                                <a href="<?php echo carbon_get_the_post_meta('prog_udost2') ?>" data-uk-lightbox title="сертификат о прохождении курсов">
                                    <img src="<?php echo carbon_get_the_post_meta('prog_udost2') ?>">
                                </a>
                            </div>
                            <div class="float">
                                <div class="item description">
                                    <p>
                                        <?php echo carbon_get_the_post_meta('prog_udost_text1') ?>
                                    </p>
                                </div>
                                <div class="item description">
                                    <p>
                                        <?php echo carbon_get_the_post_meta('prog_udost_text2') ?>
                                    </p>
                                </div>
                                <div class="item get_request">
                                    <a href="/category/dokumenty-ob-obrazovanii/">Узнать подробнее об удостоверении</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery">
                        <div class="heading">
                            <p>Доставка документов</p>
                        </div>
                        <p>Копии удостоверения и протокола Вы получите на свою электронную почту в течение 5 минут
                            после сдачи экзаменационного теста (при условии подтверждения оплаты)
                        </p>
                        <div class="form">
                            <br>
                            <div class="form__resoult">
                                <div class="form__resoult-heading">
                                    <p>Доставка оригиналов документов, включая удостоверение
                                        и протокол, осуществляется:</p>
                                    <p>Сроки и стоимость доставки</p>
                                </div>
                                <div class="form__resoult-items">
                                    <div class="item">
                                        <div class="item-left">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/content/single_programm/Russian_Post.png" alt="icon Russian_Post">
                                            <p>
                                                ФГУП «Почта России» (заказное письмо с уведомлением). Трек-номер для
                                                отслеживания письма отправляется на электронную почту.
                                            </p>
                                        </div>
                                        <div class="item-rigth">
                                            <p>0 руб. / 8-11 дн.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-left">
                                            <img src="/wp-content/uploads/2020/06/post.png" alt="icon Post">
                                            <p>
                                                Доставка в курьерской службой в Ваш регион расчитывается
                                                индивидуально.
                                            </p>
                                        </div>
                                        <div class="item-rigth">
                                            <p>
                                                <span>2-3 дня<br> (в зависимости от региона)</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form__resoult-attention">Доставка курьером возможна не во все населенные
                                пункты региона.</p>
                            <div class="payment">
                                <p>Способы оплаты</p>
                                <div class="description">
                                    <p>Вы можете оплатить наши образовательные услуги следующими способами:</p>
                                </div>
                                <span><a href="<?php echo carbon_get_the_post_meta('prog_card_url') ?>">Банковской картой</a> (только для физ.лиц)</span>
                                <span><a href="<?php echo carbon_get_the_post_meta('prog_bank_url') ?>">Банковским переводом</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>