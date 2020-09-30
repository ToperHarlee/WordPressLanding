<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="main__title">
        <?php the_field('main__title')?>
        </div>
        <div class="main__text">
        <?php the_field('main__text')?>
        </div>
        <div class="main__img">
            <img src="<?php bloginfo('template_url');?>/assets/img/main-img.png" alt="">
        </div>
        <div class="main__project">
            <div class="main__project-title"><?php the_field('main__project-title')?></div>            
            <?php
$featured_posts = get_field('main__project-item');
        if( $featured_posts ): ?>
            <ul>
            <?php foreach( $featured_posts as $post ): 
                setup_postdata($post); ?>
                <li class="main__project-item">

                <div class="main__project-name">
                <?php the_field('main__project-name')?>
                </div>
                <div class="main__project-size">
                <?php the_field('main__project-size')?>
                </div>
                <div class="main__project-area">
                <?php the_field('main__project-area')?>
                </div>
                <div class="main__project-price">
                <?php the_field('main__project-price')?>
                </div>
                <div class="main__project-images">
                    <div class="main__project-images--item">
                        <img src="<?php the_field('main__project-images--item-1')?>" alt="">
                    </div>
                    <div class="main__project-images--item">
                        <img src="<?php the_field('main__project-images--item-2')?>" alt="">
                    </div>
                </div>                 
                </li>
            <?php endforeach; ?>
            </ul>
            <?php 
            wp_reset_postdata(); ?>
            <?php endif; ?>
                
        </div>
    </div>  
    <div class="download">
        <img class="download__img" src="<?php bloginfo('template_url');?>/assets/img/home-download.png" alt="">
        <a class="download__link" href="<?php the_field('download__link')?>" download><span class="download__link-text">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</span></a>
    </div>
    <div class="container">
    <div class="main__gallery">
        <div class="main__gallery-title">
        <?php the_field('main__gallery-title')?>
        </div>
        <div class="main__gallery-text">
        <?php the_field('main__gallery-text')?>
        </div>
        <div id="main__gallery-inner">
        <?php the_field('photo')?>
            <!-- <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a>
            <a href="img/item-1.jpg"><img src="img/item-1.jpg" alt=""></a> -->
        </div>
    </div>
    <div class="main__img">
        <img src="<?php bloginfo('template_url');?>/assets/img/main-img.png" alt="">
    </div>
 </div>
</main>
    
<?php get_footer(); ?>
