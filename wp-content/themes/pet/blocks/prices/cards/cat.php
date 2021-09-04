<div class="block">
    <div class="card prices-card">
        <div class="card-img-block">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h3 class="card-title text-center"><?php the_title(); ?></h3>
            <ul class="card-text">
                <?php while (have_rows('advantages')) : the_row(); ?>
                    <?php if (get_sub_field('advantage')) { ?>
                        <li>
                            <?php echo get_sub_field('advantage'); ?>
                        </li>
                    <?php } ?>
                <?php endwhile; ?>
            </ul>
            <div class="card-button text-center">
                <a href="#reserved-form" class="card-prices-button btn btn-primary">Забронировать
                </a>
            </div>
        </div>
    </div>
</div>