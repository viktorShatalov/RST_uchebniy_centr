jQuery(document).ready(function () {
    //  mobile-menu

    jQuery('.burger').click(function () {
        jQuery('.burger,.menu__items,.mobile__content').toggleClass('active');
        jQuery('html,body').toggleClass('lock');
    })
    jQuery('.close-menu').click(function () {
        jQuery('.burger,.menu__items,.mobile__content').removeClass('active');
    })

    // dropdown-phone

    jQuery('.dropdown__btn').click(function () {
        jQuery('.cabinet__dropdown,.dropdown__btn').toggleClass('active')
    });

})
