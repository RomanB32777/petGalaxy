<div class="container">
    <div class="row animate">
        <div class="col-md-6 order-sm-first order-last col-map">
            <div class="contacts-map">
                <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.506238680364!2d37.73506031582974!3d55.78444698056177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b535ccaf9c03b9%3A0xad5ba8251c5076a1!2sPet%20Galaxy!5e0!3m2!1sru!2sru!4v1620577027328!5m2!1sru!2sru" width="600" height="432" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="col-md-6 contacts_information order-sm-last order-first contact-block__left">
            <p class="contacts__about"><?php echo get_option('info_contacts'); ?></p>
            <ul class="contacts__list contacts">
                <li class="contacts__item gps">
                    <div class="map-emoji"></div>
                    <a href="https://goo.gl/maps/BhVek81yqMKEiCnk9" target="_blank" rel="noreferrer noopener"><?php echo get_option('info_addr'); ?></a>
                </li>
                <li class="contacts__item telephone">
                    <div class="phone-emoji"></div>
                    <a href="tel:<?php echo get_option('info_phone'); ?>" target="_blank" rel="noreferrer noopener"><?php echo get_option('info_phone'); ?></a>


                </li>
                <li class="contacts__item email">
                    <div class="email-emoji"></div>
                    <a href="mailto:<?php echo get_option('info_email'); ?>" target="_blank" rel="noreferrer noopener"><?php echo get_option('info_email'); ?></a>

                </li>
                <li class="contacts__item clock">
                    <div class="clock-emoji"></div>
                    <p>Время работы: 9.00-21.00</p>

                </li>
            </ul>
        </div>
    </div>
    <div class="row animate">
        <div class="col-md-8 text-center offset-md-2 contacts_information">
            <p class="contacts__after_map">Если вы не смогли найти нужную вам информацию на нашем сайте
                мы с радостью проконсультируем вас по телефону или ответим на все ваши вопросы по электронной почте.
                Оставьте заявку и наши специалисты свяжутся с вами в самое ближайшее время.</p>
        </div>
        <div class="col-md-8 text-center offset-md-2" style="margin-top: 28px;">
            <a class="call-back" href="#popmake-158">Заказать звонок</a>
        </div>
    </div>
</div>