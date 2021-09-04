<div id="clients-carousel" class="clients-block">
    <?php $args = array(
        'post_type' => 'gallerys_foto',
        'publish' => true,

        'posts_per_page' => -1,
        'type_gallery' => 'gallery_clients',
        'orderby' => 'date',
        'order' => 'ASC'
    );
    $clients = new WP_Query($args);

    if ($clients->have_posts()) : ?>
        <div class="owl-carousel owl-clients-carousel owl-theme">
            <?php while ($clients->have_posts()) : $clients->the_post(); ?>
                <?php get_template_part('blocks/gallery/cards/client'); ?>
            <?php endwhile; ?>
        </div>

    <?php endif;
    wp_reset_postdata();
    ?>
</div>



