<?php
/*
Template Name: Цены
*/
?>
<?php get_header(); ?>
<main>
    <div class="conteiner">
        <div class="left__sidebar">
            <div class="left__sidebar-link cabinet">
                <a href="#">Вход<br> в личный кабинет</a>
            </div>
            <div class="programms">
                <ul>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'side_1',
                        'container' => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap' => '%3$s', // Убираем обёртку <ul>
                        'menu_class' => '',
                    ]);
                    ?>
                </ul>
            </div>
            <div class="left__sidebar-link verify__certificate">
                <a href="#">Проверить<br> удостоверение</a>
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
            <div class="apply__education">
                <a href="#get_request" data-uk-modal>Подать заявку<br><span>на обучение</span></a>
            </div>
        </div>
        <div class="content">
            <section id="price">
                <div class="head">
                    <h1>Цена на программы обучения</h1>
                </div>
                <div class="search">
                    <?php get_search_form() ?>
                </div>
                <div class="attention">
                    <p>
                        ПОЛУЧИ СКИДКУ! Чем больше программ и слушателей, тем больше скидка! Узнай свою скидку на
                        выбраную программу! <span><a href="#">Узнать подробнее</a></span>
                    </p>
                </div>
                <?php if (!wp_is_mobile()): ?>
                <div class="table mobile__hide">
                    <table>
                        <thead>
                        <tr>
                            <th><span>№<br>п/п</span></th>
                            <th><span>Название программы</span></th>
                            <th><span>Очное обучение, руб./чел.</span></th>
                            <th><span>Дистанцеонное обучение, руб./чел.
                                            в зависимости от количества
                                            слушателей или количества
                                            выбраных курсов</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span>Все виды обучения</span></td>
                        </tr>
                        <?php global $post;
                        $posts = get_posts("category=15&orderby=id&order=ASC&numberposts=200");
                        if ($posts) :
                            $i = 1;
                            foreach ($posts as $post) :
                                the_post();
                                setup_postdata($post); ?>
                                <tr>
                                    <td><span><?php echo $i ?></span></td>
                                    <td><span><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></span></td>
                                    <td><span><?php echo carbon_get_the_post_meta('prog_cena_och'); ?></span></td>
                                    <td><span><?php echo carbon_get_the_post_meta('prog_cena_dist'); ?></span></td>
                                </tr>
                                <?php
                                $i++;
                            endforeach;
                        endif;
                        wp_reset_postdata();
                        ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                <div class="mobile__table mobile__show">
                    <div class="heading">
                        <h2>Название программы</h2>
                        <p>Все виды обучения</p>
                    </div>
                    <div class="mobile__table-items">
                        <?php global $post;
                        $posts = get_posts("category=15&orderby=id&order=ASC&numberposts=200");
                        if ($posts) :
                            $i = 1;
                            foreach ($posts as $post) :
                                the_post();
                                setup_postdata($post); ?>
                            <div class="item">
                                    <a href="<?php echo get_permalink() ?>">
                                    <h3>
                                        <?php the_title() ?>
                                    </h3>
                                    </a>
                                <p>Очное: <span><?php echo carbon_get_the_post_meta('prog_cena_och'); ?></span></p>
                                <p>Дистанционное: <span><?php echo carbon_get_the_post_meta('prog_cena_dist'); ?></span></p>
                            </div>
                        <?php
                        endforeach;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>
