<?php $args = array(
        'post_type' => 'gallerys_foto',
        'publish' => true,

        'posts_per_page' => -1,
        'type_gallery' => 'gallery_rooms',
        'orderby' => 'date',
        'order' => 'ASC'
    );

$rooms = new WP_Query($args); ?>

<?php    if ($rooms->have_posts()) : ?>
    <div id="rooms-carousel" class="swiper-container mySwiperRooms">
        <div class="swiper-wrapper">
            <?php while ($rooms->have_posts()) : $rooms->the_post(); ?>
                <div class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-next swiper-button-next-rooms"></div>
        <div class="swiper-button-prev swiper-button-prev-rooms"></div>
        <div class="swiper-pagination"></div>
    </div>

    <?php endif;
    wp_reset_postdata();
    ?>

<script>
    var swiperRooms = new Swiper(".mySwiperRooms", {

        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next.swiper-button-next-rooms",
            prevEl: ".swiper-button-prev.swiper-button-prev-rooms",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },

            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>