<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="RYZbCnZDIl_KfQZBxMe-7pPu7FQl78z-WNjMPKitTjQ" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link href="/wp-content/themes/pet/swiper/swiper-bundle.css" rel="stylesheet">
    <script src="/wp-content/themes/pet/swiper/swiper-bundle.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- <title>Document</title> -->
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <nav id="navbar" class="navbar navbar-light bg-light navbar-expand-lg ">
            <a class="navbar-brand logo-mobile " href="#">
                <img width="100" src="<?php bloginfo('template_directory'); ?>/img/л1__3_1.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- active -->
                        <a class="nav-link" href="#prices">Номера и цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#additionals">Доп. услуги </a>
                    </li>
                    <li class="navbar-brand logo">
                        <a class="logo-link " href="/">
                            <img width="100" src="<?php bloginfo('template_directory'); ?>/img/л1__3_1.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#reserved">Бронирование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>