<div class="tab-pane fade" id="tab-<?php the_ID(); ?>" role="tabpanel" aria-labelledby="<?php the_ID(); ?>-tab">
    <ul>
        <?php while (have_rows('points')) : the_row(); ?>
            <li>
                <?php if (get_sub_field('points')) { ?>
                    <p> <?php echo get_sub_field('points'); ?></p>
                <?php } ?>
            </li>
        <?php endwhile; ?>
    </ul>
    <div class="reserved-emojis">
        <?php while (have_rows('emojis')) : the_row(); ?>
            <?php if (get_sub_field('emoji')) { ?>
                <div class="reserved-emoji" style="background: url(<?php echo get_sub_field('emoji'); ?>) no-repeat center; background-size: contain;"></div>
            <?php } ?>
        <?php endwhile; ?>
    </div>
</div>