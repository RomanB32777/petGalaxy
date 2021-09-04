jQuery(function ($) {
    $(document).ready(function () {
        $('#cats-carousel').fadeOut();
        /*$('#rooms-carousel').fadeOut();*/



        // console.log(templateUrl);

        $(".navbar-nav a").click(function (e) {
            // e.preventDefault();
            $('.navbar-collapse.show').collapse('hide');
        });


        $('.owl-carousel-dogs').owlCarousel({
            // items: 3,
            // margin: 30,
            // autoplay: true,
            // autoplayTimeout: 5000,
            // autoWidth:true,
            // responsive : {
            //     0: {
            //         items: 1,
            //         // loop: true,
            //         // margin: 100,
            //         // dots: true
            //     },
            //     500: {
            //         items: 2,
            //         loop:true
            //     },
            //     1000: {
            //         items: 3
            //     }
            // }
            margin: 10,
            center: false,
            // loop: true,
            rewind: true,
            mouseDrag: false,
            // navText: ['&#x27;next&#x27;','&#x27;prev&#x27;'],
            // autoplay: true,
            // lazyLoad: true,
            responsive: {
                320: {
                    items: 1
                },
                450: {
                    items: 1
                },
                800: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1100: {
                    items: 3
                }
            }
        });


        /*--------------CLIENTS-----------------------------------*/
        /*$('.owl-clients-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        })*/
        /*$('.owl-clients-carousel').owlCarousel({
            margin: 0 ,
            center: false,
            // loop: true,
            rewind: true,
            mouseDrag: false,
            // navText: ['&#x27;next&#x27;','&#x27;prev&#x27;'],
            // autoplay: true,
            // lazyLoad: true,
            responsive: {
                300: {
                    items: 1,
                    /!*margin: 10,*!/
                    touchDrag: true,
                    center: true,
                    nav:true
                },
                320: {
                    items: 1,
                    /!*margin: 10,*!/
                    touchDrag: true,
                    center: true,
                    nav:true
                },
                450: {
                    items: 1,
                    touchDrag: true,
                    center: true,
                    nav:true
                },
                800: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1100: {
                    items: 3
                }
            }
        });*/
        /*--------------CLIENTS-----------------------------------*/

        /*/!*--------------ROOMS-----------------------------------*!/
        $('.owl-rooms-carousel').owlCarousel({
            margin: 0 ,
            center: false,
            // loop: true,
            rewind: true,
            nav: true,
            mouseDrag: true,
            // navText: ['&#x27;next&#x27;','&#x27;prev&#x27;'],
            // autoplay: true,
            // lazyLoad: true,
            responsive: {
                320: {
                    items: 1,
                    center:true,
                    touchDrag: true,
                    nav:true
                },
                450: {
                    items: 1,
                    center:true,
                    touchDrag: true,
                    nav:true
                },
                800: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1100: {
                    items: 3
                }
            }
        });
        /!*--------------ROOMS-----------------------------------*!/*/

        $('.owl-carousel-cats').owlCarousel({
            margin: 20,
            items: 2,
            touchDrag: false,
            // autoplay: true,
            // autoplayTimeout: 5000,
            // autoWidth:true,
            responsive: {
                320: {
                    items: 1,
                    touchDrag: true
                },
                450: {
                    items: 1,
                    touchDrag: true
                },
                800: {
                    items: 2,
                    touchDrag: true
                }
            }
        });

        $('.owl-carousel-employees').owlCarousel({
            // margin: 58,
            items: 4,
            navText: ['', ''],
            loop:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                    margin: 38,
                },
                1200: {
                    items: 4,
                    margin: 50,
                }
            }
        });



        $('.owl-carousel-additionals').owlCarousel({
            // items: 3, 
            margin: 10,
            center: false,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: true,
            navText: [`<img class='nav-carosel-button nav-left' src='${templateUrl}/img/left.png'>`, `<img class='nav-carosel-button nav-right' src='${templateUrl}/img/right.png'>`],
            rewind: true,
            // autoWidth:true,  
            responsive: {
                320: {
                    items: 1,
                },
                450: {
                    items: 1
                },
                800: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1100: {
                    items: 3,
                }
            }
        })
    })
})