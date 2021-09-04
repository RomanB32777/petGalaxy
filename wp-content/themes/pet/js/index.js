var myCarousel = document.querySelector('#carouselFade')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 7000,
    //   wrap: false
})

var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))

triggerTabList.forEach(function (triggerEl) {

    var tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        tabTrigger.show()
    })
})

var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#navbar'
})


var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.getElementById("header").style.top = "0px";
    } else if (prevScrollpos < 120) {
        document.getElementById("header").style.top = "0px";
    }
    else {
        document.getElementById("header").style.top = "-120px";
    }
    prevScrollpos = currentScrollPos;
}



new Skroll()
    .add(".animate", {
        delay: 100,
        duration: 600,
        animation: "fadeInUp",
        // repeat:false,   
    })
    .add(".carousel-block-additionals", {
        delay: 100,
        duration: 600,
        animation: "fadeInUp",
        // repeat:false,   
    })
    .init();


let btnContainer = document.getElementById('price-buttons')
let priceButtons = [].slice.call(btnContainer.getElementsByClassName('select-price-button'))

priceButtons.forEach(btn => {
    btn.onclick = () => {

        let active = btnContainer.getElementsByClassName('active')
        active[0].className = active[0].className.replace(" active", "");

        btn.classList.add("active")
        let carousel = btn.dataset.carousel
        if (carousel == '#dogs-carousel') {
            jQuery('#cats-carousel').fadeOut()
            jQuery(carousel).fadeIn()
        }
        else {
            jQuery('#dogs-carousel').fadeOut()
            jQuery(carousel).fadeIn()
        }

        // $("#dogs-carousel").fadeOut();
    }
})


let btnGalleryContainer = document.getElementById('photos-buttons');
let galleryButtons = [].slice.call(btnGalleryContainer.getElementsByClassName('select-photo-button'));

galleryButtons.forEach(btn => {
    btn.onclick = () => {

        let activeItem = btnGalleryContainer.getElementsByClassName('active');
        activeItem[0].className = activeItem[0].className.replace(" active", "");


        btn.classList.add("active");
        let carousel = btn.dataset.carousel;





        if (carousel == '#clients-carousel') {
            jQuery('#rooms-carousel').parent('.swiper-container-wrapper').removeClass('active');
            jQuery(carousel).parent('.swiper-container-wrapper').addClass('active');
            jQuery('#rooms-carousel').removeClass('active');
            jQuery(carousel).addClass('active');
        }else {
            jQuery('#clients-carousel').parent('.swiper-container-wrapper').removeClass('active')
            jQuery(carousel).parent('.swiper-container-wrapper').addClass('active');
            jQuery('#clients-carousel').removeClass('active');
            jQuery(carousel).addClass('active');
       }
    }
})




/*----------PHOTOS-GALLERY-----------------------------*/
/*let btnContainerPhoto = document.getElementById("photos-buttons"),
    photoButtons = [].slice.call(btnContainerPhoto.getElementsByClassName("select-photo-button"));


photoButtons.forEach(t => {
    t.onclick = () => {
        let e = btnContainerPhoto.getElementsByClassName("active");
        e[0].className = e[0].className.replace(" active", ""), t.classList.add("active");
        var a = t.dataset.carousel;
        ("#clients-carousel" == a ? $("#rooms-carousel") : $("#clients-carousel")).fadeOut(), $(a).fadeIn()
    }
}), $(document).ready(function () {
    $("#rooms-carousel").fadeOut(), $(".navbar-nav a").click(function (e) {
        $(".navbar-collapse.show").collapse("hide")
    }), $(".owl-carousel-clients").owlCarousel({
        margin: 10,
        center: !1,
        rewind: !0,
        mouseDrag: !1,
        responsive: {320: {items: 1}, 450: {items: 1}, 800: {items: 2}, 992: {items: 3}, 1100: {items: 3}}
    }), $(".owl-carousel-rooms").owlCarousel({
        margin: 10,
        items: 2,
        touchDrag: !1,
        responsive: {320: {items: 1}, 450: {items: 1}, 800: {items: 2}, 992: {items: 3}, 1100: {items: 3}}
    })
});*/
/*----------PHOTOS-GALLERY-----------------------------*/



// var triggerEl = document.querySelector('#myTab a[href="#profile"]')
// console.log(triggerEl);
// bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name