<div class="block">
    <div class="card additional-card">
        <div class="card-img-block">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h3 class="card-title text-center"><?php the_title(); ?></h3>
            <p><?php the_field('profession'); ?></p>
        </div>
    </div>
</div>