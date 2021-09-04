<?php get_header(); ?>


<main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">
    <section id="main">
		<?php get_template_part('blocks/main/main-block');  ?>
    </section>


    <section id="prices">
        <div class="container ">
            <div class="section_white_head prices_head animate">
                <h1 class="text-center">Номера и цены</h1>
            </div>
            <div class="prices-block animate">
                <div id="price-buttons" class="select-price-buttons d-flex justify-content-center">
                    <div data-carousel="#dogs-carousel" class="select-price-button select-dogs active">Для собак
                    </div>
                    <div data-carousel="#cats-carousel" class="select-price-button select-cats">Для кошек</div>
                </div>

                <div class="container carousel-block animate">
                    <?php get_template_part('blocks/prices/dogs');  ?> 
                    <?php get_template_part('blocks/prices/cats') ?>
                </div>
            </div>
        </div>
        <div class="img-cat animate"></div>
    </section>

    <section id="additionals">
        <div class="container">
            <div class="section_white_head prices_head additional_head animate">
                <h1 class="text-center">Дополнительные услуги</h1>
            </div>

            <?php get_template_part('blocks/additionals/additionals');  ?>

            <div class="additionals-emoji additionals-eat-emoji animate"></div>
            <div class="additionals-emoji additionals-taxi-emoji animate"></div>
            <div class="additionals-emoji additionals-pows-emoji animate"></div>
            <div class="additionals-emoji additionals-scissors-emoji animate"></div>

        </div>
    </section>

    <section id="reserved">
        <div class="section_white_head section_head animate">
            <h1 id="reserved-form" class="text-center">Бронирование</h1>
        </div>
        <div class="container">
            <?php get_template_part('blocks/reserved/tabs');  ?>
            <div class="reserved-block animate">
                <h3 class="text-center"> <span>Легко и быстро</span> забронировать номер в нашей гостинце</h3>
                <div class="reserved-block__button text-center">
                    <input type="button" class="reserved-btn btn btn-primary" value="Забронировать" onclick="clW_e5a7a52da3a827c37b5a628cc932d191.openform();">
                </div>
            </div>
        </div>
        <div class="img-dog animate"></div>
    </section>
    <!--<section id="gallery-photos">
        <div class="container ">
            <div class="section_white_head photos_head animate">
                <h1 class="text-center">Галерея</h1>
            </div>
            <div class="photos-block animate">
                <div id="photos-buttons" class="select-photo-buttons d-flex justify-content-center">
                    <div data-carousel="#clients-carousel" class="select-photo-button select-clients active">Наши клиенты</div>
                    <div data-carousel="#rooms-carousel" class="select-photo-button select-rooms">Номера</div>
                </div>

                <div class="container carousel-block animate">
                    <?php get_template_part('blocks/gallery/gallery_clients');  ?>
                    <?php get_template_part('blocks/gallery/gallery_rooms') ?>
                </div>
            </div>
        </div>
        <!--<div class="img-cat animate"></div>
    </section>-->
    <section id="gallery-photos">
        <div class="container">

            <div class=" photos_head animate">
                <p class="gallery-photos--title text-center">Галерея</p>
            </div>
            <div class="photos-block animate">


                <div class="container carousel-block animate">
                    <?php get_template_part('blocks/gallery/gallery_swiper') ?>
                </div>
                <div id="photos-buttons" class="select-photo-buttons d-flex justify-content-center">
                    <div data-carousel="#clients-carousel" class="select-photo-button select-clients active">Наши клиенты</div>
                    <div data-carousel="#rooms-carousel" class="select-photo-button select-rooms">Номера</div>
                </div>
            </div>
        </div>

    </section>

    <section id="additionals" style="padding-bottom: 0;">
        <div class="container">
            <div class="section_white_head prices_head additional_head">
                <h1 class="text-center">Наши специалисты</h1>
            </div>

            <div id="employes">
                <?php get_template_part('blocks/employes/employes');  ?>
            </div>

            <?php/*<div class="additionals-emoji additionals-eat-emoji animate"></div>
            <div class="additionals-emoji additionals-taxi-emoji animate"></div>
            <div class="additionals-emoji additionals-pows-emoji animate"></div>
            <div class="additionals-emoji additionals-scissors-emoji animate"></div>*/?>

        </div>
    </section>

    <section id="contacts">
        <div class="contacts-block">

            <div class="section_white_head section_head animate">
                <h1 class="text-center">Контакты</h1>
            </div>
            <?php get_template_part('blocks/contacts/contacts');  ?>
        </div>
        <div class="img-mobile-phone animate"></div>
    </section>



    <a href="https://api.whatsapp.com/send?phone=<?php echo get_option('info_phone'); ?>" target="_blank" title="Написать в Whatsapp" rel="noopener noreferrer">
        <div class="whatsapp-button"><span class="icon"></span></div>
    </a>
</main>





<?php get_footer(); ?>