<div class="modal fade" id="additional-modal<?php the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Прейскурант - <?php the_title(); ?> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped ">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Наименование</th>
                            <th scope="col">Цена, руб.</th>
                            <!-- <th scope="col">Handle</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while (have_rows('prices')) : the_row(); ?>
                            <tr>
                                <?php if (get_sub_field('price-name') && get_sub_field('price-number')) { ?>
                                    <td scope="row"> <?php echo get_sub_field('price-name'); ?></td>
                                    <td> <?php echo get_sub_field('price-number'); ?></td>
                                <?php } ?>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>