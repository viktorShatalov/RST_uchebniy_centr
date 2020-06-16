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

    // magnific-popup
    // jQuery(document).ready(function () {
    //     jQuery('.popup-gallery').magnificPopup({
    //         delegate: 'a',
    //         type: 'image',
    //         tLoading: 'Loading image #%curr%...',
    //         mainClass: 'mfp-with-zoom',

    //         zoom: {
    //             enabled: true, // By default it's false, so don't forget to enable it

    //             duration: 300, // duration of the effect, in milliseconds
    //             easing: 'ease-in-out', // CSS transition easing function

    //             // The "opener" function should return the element from which popup will be zoomed in
    //             // and to which popup will be scaled down
    //             // By defailt it looks for an image tag:
    //             opener: function (openerElement) {
    //                 // openerElement is the element on which popup was initialized, in this case its <a> tag
    //                 // you don't need to add "opener" option if this code matches your needs, it's defailt one.
    //                 return openerElement.is('img') ? openerElement : openerElement.find('img');
    //             }
    //         },
    //         gallery: {
    //             enabled: true,
    //             navigateByImgClick: true,
    //             preload: [0, 1]
    //         },
    //         image: {
    //             tError: '<a href="%url%">Картинка #%curr%</a> не может загрузиться.',
    //             titleSrc: function (item) {
    //                 return item.el.attr('title') + '<small>Ждём-с...</small>';
    //             }
    //         }
    //     });
    // });

})
