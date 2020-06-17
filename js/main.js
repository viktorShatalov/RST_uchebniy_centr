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

    jQuery('.first').click(function () {
        jQuery('.dropdown__hide').toggleClass('active')
    });

})
