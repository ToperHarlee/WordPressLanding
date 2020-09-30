<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description');?></title>
    <!-- <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.min.css"> -->

    <?php wp_head(); ?>

</head>
<body>
   <!--картинка вставлена через style  в тэг для изменения в дальшейшем через WP  -->
<header class="header" style=" background-image: url(<?php the_field('top_bg')?>);">
    <div class="header__inner">
        <img src="<?php bloginfo('template_url');?>/assets/img/home.png" alt="">
        <div class="header__name"><?php the_field('header__name')?></div>
        <a class="phone" href="<?php the_field('phone')?>"><?php the_field('phone')?></a>
        <div class="header__title"><?php the_field('header__title')?></div>
        <div class="header__sale">
            <img src="<?php the_field('header__sale')?>" alt="">
        </div>
    </div>
</header>