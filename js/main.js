jQuery(document).ready(function () {
    //  mobile-menu

    jQuery('.burger').click(function () {
        jQuery('.burger,#header nav ul li:nth-child(1),main .left__sidebar').toggleClass('active');
        jQuery('html,body').toggleClass('lock');
        jQuery('#breadcumbs').toggleClass('hide');
    })
    jQuery('.close-menu,main .left__sidebar').click(function () {
        jQuery('.burger,#header nav ul li:nth-child(1),main .left__sidebar').removeClass('active');
    })

    // dropdown-phone

    jQuery('.first').click(function () {
        jQuery('.dropdown__hide').toggleClass('active')
    });
    jQuery('.dropdown__hide-close').click(function () {
        jQuery('.dropdown__hide').removeClass('active')
    });

    // Перемещаю элементы 

    if (window.innerWidth < 420) {
        jQuery('footer .footer__top-row .conteiner p').html('Не нашли ответа на свой' + "<br>" + "вопрос?" + "<br>" + "Задайте его нашему специалисту!")
        jQuery('.form__resoult-items .item:nth-child(1) .item-rigth p').html('Цена и сроки доставки:' + "<br>" + "0 руб. / 8-11 дн.")
    }
    if (window.innerWidth < 768) {
        jQuery('.search form input').attr("placeholder", 'Поиск...')
        jQuery('.mobile__menu #search').append(jQuery('.center__row .search'));
    }

    jQuery('.get_request button,.get_request-awesome button').removeClass('uk-button')


})