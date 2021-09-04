<div class="main_container ">
    <div class="col_main_box">
        <div class="main_box ">
            <div class="main_box_content">
                <div class="main_box__heading">
                    <h1>
                        <span class="first_row">Гостиница для домашних</span>
                        <span class="second_row">животных</span>
                    </h1>
                    <p> <?php echo get_option('site_title'); ?> </p>
                </div>
                <div class="main_advantages">
                    <ul class="advantages_list d-flex justify-content-center">
						<?php 
                             for ($i = 1; $i <= get_option('count_of_adv'); $i++) { ?>
                                  <li class="advantages_list__item"><?php echo get_option('advantage_' . $i); ?></li>   
                             <?php }
                        ?>
<!--                         	<li class="advantages_list__item">Кормление и уход по привычному расписанию</li>
                            <li class="advantages_list__item">Постоянно находимся на связи</li>
                            <li class="advantages_list__item">Индивидуальные комфортные и просторные номера</li>
                            <li class="advantages_list__item">Ласка и игры с каждым постояльцем</li>
                            <li class="advantages_list__item">Охраняемая территория</li> -->
                    </ul>
                </div>
                <div class="main_button d-flex">
                    <a href="#reserved-form" class="main_button__btn btn btn-primary"><span>Забронировать</span></a>
                </div>
            </div>
        </div>
        <div class="bg_slider">
            <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"></div>
                    <div class="carousel-item"></div>
                    <div class="carousel-item"></div>
                    <div class="carousel-item"></div>
                </div>
            </div>
        </div>
    </div>
</div>