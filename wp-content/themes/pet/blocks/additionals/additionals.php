<?php $args = array(
    'post_type' => 'services',
    'publish' => true,
    'posts_per_page' => -1,
);
$services = new WP_Query($args);
if ($services->have_posts()) : ?>
    <div class="container carousel-block animate scrollme animateme">
        <div class="additionals_block">
            <div class="owl-carousel owl-carousel-additionals owl-theme">
                <?php while ($services->have_posts()) : $services->the_post(); ?>
				    <?php get_template_part('blocks/additionals/cards/additional');  ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>


    <?php while ($services->have_posts()) : $services->the_post(); ?>
        <?php if (get_field('prices-bool')) { ?>
            <?php get_template_part('blocks/additionals/cards/price-modal');  ?>
        <?php } ?>
    <?php endwhile; ?>
<?php endif;
wp_reset_postdata();
?>