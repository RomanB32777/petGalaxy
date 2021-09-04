<?php $args = array(
    'post_type' => 'reserved',
    'publish' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$reserved = new WP_Query($args);
if ($reserved->have_posts()) : ?>
    <div class="reserved_questions animate">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php while ($reserved->have_posts()) : $reserved->the_post(); ?>
				<?php get_template_part('blocks/reserved/tabs/tab');  ?>
            <?php endwhile; ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <?php while ($reserved->have_posts()) : $reserved->the_post(); ?>
				<?php get_template_part('blocks/reserved/tabs/tab-pane');  ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();
?>