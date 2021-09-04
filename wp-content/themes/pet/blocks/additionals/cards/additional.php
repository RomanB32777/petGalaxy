<div class="block">
    <div class="card additional-card">
        <div class="card-img-block">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h3 class="card-title text-center"><?php the_title(); ?></h3>
            <ul class="card-text">
                <?php while (have_rows('descriptions')) : the_row(); ?>
                    <?php if (get_sub_field('description')) { ?>
                        <li>
                            <?php echo get_sub_field('description'); ?>
                        </li>
                    <?php } ?>
                <?php endwhile; ?>
            </ul>
            <?php if (get_field('prices-bool')) { ?>
                <div class="card-button text-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#additional-modal<?php the_ID(); ?>" class="card-prices-button btn btn-primary">Цены </button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>