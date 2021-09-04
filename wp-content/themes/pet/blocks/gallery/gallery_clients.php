<?php $args = array(
    'post_type' => 'gallerys_foto',
    'publish' => true,

    'posts_per_page' => -1,
    'type_gallery' => 'gallery_clients',
    'orderby' => 'date',
    'order' => 'ASC'
);
$clients = new WP_Query($args); ?>

<?php if ($clients->have_posts()) : ?>
    <div id="clients-carousel" class="swiper-container mySwiperClient">
        <div class="swiper-wrapper">
            <?php while ($clients->have_posts()) : $clients->the_post(); ?>
                <div class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-next swiper-button-next-client"></div>
        <div class="swiper-button-prev swiper-button-prev-client"></div>
        <div class="swiper-pagination"></div>
    </div>
<?php endif;
wp_reset_postdata();
?>


<script>
    var swiperClients = new Swiper(".mySwiperClient", {

        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-client",
            prevEl: ".swiper-button-prev-client",
        },
        breakpoints: {
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