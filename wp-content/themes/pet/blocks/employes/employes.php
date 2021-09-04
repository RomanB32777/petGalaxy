<?php $args = array(
    'post_type' => 'employees',
    'publish' => true,
    'posts_per_page' => -1,
);
$services = new WP_Query($args);
if ($services->have_posts()) : ?>
    <div class="container carousel-block scrollme">
        <div class="additionals_block">
            <div class="owl-carousel owl-carousel-employees owl-theme">
                <?php while ($services->have_posts()) : $services->the_post(); ?>
				    <?php get_template_part('blocks/employes/cards/employer');  ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif;
wp_reset_postdata();
?>