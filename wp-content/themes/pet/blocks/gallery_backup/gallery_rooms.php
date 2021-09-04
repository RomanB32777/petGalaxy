<div id="rooms-carousel" class="rooms-block">
    <?php $args = array(
        'post_type' => 'gallerys_foto',
        'publish' => true,

        'posts_per_page' => -1,
        'type_gallery' => 'gallery_rooms',
        'orderby' => 'date',
        'order' => 'ASC'
    );
    $rooms = new WP_Query($args);

    if ($rooms->have_posts()) : ?>
        <div class="owl-carousel owl-rooms-carousel owl-theme">
            <?php while ($rooms->have_posts()) : $rooms->the_post(); ?>
				<?php get_template_part('blocks/gallery/cards/room');  ?>
            <?php endwhile; ?>
        </div>

    <?php endif;
    wp_reset_postdata();
    ?>
</div>