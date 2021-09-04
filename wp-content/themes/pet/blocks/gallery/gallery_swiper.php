<?php $args = array(
    'post_type' => 'gallerys_foto',
    'publish' => true,

    'posts_per_page' => -1,
    'type_gallery' => 'gallery_clients',
    'orderby' => 'date',
    'order' => 'ASC'
);
$wp_data = new WP_Query($args);

$wp_data_key = '-'.$args['type_gallery'];

?>

<?php if ($wp_data->have_posts()) : ?>
    <div class="swiper-container-wrapper active">
        <div id="clients-carousel" class="swiper-container swiper<?=$wp_data_key?> active">

            <div class="swiper-wrapper">
                <?php while ($wp_data->have_posts()) : $wp_data->the_post(); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="" alt="...">
                    </div>
                <?php endwhile; ?>

            </div>
            <div class="control-wrap">
                <div class="swiper-pagination swiper-pagination<?=$wp_data_key?>"></div>
            </div>
        </div>

        <div class="swiper-button-prev swiper-button-prev<?=$wp_data_key?>"></div>
        <div class="swiper-button-next swiper-button-next<?=$wp_data_key?>"></div>
    </div>

<?php endif;
wp_reset_postdata();
?>

<script>
    var swiperClients = new Swiper(".swiper<?=$wp_data_key?>", {

        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        /*autoplay: {
            delay: 3000,
        },*/
        pagination: {
            el: ".swiper-pagination<?=$wp_data_key?>",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next<?=$wp_data_key?>",
            prevEl: ".swiper-button-prev<?=$wp_data_key?>",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },

            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
<?php $args = array(
    'post_type' => 'gallerys_foto',
    'publish' => true,

    'posts_per_page' => -1,
    'type_gallery' => 'gallery_rooms',
    'orderby' => 'date',
    'order' => 'ASC'
);
$wp_data = new WP_Query($args);

$wp_data_key = '-'.$args['type_gallery'];

?>

<?php if ($wp_data->have_posts()) : ?>
<div class="swiper-container-wrapper">
    <div id="rooms-carousel" class="swiper-container swiper<?=$wp_data_key?>">
        <div class="swiper-wrapper">
            <?php while ($wp_data->have_posts()) : $wp_data->the_post(); ?>
                <div class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="" alt="...">
                </div>
            <?php endwhile; ?>
        </div>
        <div class="control-wrap ">
            <div class="swiper-pagination swiper-pagination<?=$wp_data_key?>"></div>
        </div>
    </div>

    <div class="swiper-button-prev swiper-button-prev<?=$wp_data_key?>"></div>
    <div class="swiper-button-next swiper-button-next<?=$wp_data_key?>"></div>
</div>
<?php endif;
wp_reset_postdata();
?>

<script>
    var swiperClients = new Swiper(".swiper<?=$wp_data_key?>", {

        slidesPerView: 1,
        loop: true,
        spaceBetween: 30,
        /*autoplay: {
            delay: 3000,
        },*/
        pagination: {
            el: ".swiper-pagination<?=$wp_data_key?>",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next<?=$wp_data_key?>",
            prevEl: ".swiper-button-prev<?=$wp_data_key?>",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },

            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
