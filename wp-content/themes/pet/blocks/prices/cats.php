<div id="cats-carousel" class="cats-block">
    <?php $args = array(
        'post_type' => 'rooms',
        'publish' => true,
        'posts_per_page' => -1,
        'type_room' => 'for-cats',
        'orderby' => 'date',
        'order' => 'ASC'
    );
    $dogs = new WP_Query($args);

    if ($dogs->have_posts()) : ?>
        <div class="owl-carousel owl-carousel-cats owl-theme">
            <?php while ($dogs->have_posts()) : $dogs->the_post(); ?>
				<?php get_template_part('blocks/prices/cards/cat');  ?>
            <?php endwhile; ?>
        </div>
    <?php endif;
    wp_reset_postdata();
    ?>
</div>