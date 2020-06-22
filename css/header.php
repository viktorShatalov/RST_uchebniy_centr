<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body>
    <div id="top__row-phone" class="uk-modal">
        <div class="uk-modal-dialog">
            <span class="close__btn uk-modal-close"></span>
            <ul class="top__row-phone">
                <li>
                    <span>Москва</span>
                    <span><a href="tel:<?php echo carbon_get_theme_option('tel_mos') ?>"><?php echo carbon_get_theme_option('tel_mos') ?></a></span>
                </li>
                <li>
                    <span>СПБ</span>
                    <span><a href="tel:<?php echo carbon_get_theme_option('tel_spb') ?>"><?php echo carbon_get_theme_option('tel_spb') ?></a></span>
                </li>
                <li>
                    <span>Общие</span>
                    <span><a href="tel:<?php echo carbon_get_theme_option('tel') ?>"><?php echo carbon_get_theme_option('tel') ?></a></span>
                </li>
            </ul>
        </div>
    </div>

    <div id="top__row-mail" class="uk-modal">
        <div class="uk-modal-dialog">
            <span class="close__btn uk-modal-close"></span>
            <ul class="top__row-mail">
                <li>
                    <span><a href="mailto:<?php echo carbon_get_theme_option('email') ?>"><?php echo carbon_get_theme_option('email') ?></a></span>
                </li>
            </ul>
        </div>
    </div>

    <div id="top__row-watsUp" class="uk-modal">
        <div class="uk-modal-dialog">
            <span class="close__btn uk-modal-close"></span>
            <ul class="top__row-watsUp">
                <li>
                    <span>WhatsApp</span><span><a href="tel:<?php echo carbon_get_theme_option('w_a') ?>"><?php echo carbon_get_theme_option('w_a') ?></a></span>
                </li>
            </ul>
        </div>
    </div>

    <div id="top__row-telega" class="uk-modal">
        <div class="uk-modal-dialog">
            <span class="close__btn uk-modal-close"></span>
            <ul class="top__row-telega">
                <li>
                    <span>Telegram</span><span><a href="tel:<?php echo carbon_get_theme_option('telega') ?>"><?php echo carbon_get_theme_option('telega') ?></a></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- header -->
    <header id="header">
        <div class="top__row">
            <div class="conteiner">
                <ul class="mobile__show">
                    <li>
                        <a href="#top__row-phone" data-uk-modal>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/mobile/Phone.png' ?>" alt="icon phone"></a>
                    </li>
                    <li>
                        <a href="#top__row-mail" data-uk-modal>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/mobile/mail.png' ?>" alt="icon mail"></a>
                    </li>
                    <li>
                        <a href="#top__row-watsUp" data-uk-modal>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/mobile/whatsapp.png' ?>" alt="icon whats-up"></a>
                    </li>
                    <li>
                        <a href="#top__row-telega" data-uk-modal>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/mobile/telega.png' ?>" alt="icon Telegram"></a>
                    </li>
                </ul>
                <ul class="top__row-items mobile__hide">
                    <li>
                        <ul class="dropdown__phone">
                            <li class="dropdown__show">
                                <span class="pseudo first">Москва</span>
                                <span><a href="tel:<?php echo carbon_get_theme_option('tel_mos') ?>"><?php echo carbon_get_theme_option('tel_mos') ?></a></span>
                            </li>
                            <li class="dropdown__hide">
                                <span class="pseudo">СПБ</span>
                                <span><a href="tel:<?php echo carbon_get_theme_option('tel_spb') ?>"><?php echo carbon_get_theme_option('tel_spb') ?></a></span>
                                <span class="dropdown__hide-close"></span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Общие</span>
                        <span><a href="tel:<?php echo carbon_get_theme_option('tel') ?>"><?php echo carbon_get_theme_option('tel') ?></a></span>
                    </li>
                    <li>
                        <a href="mailto:<?php echo carbon_get_theme_option('email') ?>"><?php echo carbon_get_theme_option('email') ?></a>
                    </li>
                    <li>
                        <ul class="social">
                            <li>
                                <a href="<?php echo carbon_get_theme_option('w_a') ?>">WhatsApp</a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('telega') ?>">Telegram</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center__row">
            <div class="conteiner">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo carbon_get_theme_option('rst_logo') ?>" alt="Сертификационнаяи экспертная организация логотип">
                    </a>
                </div>
                <div class="search">
                    <!--                <form>-->
                    <!--                    <input type="text" placeholder="Поиск по сайту">-->
                    <!--                    <button>-->
                    <!--                        <img src="--><?php //echo get_template_directory_uri() 
                                                                ?>
                    <!--/assets/img/icon/search_icon.png" alt="search__icon">-->
                    <!--                    </button>-->
                    <!--                </form>-->
                    <?php get_search_form() ?>
                </div>
                <div class="get_request">
                    <button data-uk-modal="{target:'#get_request'}">Подать заявку на обучение</button>
                </div>
            </div>
        </div>
        <div class="mobile__menu mobile__show">
            <a href="/" class="back__to"></a>
            <a href="/" class="home"></a>
            <div id="search"></div>
            <div class="burger">
                <span></span>
            </div>
        </div>
        <nav class="conteiner">
            <ul>
                <?php
                wp_nav_menu([
                    'theme_location'  => 'menu_header',
                    'container' => false,        // Убираем контейнер у меню, можно добавить свой
                    'items_wrap'      => '%3$s', // Убираем обёртку <ul>
                    'menu_class'    => '',
                ]);
                ?>
            </ul>
        </nav>
    </header>
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>